<?php
/**
 * @file
 * homepage.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function homepage_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'homepage_zone';
  $context->description = '';
  $context->tag = 'block';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '<front>' => '<front>',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'front_zones-zone_nav' => array(
          'module' => 'front_zones',
          'delta' => 'zone_nav',
          'region' => 'content',
          'weight' => '-10',
        ),
        'views-homepage_slides-block' => array(
          'module' => 'views',
          'delta' => 'homepage_slides-block',
          'region' => 'content',
          'weight' => '-9',
        ),
        'views-zone_feature_phones-block' => array(
          'module' => 'views',
          'delta' => 'zone_feature_phones-block',
          'region' => 'content',
          'weight' => '-8',
        ),
        'views-nodequeue_zone_oem-block' => array(
          'module' => 'views',
          'delta' => 'nodequeue_zone_oem-block',
          'region' => 'content',
          'weight' => '-7',
        ),
        'front_zones-zone_video' => array(
          'module' => 'front_zones',
          'delta' => 'zone_video',
          'region' => 'content',
          'weight' => '-6',
        ),
        'front_zones-zone_social' => array(
          'module' => 'front_zones',
          'delta' => 'zone_social',
          'region' => 'content',
          'weight' => '-5',
        ),
        'front_zones-zone_touts' => array(
          'module' => 'front_zones',
          'delta' => 'zone_touts',
          'region' => 'content',
          'weight' => '-4',
        ),
        'front_zones-zone_footer' => array(
          'module' => 'front_zones',
          'delta' => 'zone_footer',
          'region' => 'content',
          'weight' => '-3',
        ),
      ),
    ),
  );
  $context->condition_mode = 1;

  // Translatables
  // Included for use with string extractors like potx.
  t('block');
  $export['homepage_zone'] = $context;

  return $export;
}
