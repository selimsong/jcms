<?php
/**
 * @file
 * homepage_slides.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function homepage_slides_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'homepage_slides';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Homepage Slides';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '0';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'slide' => 'slide',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 0;
  $handler->display->display_options['relationships']['nodequeue_rel']['queues'] = array(
    'homepage_slides' => 0,
    'zone_featured_phones' => 0,
    'zone_oem' => 0,
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Global: View result counter */
  $handler->display->display_options['fields']['counter']['id'] = 'counter';
  $handler->display->display_options['fields']['counter']['table'] = 'views';
  $handler->display->display_options['fields']['counter']['field'] = 'counter';
  $handler->display->display_options['fields']['counter']['label'] = '';
  $handler->display->display_options['fields']['counter']['exclude'] = TRUE;
  $handler->display->display_options['fields']['counter']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['counter']['counter_start'] = '1';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Slide bg image */
  $handler->display->display_options['fields']['field_slide_bg']['id'] = 'field_slide_bg';
  $handler->display->display_options['fields']['field_slide_bg']['table'] = 'field_data_field_slide_bg';
  $handler->display->display_options['fields']['field_slide_bg']['field'] = 'field_slide_bg';
  $handler->display->display_options['fields']['field_slide_bg']['label'] = '';
  $handler->display->display_options['fields']['field_slide_bg']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_bg']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_slide_bg']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_slide_bg']['settings'] = array(
    'image_style' => 'experience_slide_image',
    'image_link' => '',
  );
  /* Field: Content: Slide bg color */
  $handler->display->display_options['fields']['field_slide_bg_color']['id'] = 'field_slide_bg_color';
  $handler->display->display_options['fields']['field_slide_bg_color']['table'] = 'field_data_field_slide_bg_color';
  $handler->display->display_options['fields']['field_slide_bg_color']['field'] = 'field_slide_bg_color';
  $handler->display->display_options['fields']['field_slide_bg_color']['label'] = '';
  $handler->display->display_options['fields']['field_slide_bg_color']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_bg_color']['element_label_colon'] = FALSE;
  /* Field: Content: Slide Text Color */
  $handler->display->display_options['fields']['field_slide_text_color']['id'] = 'field_slide_text_color';
  $handler->display->display_options['fields']['field_slide_text_color']['table'] = 'field_data_field_slide_text_color';
  $handler->display->display_options['fields']['field_slide_text_color']['field'] = 'field_slide_text_color';
  $handler->display->display_options['fields']['field_slide_text_color']['label'] = '';
  $handler->display->display_options['fields']['field_slide_text_color']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_text_color']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_slide_text_color']['type'] = 'number_integer';
  $handler->display->display_options['fields']['field_slide_text_color']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 0,
  );
  /* Field: Content: Slide Text Position */
  $handler->display->display_options['fields']['field_slide_content_pos']['id'] = 'field_slide_content_pos';
  $handler->display->display_options['fields']['field_slide_content_pos']['table'] = 'field_data_field_slide_content_pos';
  $handler->display->display_options['fields']['field_slide_content_pos']['field'] = 'field_slide_content_pos';
  $handler->display->display_options['fields']['field_slide_content_pos']['label'] = '';
  $handler->display->display_options['fields']['field_slide_content_pos']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_content_pos']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_slide_content_pos']['type'] = 'number_integer';
  $handler->display->display_options['fields']['field_slide_content_pos']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 0,
  );
  /* Field: Content: Slide Nav Title */
  $handler->display->display_options['fields']['field_slide_button_teaser']['id'] = 'field_slide_button_teaser';
  $handler->display->display_options['fields']['field_slide_button_teaser']['table'] = 'field_data_field_slide_button_teaser';
  $handler->display->display_options['fields']['field_slide_button_teaser']['field'] = 'field_slide_button_teaser';
  $handler->display->display_options['fields']['field_slide_button_teaser']['label'] = '';
  $handler->display->display_options['fields']['field_slide_button_teaser']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_button_teaser']['element_label_colon'] = FALSE;
  /* Field: Content: Slide Image */
  $handler->display->display_options['fields']['field_slide_img']['id'] = 'field_slide_img';
  $handler->display->display_options['fields']['field_slide_img']['table'] = 'field_data_field_slide_img';
  $handler->display->display_options['fields']['field_slide_img']['field'] = 'field_slide_img';
  $handler->display->display_options['fields']['field_slide_img']['label'] = '';
  $handler->display->display_options['fields']['field_slide_img']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_img']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_slide_img']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_slide_img']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Slide Video ID */
  $handler->display->display_options['fields']['field_slide_video_id']['id'] = 'field_slide_video_id';
  $handler->display->display_options['fields']['field_slide_video_id']['table'] = 'field_data_field_slide_video_id';
  $handler->display->display_options['fields']['field_slide_video_id']['field'] = 'field_slide_video_id';
  $handler->display->display_options['fields']['field_slide_video_id']['label'] = '';
  $handler->display->display_options['fields']['field_slide_video_id']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_video_id']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_slide_video_id']['type'] = 'number_integer';
  $handler->display->display_options['fields']['field_slide_video_id']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 0,
  );
  /* Field: Content: Slide Link */
  $handler->display->display_options['fields']['field_slide_link']['id'] = 'field_slide_link';
  $handler->display->display_options['fields']['field_slide_link']['table'] = 'field_data_field_slide_link';
  $handler->display->display_options['fields']['field_slide_link']['field'] = 'field_slide_link';
  $handler->display->display_options['fields']['field_slide_link']['label'] = '';
  $handler->display->display_options['fields']['field_slide_link']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_slide_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_slide_link']['delta_offset'] = '0';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_plain';
  $export['homepage_slides'] = $view;

  return $export;
}
