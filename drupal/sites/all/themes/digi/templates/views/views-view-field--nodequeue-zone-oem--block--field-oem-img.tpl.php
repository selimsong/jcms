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

  $img = image_style_url('oem_thumb', $row->field_field_oem_img[0]['raw']['uri']);
  $oem_thumb = '<img src="'. $img .'" alt="'.$row->field_field_oem_img[0]['raw']['alt'].'" />';

  $img_bg = image_style_url('oem_img_bg', $row->field_field_oem_img_bg[0]['raw']['uri']);
  $oem_bg = '<img src="'. $img_bg .'" alt="'.$row->field_field_oem_img_bg[0]['raw']['alt'].'" />';

  if($row->field_field_oem_bg_color){
    switch($row->field_field_oem_bg_color[0]['raw']['value']){

      case 'yellow':
        $bg_color = '#fed94f';
        break;

      case 'turquoise':
        $bg_color = '#00beb6';
        break;

      case 'red':
        $bg_color = '#ee3124';
        break;

      default :
        $bg_color = $row->field_field_oem_bg_color[0]['raw']['value'];
        break;
    }
  }

  if($row->field_field_oem_text_color) {
    switch($row->field_field_oem_text_color[0]['raw']['value']){

      case 'black':
        $text_color = '#595959';
        break;

      case 'white':
        $text_color = '#FFF';
        break;

      default :
        $text_color = $row->field_field_oem_text_color[0]['raw']['value'];
        break;
    }
  }

?>
<li id="oem-<?php print $row->nodequeue_nodes_node_position; ?>" class="oem-list-item oem-<?php print $row->nodequeue_nodes_node_position; ?>" data-text-color="<?php print $text_color ?>" data-bg-color="<?php print $bg_color ?>">

  <div class="oem-tile-front">
    <?php print $oem_thumb; ?>
  </div>

  <div class="oem-tile-content">
    <div class="logo-phone">
      <div class="phone-container">
        <?php print $oem_bg; ?>
      </div>
      <div class="logo-container">
        <?php print $oem_thumb; ?>
      </div>
    </div>

    <div class="oem-content-container">
      <div class="heading">
        <h2><?php print $row->node_title; ?></h2>
      </div>
      <div class="oem-content">
          <?php print $row->field_body[0]['rendered']['#markup'];?>
      </div>
      <div class="cta-link-container">
          <?php if($row->field_field_oem_link) {
             $links = array();
             $links = $row->field_field_oem_link;

             foreach($links as $link){
               print '<div class="cta-link">
                        <div class="cta-link-content oem">'
                        . l($link['rendered']['#element']['title'],$link['rendered']['#element']['url'], array($link['rendered']['#element']['attributes']))
                        .'</div>
                     </div>';
             }
           }
          ?>
      </div>
    </div>
  </div>
</li>