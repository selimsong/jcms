<?php

/**
 * Implements of hook_drush_help().
 */
function ip_whitelist_drush_help($section) {
  switch ($section) {
    case 'drush:ip-whitelist-add':
      return dt('Adds an IP address to the whitelist.');
  }
}

/**
 * Implements of hook_drush_command().
 */
function ip_whitelist_drush_command() {
  $items = array();
  $items['ip-whitelist-add'] = array(
    'description' => 'Add an IP address to the whitelist. If no IP address is given, your current IP address will be used.',
    'aliases' => array('ip-add'),
    'arguments' => array(
      'name' => 'A brief description of the IP address.',
      'to' => 'The environment on which to add the IP.',
    ),
    'options' => array(
      'ip' => 'The IP address to add to the whitelist.',
    ),
  );

  return $items;
}

function drush_ip_whitelist_add($name, $destination = '@self') {
  if (empty($name) || $name == '?') {
    drush_set_error('IP_WHITELIST_INVALID_NAME', dt('Invalid name.'));
    return FALSE;
  }

  $ip = drush_get_option('ip', NULL);
  if (empty($ip)) {
    $response = drupal_http_request('http://jsonip.com');
    if ($response->code == 200) {
      $ip = json_decode($response->data)->ip;
      drush_set_option('ip', $ip);
    }
  }
  if (!filter_var($ip, FILTER_VALIDATE_IP)) {
    var_dump($ip);
    drush_set_error('IP_WHITELIST_INVALID_IP', dt('Invalid IP address.'));
    return FALSE;
  }

  $destination_settings = drush_sitealias_overlay_options(drush_sitealias_get_record($destination), 'target-');
  if (isset($destination_settings['site-list'])) {
    foreach ($destination_settings['site-list'] as $target) {
      $data = drush_redispatch_get_options();
      drush_invoke_process('@self', 'ip-whitelist-add', array($name, $target), $data);
    }
    return;
  }

  if ($destination == '@self') {
    ip_whitelist_save($name, $ip);
  }
  else {
    $url = 'http://' . $destination_settings['uri'] . '/ip-whitelist/add/' . $ip;
    $result = digi_util_signed_http_request($url, array('name' => $name));
    if ($result->code == 200) {
      drupal_set_message(dt("IP address was added to the whitelist. (!env)", array('!env' => $destination)));
    }
    else {
      drush_set_error('IP_WHITELIST_ADD_FAILED', dt("There was an error adding your IP address to the whitelist. (!env)", array('!env' => $destination)));
    }
  }

}