<div id="page">

  <?php if ($page['header']): ?>
    <div id="header">
      <?php print render($page['header']); ?>
    </div><!-- /#header -->
  <?php endif; ?>

  <?php if ($messages): ?>
    <div id="messages">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>

  <?php if ($tabs): ?>
    <div class="tabs">
      <?php print render($tabs); ?>
    </div>
  <?php endif; ?>

  <?php if ($action_links): ?>
    <ul class="action-links">
      <?php print render($action_links); ?>
    </ul>
  <?php endif; ?>

  <div id="content">
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title" style="display: none;">
        <?php print $title; ?>
      </h1>
    <?php endif; ?>

    <?php print render($title_suffix); ?>
    <?php print render($page['help']); ?>

    <?php // @TODO: move the sticky nave into a block.    ?>
    <div class="nav-section sticky-nav stuck-top">
      <div class="nav-box nav-box-full">
        <nav class="nav-inner">
          <ul class="nav-menu">
            <li class="item zone-1"><a href="#experienceZone">主页</a></li>
            <li class="item zone-2"><a href="#deviceZone">处理器</a></li>
            <li class="item zone-3"><a href="#campaignZone">优势</a></li>
            <li class="item zone-4"><a href="#socialZone">智能手机</a></li>
            <li class="item zone-5"><a href="#oemZone">智能手机</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <?php print render($page['content']); ?>
  </div><!-- /#content -->

  <?php if ($page['footer']): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div> <!-- /#footer -->
  <?php endif; ?>

</div> <!-- /#page -->
