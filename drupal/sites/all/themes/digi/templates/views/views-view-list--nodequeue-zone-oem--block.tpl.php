<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<section id="oemZone" class="oemZone clear-fix">
  <div class="oemZone-box clearfix">
    <div class="oem-inner">
      <div class="oem-list-box clearfix">

        <div class="list-box-header">
          <div class="heading">
            <h2>骁龙处理器为您提<br />供喜爱的终端</h2>
          </div>
        </div>

        <div class="oem-columns">
          <div class="oem-columns-inner">
            <div class="oem-list-column">
              <ul class="oem-list">
              <?php foreach ($rows as $id => $row): ?>
                  <?php print $row; ?>
              <?php endforeach; ?>
              </ul>
              <div class="oem-tile-back"></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
