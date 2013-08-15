<?php

/**
 * gets nid from url_alias path if the path src is "node/[nid]"
 */
function digi_util_get_nid_from_url_alias($url){
  $nid = null;
  $path = drupal_lookup_path('source', substr($url, 1));
  if(substr($path, 0, 5) == 'node/'){
    $nid = substr($path, 5);
  }
  return $nid;
}
