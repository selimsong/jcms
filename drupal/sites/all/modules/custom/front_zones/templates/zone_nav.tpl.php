<?php
/**
* Available vars: $zone_nav;
**/
/*
if(variable_get('zone_nav','')) {
  $nav = variable_get('zone_nav');
  print $nav;
}
else {*/
?>

<div id="main-nav" class="nav-section sticky-nav stuck-top">
    <div class="nav-box nav-box-full">
        <nav class="nav-inner">
            <div class="nav-logo">
                <h2 class="desktop-logo">
                    <span><img src="/sites/all/themes/digi/images/chip-logo.png" alt="Snapdragon" /></span>
                </h2>
                <h2 class="mobile-logo">
                    <span><img src="/sites/all/themes/digi/images/snapdragon-logo.png" alt="Snapdragon" /></span>
                </h2>
            </div>
            <?php print drupal_render(menu_tree('menu-homepage-menu')); ?>
            <?php /*
            <ul class="menu">
                <li class="item zone-1"><a href="#experienceZone">主页</a></li>
                <li class="item zone-2"><a href="#deviceZone">处理器</a></li>
                <li class="item zone-3"><a href="#oemZone">优势</a></li>
                <li class="item zone-4"><a href="#campaignZone">智能手机</a></li>
                <li class="item zone-5"><a href="#socialZone">智能手机</a></li>
            </ul>
            */ ?>  
        </nav>
    </div>
</div>

