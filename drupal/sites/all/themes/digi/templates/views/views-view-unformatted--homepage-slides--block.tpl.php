<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>



<div class="content">
<section id="features" class="experienceZone landing">
    <div class="expZone-box clearfix">
        <div class="carousel" data-transition="slide" data-paginate="">

          <?php foreach ($rows as $id => $row): ?>
            <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
              <?php print $row; ?>
            </div><!-- end carousel item -->
          <?php endforeach; ?>


        </div><!-- end carousel -->
    </div><!-- end expZone-box -->

    <div class="nav-tab">
      <a href="#devices" class="nav-tab-link">
        <img src="/sites/all/themes/digi/images/nav-tab-arrow.png" width="22" height="44" />
      </a>
    </div>

    <div class="chip-logo-container">
      <img src="/sites/all/themes/digi/images/chip-logo.png" width="209" height="78" alt="" />
    </div>

    <div class="snapdragon-logo-container">
      <img src="/sites/all/themes/digi/images/snapdragon-logo.png" width="95" height="66" alt="" />
    </div>
</section>
</div>




