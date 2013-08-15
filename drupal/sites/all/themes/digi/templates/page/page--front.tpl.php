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

  <?php // @TODO, set title when we go live and hide with css. ?>
  <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title" style="display: none;">
        <?php print $title; ?>
      </h1>
    <?php endif; ?>

    <?php print render($title_suffix); ?>
    <?php print render($page['help']); ?>

    <?php print render($page['content']); ?>
  </div><!-- /#content -->

  <?php if ($page['footer']): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div> <!-- /#footer -->
  <?php endif; ?>

</div> <!-- /#page -->
