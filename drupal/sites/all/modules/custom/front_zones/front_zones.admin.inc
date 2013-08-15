<?php
function snapdragon_zones_video(){
  $form = array();

  $form['video_config'] = array(
    '#title' => t('Configuration for Brightcove video'),
    '#type' => 'fieldset',
  );

  $form['video_config']['video_playerid'] = array(
    '#title' => t('Video Player ID'),
    '#type' => 'textfield',
    '#description' => t('Enter Video Player ID'),
    '#default_value' => variable_get('video_playerid', '2291732881001'),
  );
  
  $form['video_config']['video_playerkey'] = array(
    '#title' => t('Video Player Key'),
    '#type' => 'textfield',
    '#description' => t('Enter Video Player Key'),
    '#default_value' => variable_get('video_playerkey', 'AQ~~,AAABSUycFdE~,CCE4gg49qaugDnCT8CyAp6Xy_ITuyL_O'),
  );
  

  $form['zone_video'] = array(
    '#title' => t('Home page Brightcove video'),
    '#type' => 'fieldset',
  );
  
  $form['zone_video']['zone_video_vid'] = array(
     '#title' => t('Brightcove Embed Code'),
     '#type' => 'textfield',
     '#description' => t('Brightcove Embed Code'),
     '#default_value' => variable_get('zone_video_vid', '2275251095001'),
   );
   
   $form['zone_video']['zone_video_title'] = array(
      '#title' => t('Zone Title'),
      '#type' => 'textfield',
      '#description' => t('Enter Zone Title'),
      '#default_value' => variable_get('zone_video_title', ''),
    );
   
  $form['zone_video']['zone_video_subhead'] = array(
      '#title' => t('Zone Subheader'),
      '#type' => 'textfield',
      '#description' => t('Enter Zone Subheader'),
      '#default_value' => variable_get('zone_video_subhead', ''),
    );
 
  
 
  return system_settings_form($form);
}

function snapdragon_zones_social($form, &$form_state) {
  $form = array();
  
  $form['#tree'] = TRUE;
  $vars = variable_get('snapdragon_socials');
  
   $form['zone_social'] = array(
      '#type' => 'fieldset', 
      '#title' => t('Social Media Info'), 
    );
  
  $form['zone_social']['zone_social_title'] = array(
     '#title' => t('Zone Social Title'),
     '#type' => 'textfield',
     '#description' => t('Zone Title'),
     '#default_value' => variable_get('zone_social_title', ''),
  );
   
  $form['zone_social']['zone_social_info'] = array(
     '#title' => t('Zone Social Info'),
     '#type' => 'textarea',
     '#description' => t('Zone Social Info'),
     '#default_value' => variable_get('zone_social_info', ''),
  );
  
  for($i = 1; $i < 4; $i++){
    $social = array( 1 => 'youku', 2 => 'weibo', 3 => 'qq' );
    
    $form['zone_social_'.$i] = array(
      '#type' => 'fieldset', 
      '#title' => t('Social Media: ') . $social[$i], 
    );
    
    $form['zone_social_'.$i]['zone_social_link'] = array(
      '#title' => t('Social Media Link'),
      '#type' => 'textfield',
      '#description' => t('Link to social page. Enter full html path (http://FULL-HTML.com) or drupal path with (/DRUPAL_PATH).'),
      '#default_value' => !empty($vars['zone_social_'.$i]['zone_social_link']) ? $vars['zone_social_'.$i]['zone_social_link'] : '',
    );
  
    $form['zone_social_'.$i]['zone_social_link_text'] = array(
      '#title' => t('Link Text'),
      '#type' => 'textfield',
      '#description' => t('Enter text for Link'),
      '#default_value' => !empty($vars['zone_social_'.$i]['zone_social_link_text']) ? $vars['zone_social_'.$i]['zone_social_link_text'] : '',
    );
  }
  
  $form['submit'] = array(
      '#type' => 'submit', 
      '#value' => 'Submit',
      '#weight' => 200, 
  );
  
  return $form;
}

function snapdragon_zones_nav($form, &$form_state) {
  $form = array();
  $form['zone_nav'] = array(
     '#title' => t('Nav for Front page'),
     '#type' => 'textarea',
     '#description' => t('Input the nav, with html markup. Leave it empty to display default nav setup.'),
     '#default_value' => variable_get('zone_nav', ''),
   );
   return system_settings_form($form);
}

function snapdragon_zones_devices($form, &$form_state) {
  $form = array();
  $form['zone_devices'] = array(
     '#title' => t('Devices Landing area text'),
     '#type' => 'textfield',
     '#description' => t('Header text for Zone: Featured Devices.'),
     '#default_value' => variable_get('zone_devices', ''),
   );
   $form['zone_devices_subhead'] = array(
      '#title' => t('Devices Landing area subtext'),
      '#type' => 'textfield',
      '#description' => t('Intro text for Zone: Featured Devices.'),
      '#default_value' => variable_get('zone_devices_subhead', ''),
    );
   return system_settings_form($form);
}


