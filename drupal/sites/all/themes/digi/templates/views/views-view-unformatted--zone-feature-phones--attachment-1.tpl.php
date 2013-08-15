<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div class="node-container">
  <div class="marker-bar-rail">
    <div class="marker-bar-container pos-tab-0"></div>
  </div>
  <?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <?php foreach ($rows as $id => $row): ?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
  <?php print $row; ?>
  </div>
  <?php endforeach; ?>
</div><!-- /.node-container -->
</div>
</div><!-- /.zone1-inner -->
</section>