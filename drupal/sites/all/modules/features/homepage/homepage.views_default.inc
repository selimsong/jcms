<?php
/**
 * @file
 * homepage.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function homepage_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'zone_feature_phones';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Zone: Feature Phones';
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
  $handler->display->display_options['pager']['options']['items_per_page'] = '4';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: Nodequeue: Queue */
  $handler->display->display_options['relationships']['nodequeue_rel']['id'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['nodequeue_rel']['field'] = 'nodequeue_rel';
  $handler->display->display_options['relationships']['nodequeue_rel']['required'] = TRUE;
  $handler->display->display_options['relationships']['nodequeue_rel']['limit'] = 1;
  $handler->display->display_options['relationships']['nodequeue_rel']['queues'] = array(
    'zone_featured_phones' => 'zone_featured_phones',
    'zone_oem' => 0,
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Global: View result counter */
  $handler->display->display_options['fields']['counter']['id'] = 'counter';
  $handler->display->display_options['fields']['counter']['table'] = 'views';
  $handler->display->display_options['fields']['counter']['field'] = 'counter';
  $handler->display->display_options['fields']['counter']['label'] = '';
  $handler->display->display_options['fields']['counter']['exclude'] = TRUE;
  $handler->display->display_options['fields']['counter']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['counter']['counter_start'] = '1';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['exclude'] = TRUE;
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Device Subheader */
  $handler->display->display_options['fields']['field_device_subheader']['id'] = 'field_device_subheader';
  $handler->display->display_options['fields']['field_device_subheader']['table'] = 'field_data_field_device_subheader';
  $handler->display->display_options['fields']['field_device_subheader']['field'] = 'field_device_subheader';
  $handler->display->display_options['fields']['field_device_subheader']['label'] = '';
  $handler->display->display_options['fields']['field_device_subheader']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_device_subheader']['element_label_colon'] = FALSE;
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['label'] = '';
  $handler->display->display_options['fields']['nid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Device Link */
  $handler->display->display_options['fields']['field_device_link']['id'] = 'field_device_link';
  $handler->display->display_options['fields']['field_device_link']['table'] = 'field_data_field_device_link';
  $handler->display->display_options['fields']['field_device_link']['field'] = 'field_device_link';
  $handler->display->display_options['fields']['field_device_link']['label'] = '';
  $handler->display->display_options['fields']['field_device_link']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_device_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_device_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_device_link']['delta_offset'] = '0';
  /* Field: Content: Device Main Image */
  $handler->display->display_options['fields']['field_device_main_image']['id'] = 'field_device_main_image';
  $handler->display->display_options['fields']['field_device_main_image']['table'] = 'field_data_field_device_main_image';
  $handler->display->display_options['fields']['field_device_main_image']['field'] = 'field_device_main_image';
  $handler->display->display_options['fields']['field_device_main_image']['label'] = '';
  $handler->display->display_options['fields']['field_device_main_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_device_main_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_device_main_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_device_main_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Device Thumbnail Image */
  $handler->display->display_options['fields']['field_device_image']['id'] = 'field_device_image';
  $handler->display->display_options['fields']['field_device_image']['table'] = 'field_data_field_device_image';
  $handler->display->display_options['fields']['field_device_image']['field'] = 'field_device_image';
  $handler->display->display_options['fields']['field_device_image']['label'] = '';
  $handler->display->display_options['fields']['field_device_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_device_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_device_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_device_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Device Thumbnail Image */
  $handler->display->display_options['fields']['field_device_image_1']['id'] = 'field_device_image_1';
  $handler->display->display_options['fields']['field_device_image_1']['table'] = 'field_data_field_device_image';
  $handler->display->display_options['fields']['field_device_image_1']['field'] = 'field_device_image';
  $handler->display->display_options['fields']['field_device_image_1']['label'] = '';
  $handler->display->display_options['fields']['field_device_image_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_device_image_1']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_device_image_1']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
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
    'device' => 'device',
  );

  /* Display: Attachment */
  $handler = $view->new_display('attachment', 'Attachment', 'attachment_1');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Device Thumbnail Image */
  $handler->display->display_options['fields']['field_device_image']['id'] = 'field_device_image';
  $handler->display->display_options['fields']['field_device_image']['table'] = 'field_data_field_device_image';
  $handler->display->display_options['fields']['field_device_image']['field'] = 'field_device_image';
  $handler->display->display_options['fields']['field_device_image']['label'] = '';
  $handler->display->display_options['fields']['field_device_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_device_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_device_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Nodequeue: Position */
  $handler->display->display_options['sorts']['position']['id'] = 'position';
  $handler->display->display_options['sorts']['position']['table'] = 'nodequeue_nodes';
  $handler->display->display_options['sorts']['position']['field'] = 'position';
  $handler->display->display_options['sorts']['position']['relationship'] = 'nodequeue_rel';
  $handler->display->display_options['displays'] = array(
    'block' => 'block',
    'default' => 0,
  );
  $handler->display->display_options['attachment_position'] = 'after';
  $export['zone_feature_phones'] = $view;

  return $export;
}
