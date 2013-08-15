<?php

/**
 * Implements hook_crud_tools().
 */
function ip_whitelist_crud_tools() {
  return array(
    'ip_whitelist' => array(
      'name' => 'IP Whitelist',
      'list_ui' => 'IPPatternListUI',
      'item_ui' => 'IPPatternUI',
      'item' => 'IPPattern',
    ),
  );
}