function snapdragon_zones_footer($form, &$form_state) {
  $form = array();
  $form['zone_footer_copyright'] = array(
    '#title' => t('Copyright text'),
    '#type' => 'textfield',
    '#description' => t('Copyright text'),
    '#default_value' => variable_get('zone_footer_copyright','&copy;2013 QUALCOMM Incorporated. All Rights Reserved.'),
  );
  $form['zone_footer'] = array(
     '#title' => t('Footer Text'),
     '#type' => 'textarea',
     '#description' => t('Footer Text'),
     '#default_value' => variable_get('zone_footer', '<p>Nothing in these materials is an offer to sell any of the components or devices referenced herein. References to "Qualcomm" may mean Qualcomm Incorporated, or subsidiaries or business units within the Qualcomm corporate structure, as applicable. <a href="#">Click here for more information about Qualcomm\'s new corporate structure.</a></p>'),
   );
   return system_settings_form($form);
}

function snapdragon_zones_touts($form, &$form_state) {
  $form = array();  
  
  for($i=1; $i<4; $i++){
    // tout 1
    $form['zone_tout_'.$i] = array(
       '#type' => 'fieldset', 
       '#title' => t('Tout '.$i), 
       '#weight' => $i, 
       '#collapsible' => TRUE, 
       '#collapsed' => FALSE,
     );

    $form['zone_tout_'.$i]['zone_tout_'.$i.'_title'] = array(
       '#title' => 'Tout '.$i. ' Title',
       '#type' => 'textfield',
       '#description' => 'Tout '.$i.' Title',
       '#default_value' => variable_get('zone_tout_'.$i.'_title', ''),
     );

    $form['zone_tout_'.$i]['zone_tout_'.$i.'_body'] = array(
      '#title' => t('Tout Body'),
      '#type' => 'textarea',
      '#description' => t('Tout Body'),
      '#default_value' => variable_get('zone_tout_'.$i.'_body', ''),
    );

    $form['zone_tout_'.$i]['zone_tout_'.$i.'_img'] = array(
      '#title' => t('Tout Image'),
      '#type' => 'managed_file',
      '#upload_location' => 'public://',
      '#description' => t('Tout Image'),
      '#default_value' => variable_get('zone_tout_'.$i.'_img', ''),
    );  
    
    $form['zone_tout_'.$i]['zone_tout_'.$i.'_img_alt'] = array(
       '#title' => 'Image '.$i. ' Alt tag',
       '#type' => 'textfield',
       '#default_value' => variable_get('zone_tout_'.$i.'_img_alt', ''),
     );

    for($j=1; $j < 4; $j++) {
      $form['zone_tout_'.$i]['links_'.$j] = array(
        '#title' => t('Link: '. $j),
        '#type' =>'fieldset',
      );
      $form['zone_tout_'.$i]['links_'.$j]['zone_tout_'.$i.'_link_'.$j] = array(
        '#title' => t('Link'),
        '#type' => 'textfield',
        '#description' => t('Link'),
        '#default_value' => variable_get('zone_tout_'.$i.'_link_'.$j, ''),
      );
      $form['zone_tout_'.$i]['links_'.$j]['zone_tout_'.$i.'_link_text_'.$j] = array(
        '#title' => t('Link Text'),
        '#type' => 'textfield',
        '#description' => t('Link Text'),
        '#default_value' => variable_get('zone_tout_'.$i.'_link_text_'.$j, ''),
    );    
    }
  }
  
  $form['submit'] = array(
     '#type' => 'submit', 
     '#value' => 'Submit',
     '#weight' => 200, 
   );
 
   return $form;
}

function snapdragon_zones_intro_submit($form, &$form_state) {
  
  $slides = variable_get('intro_slides');
  for($i = 1; $i < 4; $i++) {

    //Save new files
    if (!empty($form_state['values']['zone_intro_texts_'.$i]['zone_intro_img'])) {
      $file = file_load($form_state['values']['zone_intro_texts_'.$i]['zone_intro_img']);
      $file->status = FILE_STATUS_PERMANENT;
      file_save($file);
      file_usage_add($file, 'front_zones', 'zone_intro_img', $file->fid);  
      
    }
  }

  variable_set('intro_slides', $form_state['values']);
}

function snapdragon_zones_social_submit($form, &$form_state) {
  variable_set('snapdragon_socials', $form_state['values']);
}

function snapdragon_zones_touts_submit($form, &$form_state) {
  for($i=1; $i<4; $i++){
    //setting images
    if(!empty($form_state['values']['zone_tout_'.$i.'_img'])) {
      $file = file_load($form_state['values']['zone_tout_'.$i.'_img']);
      $file->status = FILE_STATUS_PERMANENT;
      file_save($file);
      file_usage_add($file, 'front_zones', 'zone_tout_'.$i.'_img', $file->fid);  
      variable_set('zone_tout_'.$i.'_img', $form_state['values']['zone_tout_'.$i.'_img']);
    }
    // setting title, body, img alt tag
    variable_set('zone_tout_'.$i.'_title', $form_state['values']['zone_tout_'.$i.'_title']);
    variable_set('zone_tout_'.$i.'_body', $form_state['values']['zone_tout_'.$i.'_body']);
    variable_set('zone_tout_'.$i.'_img_alt', $form_state['values']['zone_tout_'.$i.'_img_alt']);
    
    // settings links
    for($j=1; $j<4; $j++) {
      variable_set('zone_tout_'.$i.'_link_'.$j, $form_state['values']['zone_tout_'.$i.'_link_'.$j]);
      variable_set('zone_tout_'.$i.'_link_text_'.$j, $form_state['values']['zone_tout_'.$i.'_link_text_'.$j]);
    }
  }
}
