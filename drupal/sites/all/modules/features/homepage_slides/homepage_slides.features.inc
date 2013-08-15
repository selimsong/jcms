<?php
/**
 * @file
 * homepage_slides.features.inc
 */

/**
 * Implements hook_views_api().
 */
function homepage_slides_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function homepage_slides_image_default_styles() {
  $styles = array();

  // Exported image style: slide_background.
  $styles['slide_background'] = array(
    'name' => 'slide_background',
    'effects' => array(
      11 => array(
        'label' => 'Scale',
        'help' => 'Scaling will maintain the aspect-ratio of the original image. If only a single dimension is specified, the other dimension will be calculated.',
        'effect callback' => 'image_scale_effect',
        'dimensions callback' => 'image_scale_dimensions',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'image',
        'name' => 'image_scale',
        'data' => array(
          'width' => 1024,
          'height' => 493,
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function homepage_slides_node_info() {
  $items = array(
    'slide' => array(
      'name' => t('slide'),
      'base' => 'node_content',
      'description' => t('Data content type for building slideshows on homepage.'),
      'has_title' => '1',
      'title_label' => t('Slide Title'),
      'help' => '',
    ),
  );
  return $items;
}
