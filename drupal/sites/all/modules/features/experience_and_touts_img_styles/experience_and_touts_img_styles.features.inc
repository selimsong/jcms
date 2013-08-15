<?php
/**
 * @file
 * experience_and_touts_img_styles.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function experience_and_touts_img_styles_image_default_styles() {
  $styles = array();

  // Exported image style: experience_slide_image.
  $styles['experience_slide_image'] = array(
    'name' => 'experience_slide_image',
    'effects' => array(
      8 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 482,
          'height' => 443,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: tout_image.
  $styles['tout_image'] = array(
    'name' => 'tout_image',
    'effects' => array(
      7 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 320,
          'height' => 270,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}
