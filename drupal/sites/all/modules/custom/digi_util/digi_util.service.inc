<?php

/**
 * Returns an array of BAM backup files ordered by date.
 */
function digi_util_bam_list($destination_id) {
  $list = array();
  backup_migrate_include('destinations');
  if ($destination = backup_migrate_get_destination($destination_id)) {
    $files = $destination->list_files();
    krsort($files);
    foreach ((array)$files as $file) {
      // Show only files that can be restored from.
      if ($file->is_recognized_type()) {
        $list[] = $file;
      }
    }
  }
  return $list;
}

/**
 * Transfers the most recent BAM backup file.
 */
function digi_util_bam_download($destination_id) {
  drupal_add_http_header('Cache-Control', 'no-cache, no-store');
  drupal_add_http_header('Edge-Control', 'No-store');
  $list = digi_util_bam_list($destination_id);
  $latest = current($list);
  $latest->transfer();
}
