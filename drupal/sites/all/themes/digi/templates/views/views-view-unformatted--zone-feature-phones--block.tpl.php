<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */

/**
 * NOTE: the closing tags for zone1 and zone1-inner are located at
 * views-view-unformatted--zone-feature-phones--attachment-1.tpl.php
 * We have to split the views into block and attachment so that the rails bar would work.
 */
 ?>
<section id="devices" class="deviceZone boxSized clearfix">
  <div class="deviceZone-box clearfix">
	<div class="deviceZone-inner clearfix">
    <div class="featured-device-tout">
      <div class="featured-device-tout-inner">

        <div class="featured-device-content">
          <div class="featured-device-content-inner">
            <div class="block">
              <div class="centered">
                <div class="featured-device-main-header">
                  <h2><?php print variable_get('zone_devices'); ?></h2>
                  <p><?php print variable_get('zone_devices_subhead'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="featured-device-image">
          <div class="device-image">
            <img src="/sites/all/themes/digi/images/featured-device-tout-image.png" />
          </div>
        </div>
      </div>
    </div>

    <div class="modal-container">
      <?php if (!empty($title)): ?>
        <h3><?php print $title; ?></h3>
      <?php endif; ?>
      <?php foreach ($rows as $id => $row): ?>
        <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
          <?php print $row; ?>
        </div>

      <?php endforeach; ?>

