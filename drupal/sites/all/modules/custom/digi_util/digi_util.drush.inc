<?php

/**
 * Implements of hook_drush_help().
 */
function digi_util_drush_help($section) {
  switch ($section) {
    case 'drush:content-type-export':
      return dt('Export a content type. Usage: drush cte blog');
    case 'drush:content-type-import':
      return dt('Import a content type. If the "delete" option is given, any fields that are not found in the export file will be deleted. Usage: drush cti blog --delete');
    case 'drush:content-type-module-init':
      return dt('This will create a module in sites/all/module/custom. The module will have hooks for implementing a node type.');
  }
}

/**
 * Implements of hook_drush_command().
 */
function digi_util_drush_command() {
  $items = array();

  $items['content-type-export'] = array(
    'description' => 'Export a content type.',
    'aliases' => array('cte'),
    'arguments' => array(
      'type' => 'The content type to export.',
    ),
    'options' => array(
      'module' => 'The module directory where the exported data will be saved.',
    ),
  );
  $items['content-type-import'] = array(
    'description' => 'Import a content type.',
    'aliases' => array('cti'),
    'arguments' => array(
      'type' => 'The content type to import.',
    ),
    'options' => array(
      'delete' => 'If used, fields that do not exist in the imported data will be deleted.',
      'module' => 'The module directory where the date will be imported from.',
    ),
  );
  $items['ct-module-init'] = array(
    'description' => 'Create a content type module.',
    'arguments' => array(
      'module_name' => 'The machine name of the module',
    ),
  );

  return $items;
}

function drush_digi_util_ct_module_init($module_name) {
  if (empty($module_name)) {
    return;
  }
  $modules_path = 'sites/all/modules/custom';
  $dir = $modules_path . '/' . $module_name;

  // Prepare to write files.
  if (is_dir($dir)) {
    drush_set_error('DIGI_UTIL_FILE_ERROR', dt('Module directory already exists.'));
    return;
  }
  if (!file_prepare_directory($dir, FILE_CREATE_DIRECTORY) && !mkdir($dir, 0775, TRUE)) {
    drush_set_error('DIGI_UTIL_FILE_ERROR', dt('Could not create module directory.'));
    return;
  }
  if (!mkdir($dir . '/templates', 0775, TRUE)) {
    drush_set_error('DIGI_UTIL_FILE_ERROR', dt('Could not create module templates directory.'));
    return;
  }
  if (!mkdir($dir . '/content_types', 0775, TRUE)) {
    drush_set_error('DIGI_UTIL_FILE_ERROR', dt('Could not create module content_types directory.'));
    return;
  }

  $info = array();
  $info['name'] = drush_prompt(dt('Human-readable module name'));
  $info['description'] = drush_prompt(dt('Module description'));
  $info['package'] = 'Qualcomm Content';
  $info['core'] = '7.x';

  $handle = fopen($dir . "/{$module_name}.info", 'w');
  $info_file = '';
  foreach ($info as $key => $value) {
    drush_op('fprintf', $handle, "%s = %s\n", $key, $value);
  }
  fclose($handle);

  $ctinfo = array();
  $ctinfo['type'] = drush_prompt(dt('Machine name of content type'));
  $ctinfo['name'] = drush_prompt(dt('Human-readable name of content type'));
  $ctinfo['description'] = drush_prompt(dt('Description of content type'));

  $handle = fopen($dir . "/{$module_name}.module", 'w');
  $module_file = <<<EOD
<?php

/**
 * @file
 * Put file description and documentation here.
 */

/**
 * Implements hook_node_info().
 */
function {$module_name}_node_info() {
  return array(
    '{$ctinfo['type']}' => array(
      'name' => t('{$ctinfo['name']}'),
      'base' => '{$module_name}',
      'description' => t('{$ctinfo['description']}'),
    ),
  );
}

/**
 * Implements hook_init().
 */
function {$module_name}_init() {
  global \$conf;
  // Specify pathauto pattern(s) here.
  \$conf['pathauto_node_{$ctinfo['type']}_pattern'] = 'content/[node:title]';
}

/**
 * Implements hook_form().
 */
function {$module_name}_form(\$node, \$form_state) {
  return node_content_form(\$node, \$form_state);
}

/**
 * Implements hook_view().
 */
function {$module_name}_view(\$node, \$view_mode) {
  return \$node;
}

/**
 * Implements hook_insert().
 */
function {$module_name}_insert(\$node) {

}

/**
 * Implements hook_update().
 */
function {$module_name}_update(\$node) {

}

/**
 * Implements hook_delete().
 */
function {$module_name}_delete(\$node) {

}

/**
 * Implements hook_theme().
 */
function {$module_name}_theme(\$existing, \$type, \$theme, \$path) {
  return array(
    'node__{$ctinfo['type']}' => array(
      'render element' => 'elements',
      'template' => 'node--{$ctinfo['type']}',
      'path' => \$path . '/templates',
    ),
  );
}

EOD;
  drush_op('fwrite', $handle, $module_file);
  fclose($handle);

  copy('modules/node/node.tpl.php', $dir . '/templates/node--' . $ctinfo['type'] . '.tpl.php');
}

/**
 * Export content type command.
 */
