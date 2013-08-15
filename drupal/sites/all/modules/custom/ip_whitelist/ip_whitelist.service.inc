<?php

function ip_whitelist_api_add($ip) {
  drupal_add_http_header('Cache-Control', 'no-cache, no-store');
  drupal_add_http_header('Edge-Control', 'No-store');
  $result = ip_whitelist_save($_GET['name'], $ip);

  if (empty($result)) {
    $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
    header($protocol . ' 500 Error');
  }
  drupal_json_output(array(
    'success' => $result,
  ));
}
