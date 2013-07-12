<div id="adminmenuwrap">
<div id="adminmenushadow"></div>
<ul role="navigation" id="adminmenu">
	<li id="menu-dashboard" class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-last">
		  <a aria-haspopup="true" class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-last" href="">
			  <div class="wp-menu-arrow"><div></div></div>
			  <div class="wp-menu-image"><br></div><div class="wp-menu-name">Dashboard</div>
		  </a>
		 <ul class="wp-submenu wp-submenu-wrap">
			 <li class="wp-submenu-head">Dashboard</li>
			 <li class="wp-first-item"><a class="wp-first-item" href="index.php">Home</a></li>
			 <li><a href="update-core.php">Updates <span title="" class="update-plugins count-0"><span class="update-count">0</span></span></a></li>
		 </ul>
	</li>
	<li class="wp-not-current-submenu wp-menu-separator"><div class="separator"></div></li>
	<li id="menu-posts" class="wp-has-submenu wp-has-current-submenu wp-menu-open open-if-no-js menu-top menu-icon-post menu-top-first">
		<a class="wp-has-submenu wp-has-current-submenu wp-menu-open open-if-no-js menu-top menu-icon-post menu-top-first" href="<?php  echo site_url('/admin/post'); ?>">
			<div class="wp-menu-arrow"><div></div></div>
			<div class="wp-menu-image"><br></div>
			<div class="wp-menu-name">Posts</div>
		</a>
		<ul class="wp-submenu wp-submenu-wrap">
		<li class="wp-submenu-head">Posts</li>
		<li class="wp-first-item <?php if('list_post' == $curNav) echo 'current'; ?>"><a class="wp-first-item current" href="<?php  echo site_url('/admin/post'); ?>">All Posts</a></li>
		<li class="<?php if('add_post' == $curNav) echo 'current'; ?>"><a href="<?php  echo site_url('/admin/post/add'); ?>"  >Add New</a></li>
		<li><a href="edit-tags.php?taxonomy=category">Categories</a></li>
		<li><a href="edit-tags.php?taxonomy=post_tag">Tags</a></li>
		</ul>
	</li>
	<li id="menu-media" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media">
		<a aria-haspopup="true" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" href="upload.php">
			<div class="wp-menu-arrow"><div></div></div>
			<div class="wp-menu-image"><br></div>
			<div class="wp-menu-name">Media</div>
		</a>
		<ul class="wp-submenu wp-submenu-wrap">
			<li class="wp-submenu-head">Media</li>
			<li class="wp-first-item"><a class="wp-first-item" href="upload.php">Library</a></li>
			<li><a href="media-new.php">Add New</a></li>
		</ul>
	</li>
	<li id="menu-pages" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page">
		<a aria-haspopup="true" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" href="edit.php?post_type=page">
			<div class="wp-menu-arrow"><div></div>
			</div><div class="wp-menu-image"><br></div>
			<div class="wp-menu-name">Pages</div>
		</a>
		<ul class="wp-submenu wp-submenu-wrap">
			<li class="wp-submenu-head">Pages</li>
			<li class="wp-first-item"><a class="wp-first-item" href="edit.php?post_type=page">All Pages</a></li>
			<li><a href="post-new.php?post_type=page">Add New</a></li>
		</ul>
	</li>
	<li id="menu-comments" class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last">
		<a class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" href="edit-comments.php">
			<div class="wp-menu-arrow"><div></div></div>
			<div class="wp-menu-image"><br></div>
			<div class="wp-menu-name">Comments <span class="awaiting-mod count-0">
			<span class="pending-count">0</span></span>
			</div>
		</a>
	</li>
	<li class="wp-not-current-submenu wp-menu-separator"><div class="separator"></div></li>
	<li id="menu-appearance" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first">
		<a aria-haspopup="true" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" href="themes.php">
			<div class="wp-menu-arrow"><div></div></div>
			<div class="wp-menu-image"><br></div>
			<div class="wp-menu-name">Appearance</div>
		</a>
		<ul class="wp-submenu wp-submenu-wrap">
			<li class="wp-submenu-head">Appearance</li>
			<li class="wp-first-item"><a class="wp-first-item" href="themes.php">Themes</a></li>
			<li><a href="widgets.php">Widgets</a></li>
			<li><a href="nav-menus.php">Menus</a></li>
			<li><a href="themes.php?page=custom-header">Header</a></li>
			<li><a href="themes.php?page=custom-background">Background</a></li>
			<li><a href="theme-editor.php">Editor</a></li>
		</ul>
	</li>
	<li id="menu-plugins" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins">
	<a aria-haspopup="true" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" href="plugins.php"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image"><br></div><div class="wp-menu-name">Plugins <span class="update-plugins count-0"><span class="plugin-count">0</span></span></div></a>
	<ul class="wp-submenu wp-submenu-wrap"><li class="wp-submenu-head">Plugins <span class="update-plugins count-0"><span class="plugin-count">0</span></span></li><li class="wp-first-item"><a class="wp-first-item" href="plugins.php">Installed Plugins</a></li><li><a href="plugin-install.php">Add New</a></li><li><a href="plugin-editor.php">Editor</a></li></ul></li>
	<li id="menu-users" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users">
	<a aria-haspopup="true" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" href="users.php"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image"><br></div><div class="wp-menu-name">Users</div></a>
	<ul class="wp-submenu wp-submenu-wrap"><li class="wp-submenu-head">Users</li><li class="wp-first-item"><a class="wp-first-item" href="users.php">All Users</a></li><li><a href="user-new.php">Add New</a></li><li><a href="profile.php">Your Profile</a></li></ul></li>
	<li id="menu-tools" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools">
	<a aria-haspopup="true" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" href="tools.php"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image"><br></div><div class="wp-menu-name">Tools</div></a>
	<ul class="wp-submenu wp-submenu-wrap"><li class="wp-submenu-head">Tools</li><li class="wp-first-item"><a class="wp-first-item" href="tools.php">Available Tools</a></li><li><a href="import.php">Import</a></li><li><a href="export.php">Export</a></li></ul></li>
	<li id="menu-settings" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last">
	<a aria-haspopup="true" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" href="options-general.php"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image"><br></div><div class="wp-menu-name">Settings</div></a>
	<ul class="wp-submenu wp-submenu-wrap"><li class="wp-submenu-head">Settings</li><li class="wp-first-item"><a class="wp-first-item" href="options-general.php">General</a></li><li><a href="options-writing.php">Writing</a></li><li><a href="options-reading.php">Reading</a></li><li><a href="options-discussion.php">Discussion</a></li><li><a href="options-media.php">Media</a></li><li><a href="options-permalink.php">Permalinks</a></li></ul></li><li class="hide-if-no-js" id="collapse-menu"><div id="collapse-button"><div></div></div><span>Collapse menu</span></li></ul>
</div>