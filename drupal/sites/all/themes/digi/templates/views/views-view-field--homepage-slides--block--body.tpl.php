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

$data = array();
$data['nid'] = $row->nid;
$data['slide_title'] = $row->node_title;
$data['content_pos'] = $row->field_field_slide_content_pos[0]['raw']['value'];
$data['content'] = $row->field_body[0]['rendered']['#markup'];
$data['links'] = $row->field_field_slide_link;
$data['text_color'] = $row->field_field_slide_text_color[0]['raw']['value'];

$bg = $row->field_field_slide_bg_color[0]['raw']['value'];
switch($bg) {
  case 'red':
    $data['bg_color'] = '#ee3124';
    break;
    
  case 'turquoise':
    $data['bg_color'] = '#00beb6';
    break;
  
  case 'yellow':
    $data['bg_color'] = '#fed94f';
    break;
    
    // set color to user input color
  default:
  $data['bg_color'] = $bg;
    break;
}

//dpm($row); 
if($row->field_field_slide_bg[0]['raw']['uri']){
  $bg_img = '<img src="' .image_style_url('slide_background', $row->field_field_slide_bg[0]['raw']['uri']) . '" />';
}
?>

<div class="item-container item-container-<?php print $row->nodequeue_nodes_node_position; ?>" data-teaser="<?php print $row->field_field_slide_button_teaser[0]['raw']['value']; ?>" style="background: <?php print $data['bg_color']; ?>" >
  <div class="item-container-bg">
    <?php print $bg_img; ?>
  </div>
  <?php 
  if($row->field_field_slide_video_id) {
    $data['video_id'] = $row->field_field_slide_video_id[0]['raw']['value'];
    print theme('intro_content_video', $data);
  } 
  else{
    if($row->field_field_slide_img) {
      $data['slide_img'] = $row->field_field_slide_img;
      print theme('intro_content_img', $data);
    }
  }
  ?>
</div>
