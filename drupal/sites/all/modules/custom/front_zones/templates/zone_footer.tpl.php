<section class="footerZone">
  <div class="footerZone-box clearfix">
    <div class="footerZone-inner">
      <nav class="top-links">
      <?php 
        // rendering footer menu
        $tree = menu_tree_page_data('menu-footer');
        $main_menu = menu_tree_output($tree, 1);
        print drupal_render($main_menu);
       ?>
      </nav>
            
      <div class="copyright-container">
        <p><?php print variable_get('zone_footer_copyright'); ?></p>
        <?php print variable_get('zone_footer'); ?>
      </div>
    </div>
  </div>
  <div class="chip-footer clearfix">
    <div class="chip-footer-inner">
      <div class="chip-logo">
        <img src="/sites/all/themes/digi/images/chip-logo.png" width="209" height="78" alt="Snapdragon | Qualcomm.com" />
      </div>
    </div>
  </div>
</section>
