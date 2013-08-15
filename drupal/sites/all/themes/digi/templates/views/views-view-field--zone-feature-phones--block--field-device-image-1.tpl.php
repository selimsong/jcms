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

if($row->field_field_device_main_image) {
  $main = image_style_url('featured_phone_main', $row->field_field_device_main_image[0]['raw']['uri']);
  $main_img = '<img src="'. $main .'" alt="'.$row->field_field_device_main_image[0]['raw']['alt'].'" />';
}
?>

<div id="container-modal-<?php print $view->row_index;?>" class="modal-detail detail-<?php print $view->row_index; ?>">
  <div class="device-main-image">
    <div class="main-image-inner">
      <?php print $main_img; ?>
    </div>
  </div>

  <div class="device-main-content">
    <div class="heading-block">
      <div class="content-title">
        <h2><?php print $row->node_title;?></h2>
      </div>
      <div class="content-subhead">
        <?php print $row->field_field_device_subheader[0]['rendered']['#markup']; ?>
      </div>
    </div> <!-- /.heading-block -->

    <div class="content-body">
      <?php print $row->field_body[0]['rendered']['#markup']; ?>
    </div>

    <div class="device-link-container">
      <?php //Links
        if($row->field_field_device_link) {
          $links = array();
          $links = $row->field_field_device_link;
          foreach($links as $link){
            print '<div class="device-link">
                     <div class="device-link-content">'
                     . l($link['rendered']['#element']['title'],$link['rendered']['#element']['url'], array($link['rendered']['#element']['attributes']))
                     .'</div>
                  </div>';
          }
        }
      ?>
    </div>

    <div class="close-btn">
      <a href="#close"></a>
    </div>
  </div>

</div>