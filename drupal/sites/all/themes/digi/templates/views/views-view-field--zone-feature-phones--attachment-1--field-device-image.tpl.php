<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */

 // thumb
 if($row->field_field_device_image) {
   $thumb = image_style_url('featured_phone_thumb', $row->field_field_device_image[0]['raw']['uri']);
   $thumb = '<img src="'. $thumb .'" alt="'.$row->field_field_device_image[0]['raw']['alt'].'" />';
 }
?>

<div id="node-title-<?php print $view->row_index; ?>" class="node-tab tab-<?php print $view->row_index; ?>">
  <div class="node-hover-bkgd"></div>
  <div class="color-bar"></div>
  <div class="device-container">
    <div class="device-title">
      <div class="device-title-inner">
        <div class="block">
          <div class="centered">
            <h3><?php print $row->node_title; ?></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="device-thumb">
      <?php print $thumb; ?>
    </div>
  </div>
</div>