function drush_digi_util_content_type_export($type = NULL) {
  module_enable(array('bundle_copy'));
  if (!_digi_util_drush_ct_setup($type)) {
    return;
  }

  $module = _digi_util_drush_get_module($type);
  if ($module === FALSE) {
    return;
  }

  $dir = drupal_get_path('module', $module) . '/content_types';

  // Prepare to write file.
  if (!file_prepare_directory($dir, FILE_CREATE_DIRECTORY) && !mkdir($dir, 0775, TRUE)) {
    drush_set_error('DIGI_UTIL_FILE_SAVE', dt('Could not create content_type directory.'));
    return;
  }

  $file_path = $dir . "/{$type}.content";
  $handle = fopen($file_path, "w");
  if ($handle === FALSE) {
    drush_set_error('DIGI_UTIL_FILE_SAVE', dt('Could not open export file for writing.'));
    return;
  }

  // Gather field data
  $field_options = $instances = array();
  $instances += field_info_instances('node', $type);
  ksort($instances);
  $keys = array_keys($instances);
  $fields = array_combine($keys, $keys);

  // Gather fieldgroup data.
  $fieldgroups = array();
  $fieldgroups_full = array();
  $all_groups = function_exists('field_group_info_groups') ? field_group_info_groups() : array();
  if (!empty($all_groups)) {
    foreach ($all_groups['node'][$type]['form'] as $group_key => $group) {
      $fieldgroups[$group->identifier] = $group->identifier;
      $fieldgroups_full[$group->identifier] = $group;
    }
  }

  // Build mock $form_state values.
  $values = array(
    1 => array('bundles' => array($type => $type)),
    2 => array(
      'fields' => $fields,
      'fieldgroups' => $fieldgroups,
      'fieldgroups-full' => $fieldgroups_full,
    ),
  );

  // Export data and write to file.
  $data = _bundle_copy_export_data('node', $values);
  $result = drush_op('fwrite', $handle, "<?php\n" . $data);

  if ($result) {
    drush_log(dt('Content type !type was exported to !path', array('!type' => $type, '!path' => $file_path)), 'success');
  }
  else {
    drush_set_error('DIGI_UTIL_FILE_SAVE', dt("There was an error writing to the file $file_path"));
  }
  module_disable(array('bundle_copy'), FALSE);
}

/**
 * Import content type command.
 */
function drush_digi_util_content_type_import($type = NULL) {
  module_enable(array('bundle_copy'));
  if (!_digi_util_drush_ct_setup($type)) {
    return;
  }

  $module = _digi_util_drush_get_module($type);
  if ($module === FALSE) {
    return;
  }

  $dir = drupal_get_path('module', $module) . '/content_types';

  $file_path = $dir . "/{$type}.content";
  $handle = fopen($file_path, "r");
  if ($handle === FALSE) {
    drush_set_error('DIGI_UTIL_FILE_READ', dt('Could not open export file for reading.'));
    return;
  }

  fgets($handle);
  $macro = fread($handle, filesize($file_path));

  $form_state['values']['macro'] = $macro;
  bundle_copy_import_submit(array(), $form_state);

  // If delete opion is given, delete fields
  if ((drush_get_option('delete', FALSE))) {
    eval($macro);
    $imported_fields = array_keys($data['instances']);

    // Gather field data
    $instances = field_info_instances('node', $type);
    $current_fields = array_keys($instances);

    // Find existing fields that do not exist in the imported content type.
    $diff = array_diff($current_fields, $imported_fields);

    foreach ($diff as $field) {
      drush_op('field_delete_instance', $instances[$field]);
      drupal_set_message(dt('!name field has been deleted.', array('!name' => $field)));
    }
  }
  module_disable(array('bundle_copy'));
}

function _digi_util_drush_ct_setup(&$type) {
  if (!module_exists('bundle_copy')) {
    drush_set_error('DIGI_UTIL_UNMET_DEPENDENCY', dt('The bundle_copy module must be installed.'));
    return FALSE;
  }

  $types = _bundle_copy_bundle_info('node', TRUE);

  if (empty($type)) {
    $options = array();
    foreach ($types as $name => $info) {
      $options[$name] = $info['label'];
    }
    $type = drush_choice($options, 'Enter a number to choose which content type to export.');
  }

  // Cancelled by user.
  if (empty($type)) {
    return FALSE;
  }

  // Verify that content type exists.
  if (!isset($types[$type])) {
    drush_set_error('DIGI_UTIL_INVALID_CONTENT_TYPE', dt('Invalid content type.'));
    return FALSE;
  }

  return TRUE;
}

function _digi_util_drush_get_module($type) {
  $module = drush_get_option('module', FALSE);

  if (empty($module)) {
    // Attempt to detect module automatically.
    foreach (module_implements('node_info') as $implementing_module) {
      $node_types = module_invoke($implementing_module, 'node_info');
      if (isset($node_types[$type])) {
        $module = $implementing_module;
        break;
      }
    }
  }

  // Verify that the module exists.
  if (empty($module) || !module_exists($module)) {
    drush_set_error('DIGI_UTIL_INVALID_MODULE', dt('Could not find module directory to export to.'));
    return FALSE;
  }
  return $module;
}
