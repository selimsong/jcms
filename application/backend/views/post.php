<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8 wp-toolbar"  lang="en-US">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar"  lang="en-US">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Posts &lsaquo; wordpress &#8212; WordPress</title>
<script type="text/javascript">
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var ajaxurl = '/wordpress/wp-admin/admin-ajax.php',
	pagenow = 'edit-post',
	typenow = 'post',
	adminpage = 'edit-php',
	thousandsSeparator = ',',
	decimalPoint = '.',
	isRtl = 0;
</script>
<link rel='stylesheet' href='http://localhost/wordpress/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load=admin-bar,wp-admin,buttons&amp;ver=3.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='colors-css'  href='http://localhost/wordpress/wp-admin/css/colors-fresh.min.css?ver=3.5.2' type='text/css' media='all' />
<!--[if lte IE 7]>
<link rel='stylesheet' id='ie-css'  href='http://localhost/wordpress/wp-admin/css/ie.min.css?ver=3.5.2' type='text/css' media='all' />
<![endif]-->

<script type='text/javascript'>
/* <![CDATA[ */
var userSettings = {"url":"\/wordpress\/","uid":"1","time":"1373602433"};/* ]]> */
</script>
<script type='text/javascript' src='http://localhost/wordpress/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=jquery,utils&amp;ver=3.5.2'></script>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
</head>
<body class="wp-admin wp-core-ui no-js  edit-php auto-fold admin-bar branch-3-5 version-3-5-2 admin-color-fresh locale-en-us no-customize-support">
<script type="text/javascript">
	document.body.className = document.body.className.replace('no-js','js');
</script>


<div id="wpwrap">
<a tabindex="1" href="#wpbody-content" class="screen-reader-shortcut">Skip to main content</a>

<div id="adminmenuback"></div>
<div id="adminmenuwrap">
<div id="adminmenushadow"></div>
<ul id="adminmenu" role="navigation">
<?php  $this->load->view('left_menue');  ?>
</div>
<div id="wpcontent">

		<div id="wpadminbar" class="nojq nojs" role="navigation">
			<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Skip to toolbar</a>
			<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Top navigation toolbar." tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://localhost/wordpress/wp-admin/about.php" title="About WordPress"><span class="ab-icon"></span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/about.php">About WordPress</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item"  href="http://wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item"  href="http://codex.wordpress.org/">Documentation</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item"  href="http://wordpress.org/support/">Support Forums</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item"  href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://localhost/wordpress/">wordpress</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-view-site"><a class="ab-item"  href="http://localhost/wordpress/">Visit Site</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/edit-comments.php" title="0 comments awaiting moderation"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0">0</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://localhost/wordpress/wp-admin/post-new.php" title="Add New"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/post-new.php">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/media-new.php">Media</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/post-new.php?post_type=page">Page</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/user-new.php">User</a>		</li></ul></div>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item"  aria-haspopup="true" href="http://localhost/wordpress/wp-admin/profile.php" title="My Account">Howdy, admin<img alt='' src='http://1.gravatar.com/avatar/34be3c7c0655313619d9b91a7e6f1ee6?s=16&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D16&amp;r=G' class='avatar avatar-16 photo' height='16' width='16' /></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://localhost/wordpress/wp-admin/profile.php"><img alt='' src='http://1.gravatar.com/avatar/34be3c7c0655313619d9b91a7e6f1ee6?s=64&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D64&amp;r=G' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>admin</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/profile.php">Edit My Profile</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item"  href="http://localhost/wordpress/wp-login.php?action=logout&#038;_wpnonce=ecaf92a23b">Log Out</a>		</li></ul></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="http://localhost/wordpress/wp-login.php?action=logout&#038;_wpnonce=ecaf92a23b">Log Out</a>
					</div>

		
<div id="wpbody">

<div id="wpbody-content" aria-label="Main content" tabindex="0">
		<div id="screen-meta" class="metabox-prefs">

			<div id="contextual-help-wrap" class="hidden" tabindex="-1" aria-label="Contextual Help Tab">
				<div id="contextual-help-back"></div>
				<div id="contextual-help-columns">
					<div class="contextual-help-tabs">
						<ul>
						
							<li id="tab-link-overview" class="active">
								<a href="#tab-panel-overview" aria-controls="tab-panel-overview">
									Overview								</a>
							</li>
						
							<li id="tab-link-screen-content">
								<a href="#tab-panel-screen-content" aria-controls="tab-panel-screen-content">
									Screen Content								</a>
							</li>
						
							<li id="tab-link-action-links">
								<a href="#tab-panel-action-links" aria-controls="tab-panel-action-links">
									Available Actions								</a>
							</li>
						
							<li id="tab-link-bulk-actions">
								<a href="#tab-panel-bulk-actions" aria-controls="tab-panel-bulk-actions">
									Bulk Actions								</a>
							</li>
												</ul>
					</div>

										<div class="contextual-help-sidebar">
						<p><strong>For more information:</strong></p><p><a href="http://codex.wordpress.org/Posts_Screen" target="_blank">Documentation on Managing Posts</a></p><p><a href="http://wordpress.org/support/" target="_blank">Support Forums</a></p>					</div>
					
					<div class="contextual-help-tabs-wrap">
						
							<div id="tab-panel-overview" class="help-tab-content active">
								<p>This screen provides access to all of your posts. You can customize the display of this screen to suit your workflow.</p>							</div>
						
							<div id="tab-panel-screen-content" class="help-tab-content">
								<p>You can customize the display of this screen&#8217;s contents in a number of ways:</p><ul><li>You can hide/display columns based on your needs and decide how many posts to list per screen using the Screen Options tab.</li><li>You can filter the list of posts by post status using the text links in the upper left to show All, Published, Draft, or Trashed posts. The default view is to show all posts.</li><li>You can view posts in a simple title list or with an excerpt. Choose the view you prefer by clicking on the icons at the top of the list on the right.</li><li>You can refine the list to show only posts in a specific category or from a specific month by using the dropdown menus above the posts list. Click the Filter button after making your selection. You also can refine the list by clicking on the post author, category or tag in the posts list.</li></ul>							</div>
						
							<div id="tab-panel-action-links" class="help-tab-content">
								<p>Hovering over a row in the posts list will display action links that allow you to manage your post. You can perform the following actions:</p><ul><li><strong>Edit</strong> takes you to the editing screen for that post. You can also reach that screen by clicking on the post title.</li><li><strong>Quick Edit</strong> provides inline access to the metadata of your post, allowing you to update post details without leaving this screen.</li><li><strong>Trash</strong> removes your post from this list and places it in the trash, from which you can permanently delete it.</li><li><strong>Preview</strong> will show you what your draft post will look like if you publish it. View will take you to your live site to view the post. Which link is available depends on your post&#8217;s status.</li></ul>							</div>
						
							<div id="tab-panel-bulk-actions" class="help-tab-content">
								<p>You can also edit or move multiple posts to the trash at once. Select the posts you want to act on using the checkboxes, then select the action you want to take from the Bulk Actions menu and click Apply.</p><p>When using Bulk Edit, you can change the metadata (categories, author, etc.) for all selected posts at once. To remove a post from the grouping, just click the x next to its name in the Bulk Edit area that appears.</p>							</div>
											</div>
				</div>
			</div>
				<div id="screen-options-wrap" class="hidden" tabindex="-1" aria-label="Screen Options Tab">
		<form id="adv-settings" action="" method="post">
					<h5>Show on screen</h5>
					<div class="metabox-prefs">
				<label for="author-hide"><input class="hide-column-tog" name="author-hide" type="checkbox" id="author-hide" value="author" checked='checked' />Author</label>
<label for="categories-hide"><input class="hide-column-tog" name="categories-hide" type="checkbox" id="categories-hide" value="categories" checked='checked' />Categories</label>
<label for="tags-hide"><input class="hide-column-tog" name="tags-hide" type="checkbox" id="tags-hide" value="tags" checked='checked' />Tags</label>
<label for="comments-hide"><input class="hide-column-tog" name="comments-hide" type="checkbox" id="comments-hide" value="comments" checked='checked' />Comments</label>
<label for="date-hide"><input class="hide-column-tog" name="date-hide" type="checkbox" id="date-hide" value="date" checked='checked' />Date</label>
				<br class="clear" />
			</div>
				<div class="screen-options">
							<input type="number" step="1" min="1" max="999" class="screen-per-page" name="wp_screen_options[value]"
					id="edit_post_per_page" maxlength="3"
					value="5" />
				<label for="edit_post_per_page">
					Posts				</label>
			<input type="submit" name="screen-options-apply" id="screen-options-apply" class="button" value="Apply"  />			<input type='hidden' name='wp_screen_options[option]' value='edit_post_per_page' />
		</div>
				<div><input type="hidden" id="screenoptionnonce" name="screenoptionnonce" value="0f237a4d11" /></div>
		</form>
		</div>
				</div>
				<div id="screen-meta-links">
					<div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<a href="#contextual-help-wrap" id="contextual-help-link" class="show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">Help</a>
			</div>
					<div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<a href="#screen-options-wrap" id="show-settings-link" class="show-settings" aria-controls="screen-options-wrap" aria-expanded="false">Screen Options</a>
			</div>
				</div>
		<div class="wrap">
<div id="icon-edit" class="icon32 icon32-posts-post"><br /></div><h2>Posts <a href="post-new.php" class="add-new-h2">Add New</a></h2>


<ul class='subsubsub'>
	<li class='all'><a href='edit.php?post_type=post' class="current">All <span class="count">(16)</span></a> |</li>
	<li class='publish'><a href='edit.php?post_status=publish&amp;post_type=post'>Published <span class="count">(14)</span></a> |</li>
	<li class='draft'><a href='edit.php?post_status=draft&amp;post_type=post'>Drafts <span class="count">(2)</span></a></li>
</ul>
<form id="posts-filter" action="" method="get">

<p class="search-box">
	<label class="screen-reader-text" for="post-search-input">Search Posts:</label>
	<input type="search" id="post-search-input" name="s" value="" />
	<input type="submit" name="" id="search-submit" class="button" value="Search Posts"  /></p>

<input type="hidden" name="post_status" class="post_status_page" value="all" />
<input type="hidden" name="post_type" class="post_type_page" value="post" />

<input type="hidden" id="_wpnonce" name="_wpnonce" value="2d7a9923a7" /><input type="hidden" name="_wp_http_referer" value="/wordpress/wp-admin/edit.php" />	<div class="tablenav top">

		<div class="alignleft actions">
			<select name='action'>
<option value='-1' selected='selected'>Bulk Actions</option>
	<option value='edit' class="hide-if-no-js">Edit</option>
	<option value='trash'>Move to Trash</option>
</select>
<input type="submit" name="" id="doaction" class="button action" value="Apply"  />
		</div>
		<div class="alignleft actions">
		<select name='m'>
			<option selected='selected' value='0'>Show all dates</option>
<option  value='201307'>July 2013</option>
		</select>
<select name='cat' id='cat' class='postform' >
	<option value='0'>View all categories</option>
	<option class="level-0" value="1">Uncategorized</option>
</select>
<input type="submit" name="" id="post-query-submit" class="button" value="Filter"  />		</div>
<div class='tablenav-pages'><span class="displaying-num">16 items</span>
<span class='pagination-links'><a class='first-page disabled' title='Go to the first page' href='http://localhost/wordpress/wp-admin/edit.php'>&laquo;</a>
<a class='prev-page disabled' title='Go to the previous page' href='http://localhost/wordpress/wp-admin/edit.php?paged=1'>&lsaquo;</a>
<span class="paging-input"><input class='current-page' title='Current page' type='text' name='paged' value='1' size='1' /> of <span class='total-pages'>4</span></span>
<a class='next-page' title='Go to the next page' href='http://localhost/wordpress/wp-admin/edit.php?paged=2'>&rsaquo;</a>
<a class='last-page' title='Go to the last page' href='http://localhost/wordpress/wp-admin/edit.php?paged=4'>&raquo;</a></span></div>		<input type="hidden" name="mode" value="list" />
		<div class="view-switch">
<a href='/wordpress/wp-admin/edit.php?mode=list' class="current"><img id='view-switch-list' src='http://localhost/wordpress/wp-includes/images/blank.gif' width='20' height='20' title='List View' alt='List View' /></a>
<a href='/wordpress/wp-admin/edit.php?mode=excerpt' ><img id='view-switch-excerpt' src='http://localhost/wordpress/wp-includes/images/blank.gif' width='20' height='20' title='Excerpt View' alt='Excerpt View' /></a>
		</div>

		<br class="clear" />
	</div>
<table class="wp-list-table widefat fixed posts" cellspacing="0">
	<thead>
	<tr>
		<th scope='col' id='cb' class='manage-column column-cb check-column'  style=""><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox" /></th><th scope='col' id='title' class='manage-column column-title sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=title&#038;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th><th scope='col' id='author' class='manage-column column-author'  style="">Author</th><th scope='col' id='categories' class='manage-column column-categories'  style="">Categories</th><th scope='col' id='tags' class='manage-column column-tags'  style="">Tags</th><th scope='col' id='comments' class='manage-column column-comments num sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=comment_count&#038;order=asc"><span><span class="vers"><div title="Comments" class="comment-grey-bubble"></div></span></span><span class="sorting-indicator"></span></a></th><th scope='col' id='date' class='manage-column column-date sortable asc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=date&#038;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>	</tr>
	</thead>

	<tfoot>
	<tr>
		<th scope='col'  class='manage-column column-cb check-column'  style=""><label class="screen-reader-text" for="cb-select-all-2">Select All</label><input id="cb-select-all-2" type="checkbox" /></th><th scope='col'  class='manage-column column-title sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=title&#038;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th><th scope='col'  class='manage-column column-author'  style="">Author</th><th scope='col'  class='manage-column column-categories'  style="">Categories</th><th scope='col'  class='manage-column column-tags'  style="">Tags</th><th scope='col'  class='manage-column column-comments num sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=comment_count&#038;order=asc"><span><span class="vers"><div title="Comments" class="comment-grey-bubble"></div></span></span><span class="sorting-indicator"></span></a></th><th scope='col'  class='manage-column column-date sortable asc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=date&#038;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>	</tr>
	</tfoot>

	<tbody id="the-list">
				<tr id="post-47" class="post-47 type-post status-publish format-standard hentry category-uncategorized alternate iedit author-self" valign="top">
				<th scope="row" class="check-column">
								<label class="screen-reader-text" for="cb-select-47">Select fdsfs</label>
				<input id="cb-select-47" type="checkbox" name="post[]" value="47" />
							</th>
						<td class="post-title page-title column-title"><strong><a class="row-title" href="http://localhost/wordpress/wp-admin/post.php?post=47&amp;action=edit" title="Edit &#8220;fdsfs&#8221;">fdsfs</a></strong>
<div class="row-actions"><span class='edit'><a href="http://localhost/wordpress/wp-admin/post.php?post=47&amp;action=edit" title="Edit this item">Edit</a> | </span><span class='inline hide-if-no-js'><a href="#" class="editinline" title="Edit this item inline">Quick&nbsp;Edit</a> | </span><span class='trash'><a class='submitdelete' title='Move this item to the Trash' href='http://localhost/wordpress/wp-admin/post.php?post=47&amp;action=trash&amp;_wpnonce=8e4eedbb7c'>Trash</a> | </span><span class='view'><a href="http://localhost/wordpress/?p=47" title="View &#8220;fdsfs&#8221;" rel="permalink">View</a></span></div>
<div class="hidden" id="inline_47">
	<div class="post_title">fdsfs</div>
	<div class="post_name">fdsfs-4</div>
	<div class="post_author">1</div>
	<div class="comment_status">open</div>
	<div class="ping_status">open</div>
	<div class="_status">publish</div>
	<div class="jj">12</div>
	<div class="mm">07</div>
	<div class="aa">2013</div>
	<div class="hh">04</div>
	<div class="mn">11</div>
	<div class="ss">55</div>
	<div class="post_password"></div><div class="post_category" id="category_47">1</div><div class="tags_input" id="post_tag_47"></div><div class="sticky"></div><div class="post_format"></div></div></td>			<td class="author column-author"><a href="edit.php?post_type=post&#038;author=1">admin</a></td>
			<td class="categories column-categories"><a href="edit.php?category_name=uncategorized">Uncategorized</a></td><td class="tags column-tags">&#8212;</td>			<td class="comments column-comments"><div class="post-com-count-wrapper">
			<a href='http://localhost/wordpress/wp-admin/edit-comments.php?p=47' title='0 pending' class='post-com-count'><span class='comment-count'>0</span></a>			</div></td>
			<td class="date column-date"><abbr title="2013/07/12 4:11:55 AM">2 mins ago</abbr><br />Published</td>		</tr>
			<tr id="post-45" class="post-45 type-post status-publish format-standard hentry category-uncategorized  iedit author-self" valign="top">
				<th scope="row" class="check-column">
								<label class="screen-reader-text" for="cb-select-45">Select fdsf</label>
				<input id="cb-select-45" type="checkbox" name="post[]" value="45" />
							</th>
						<td class="post-title page-title column-title"><strong><a class="row-title" href="http://localhost/wordpress/wp-admin/post.php?post=45&amp;action=edit" title="Edit &#8220;fdsf&#8221;">fdsf</a></strong>
<div class="row-actions"><span class='edit'><a href="http://localhost/wordpress/wp-admin/post.php?post=45&amp;action=edit" title="Edit this item">Edit</a> | </span><span class='inline hide-if-no-js'><a href="#" class="editinline" title="Edit this item inline">Quick&nbsp;Edit</a> | </span><span class='trash'><a class='submitdelete' title='Move this item to the Trash' href='http://localhost/wordpress/wp-admin/post.php?post=45&amp;action=trash&amp;_wpnonce=63c1f3763f'>Trash</a> | </span><span class='view'><a href="http://localhost/wordpress/?p=45" title="View &#8220;fdsf&#8221;" rel="permalink">View</a></span></div>
<div class="hidden" id="inline_45">
	<div class="post_title">fdsf</div>
	<div class="post_name">fdsf</div>
	<div class="post_author">1</div>
	<div class="comment_status">open</div>
	<div class="ping_status">open</div>
	<div class="_status">publish</div>
	<div class="jj">12</div>
	<div class="mm">07</div>
	<div class="aa">2013</div>
	<div class="hh">04</div>
	<div class="mn">11</div>
	<div class="ss">32</div>
	<div class="post_password"></div><div class="post_category" id="category_45">1</div><div class="tags_input" id="post_tag_45"></div><div class="sticky"></div><div class="post_format"></div></div></td>			<td class="author column-author"><a href="edit.php?post_type=post&#038;author=1">admin</a></td>
			<td class="categories column-categories"><a href="edit.php?category_name=uncategorized">Uncategorized</a></td><td class="tags column-tags">&#8212;</td>			<td class="comments column-comments"><div class="post-com-count-wrapper">
			<a href='http://localhost/wordpress/wp-admin/edit-comments.php?p=45' title='0 pending' class='post-com-count'><span class='comment-count'>0</span></a>			</div></td>
			<td class="date column-date"><abbr title="2013/07/12 4:11:32 AM">2 mins ago</abbr><br />Published</td>		</tr>
			<tr id="post-41" class="post-41 type-post status-publish format-standard hentry category-uncategorized alternate iedit author-self" valign="top">
				<th scope="row" class="check-column">
								<label class="screen-reader-text" for="cb-select-41">Select fsdf</label>
				<input id="cb-select-41" type="checkbox" name="post[]" value="41" />
							</th>
						<td class="post-title page-title column-title"><strong><a class="row-title" href="http://localhost/wordpress/wp-admin/post.php?post=41&amp;action=edit" title="Edit &#8220;fsdf&#8221;">fsdf</a></strong>
<div class="row-actions"><span class='edit'><a href="http://localhost/wordpress/wp-admin/post.php?post=41&amp;action=edit" title="Edit this item">Edit</a> | </span><span class='inline hide-if-no-js'><a href="#" class="editinline" title="Edit this item inline">Quick&nbsp;Edit</a> | </span><span class='trash'><a class='submitdelete' title='Move this item to the Trash' href='http://localhost/wordpress/wp-admin/post.php?post=41&amp;action=trash&amp;_wpnonce=18fd88f86b'>Trash</a> | </span><span class='view'><a href="http://localhost/wordpress/?p=41" title="View &#8220;fsdf&#8221;" rel="permalink">View</a></span></div>
<div class="hidden" id="inline_41">
	<div class="post_title">fsdf</div>
	<div class="post_name">fsdf</div>
	<div class="post_author">1</div>
	<div class="comment_status">open</div>
	<div class="ping_status">open</div>
	<div class="_status">publish</div>
	<div class="jj">12</div>
	<div class="mm">07</div>
	<div class="aa">2013</div>
	<div class="hh">04</div>
	<div class="mn">11</div>
	<div class="ss">24</div>
	<div class="post_password"></div><div class="post_category" id="category_41">1</div><div class="tags_input" id="post_tag_41"></div><div class="sticky"></div><div class="post_format"></div></div></td>			<td class="author column-author"><a href="edit.php?post_type=post&#038;author=1">admin</a></td>
			<td class="categories column-categories"><a href="edit.php?category_name=uncategorized">Uncategorized</a></td><td class="tags column-tags">&#8212;</td>			<td class="comments column-comments"><div class="post-com-count-wrapper">
			<a href='http://localhost/wordpress/wp-admin/edit-comments.php?p=41' title='0 pending' class='post-com-count'><span class='comment-count'>0</span></a>			</div></td>
			<td class="date column-date"><abbr title="2013/07/12 4:11:24 AM">2 mins ago</abbr><br />Published</td>		</tr>
			<tr id="post-38" class="post-38 type-post status-publish format-standard hentry category-uncategorized  iedit author-self" valign="top">
				<th scope="row" class="check-column">
								<label class="screen-reader-text" for="cb-select-38">Select fdsfe</label>
				<input id="cb-select-38" type="checkbox" name="post[]" value="38" />
							</th>
						<td class="post-title page-title column-title"><strong><a class="row-title" href="http://localhost/wordpress/wp-admin/post.php?post=38&amp;action=edit" title="Edit &#8220;fdsfe&#8221;">fdsfe</a></strong>
<div class="row-actions"><span class='edit'><a href="http://localhost/wordpress/wp-admin/post.php?post=38&amp;action=edit" title="Edit this item">Edit</a> | </span><span class='inline hide-if-no-js'><a href="#" class="editinline" title="Edit this item inline">Quick&nbsp;Edit</a> | </span><span class='trash'><a class='submitdelete' title='Move this item to the Trash' href='http://localhost/wordpress/wp-admin/post.php?post=38&amp;action=trash&amp;_wpnonce=3ae4804dbc'>Trash</a> | </span><span class='view'><a href="http://localhost/wordpress/?p=38" title="View &#8220;fdsfe&#8221;" rel="permalink">View</a></span></div>
<div class="hidden" id="inline_38">
	<div class="post_title">fdsfe</div>
	<div class="post_name">fdsfe</div>
	<div class="post_author">1</div>
	<div class="comment_status">open</div>
	<div class="ping_status">open</div>
	<div class="_status">publish</div>
	<div class="jj">12</div>
	<div class="mm">07</div>
	<div class="aa">2013</div>
	<div class="hh">04</div>
	<div class="mn">11</div>
	<div class="ss">15</div>
	<div class="post_password"></div><div class="post_category" id="category_38">1</div><div class="tags_input" id="post_tag_38"></div><div class="sticky"></div><div class="post_format"></div></div></td>			<td class="author column-author"><a href="edit.php?post_type=post&#038;author=1">admin</a></td>
			<td class="categories column-categories"><a href="edit.php?category_name=uncategorized">Uncategorized</a></td><td class="tags column-tags">&#8212;</td>			<td class="comments column-comments"><div class="post-com-count-wrapper">
			<a href='http://localhost/wordpress/wp-admin/edit-comments.php?p=38' title='0 pending' class='post-com-count'><span class='comment-count'>0</span></a>			</div></td>
			<td class="date column-date"><abbr title="2013/07/12 4:11:15 AM">3 mins ago</abbr><br />Published</td>		</tr>
			<tr id="post-36" class="post-36 type-post status-publish format-standard hentry category-uncategorized alternate iedit author-self" valign="top">
				<th scope="row" class="check-column">
								<label class="screen-reader-text" for="cb-select-36">Select fdsfs</label>
				<input id="cb-select-36" type="checkbox" name="post[]" value="36" />
							</th>
						<td class="post-title page-title column-title"><strong><a class="row-title" href="http://localhost/wordpress/wp-admin/post.php?post=36&amp;action=edit" title="Edit &#8220;fdsfs&#8221;">fdsfs</a></strong>
<div class="row-actions"><span class='edit'><a href="http://localhost/wordpress/wp-admin/post.php?post=36&amp;action=edit" title="Edit this item">Edit</a> | </span><span class='inline hide-if-no-js'><a href="#" class="editinline" title="Edit this item inline">Quick&nbsp;Edit</a> | </span><span class='trash'><a class='submitdelete' title='Move this item to the Trash' href='http://localhost/wordpress/wp-admin/post.php?post=36&amp;action=trash&amp;_wpnonce=b55590bd9b'>Trash</a> | </span><span class='view'><a href="http://localhost/wordpress/?p=36" title="View &#8220;fdsfs&#8221;" rel="permalink">View</a></span></div>
<div class="hidden" id="inline_36">
	<div class="post_title">fdsfs</div>
	<div class="post_name">fdsfs-3</div>
	<div class="post_author">1</div>
	<div class="comment_status">open</div>
	<div class="ping_status">open</div>
	<div class="_status">publish</div>
	<div class="jj">12</div>
	<div class="mm">07</div>
	<div class="aa">2013</div>
	<div class="hh">04</div>
	<div class="mn">11</div>
	<div class="ss">08</div>
	<div class="post_password"></div><div class="post_category" id="category_36">1</div><div class="tags_input" id="post_tag_36"></div><div class="sticky"></div><div class="post_format"></div></div></td>			<td class="author column-author"><a href="edit.php?post_type=post&#038;author=1">admin</a></td>
			<td class="categories column-categories"><a href="edit.php?category_name=uncategorized">Uncategorized</a></td><td class="tags column-tags">&#8212;</td>			<td class="comments column-comments"><div class="post-com-count-wrapper">
			<a href='http://localhost/wordpress/wp-admin/edit-comments.php?p=36' title='0 pending' class='post-com-count'><span class='comment-count'>0</span></a>			</div></td>
			<td class="date column-date"><abbr title="2013/07/12 4:11:08 AM">3 mins ago</abbr><br />Published</td>		</tr>
		</tbody>
</table>
	<div class="tablenav bottom">

		<div class="alignleft actions">
			<select name='action2'>
<option value='-1' selected='selected'>Bulk Actions</option>
	<option value='edit' class="hide-if-no-js">Edit</option>
	<option value='trash'>Move to Trash</option>
</select>
<input type="submit" name="" id="doaction2" class="button action" value="Apply"  />
		</div>
		<div class="alignleft actions">
		</div>
<div class='tablenav-pages'><span class="displaying-num">16 items</span>
<span class='pagination-links'><a class='first-page disabled' title='Go to the first page' href='http://localhost/wordpress/wp-admin/edit.php'>&laquo;</a>
<a class='prev-page disabled' title='Go to the previous page' href='http://localhost/wordpress/wp-admin/edit.php?paged=1'>&lsaquo;</a>
<span class="paging-input">1 of <span class='total-pages'>4</span></span>
<a class='next-page' title='Go to the next page' href='http://localhost/wordpress/wp-admin/edit.php?paged=2'>&rsaquo;</a>
<a class='last-page' title='Go to the last page' href='http://localhost/wordpress/wp-admin/edit.php?paged=4'>&raquo;</a></span></div>
		<br class="clear" />
	</div>

</form>


	<form method="get" action=""><table style="display: none"><tbody id="inlineedit">
		
		<tr id="inline-edit" class="inline-edit-row inline-edit-row-post inline-edit-post quick-edit-row quick-edit-row-post inline-edit-post" style="display: none"><td colspan="7" class="colspanchange">

		<fieldset class="inline-edit-col-left"><div class="inline-edit-col">
			<h4>Quick Edit</h4>
	
			<label>
				<span class="title">Title</span>
				<span class="input-text-wrap"><input type="text" name="post_title" class="ptitle" value="" /></span>
			</label>

			<label>
				<span class="title">Slug</span>
				<span class="input-text-wrap"><input type="text" name="post_name" value="" /></span>
			</label>

	
				<label><span class="title">Date</span></label>
			<div class="inline-edit-date">
				<div class="timestamp-wrap"><select name="mm">
			<option value="01">01-Jan</option>
			<option value="02">02-Feb</option>
			<option value="03">03-Mar</option>
			<option value="04">04-Apr</option>
			<option value="05">05-May</option>
			<option value="06">06-Jun</option>
			<option value="07" selected="selected">07-Jul</option>
			<option value="08">08-Aug</option>
			<option value="09">09-Sep</option>
			<option value="10">10-Oct</option>
			<option value="11">11-Nov</option>
			<option value="12">12-Dec</option>
</select><input type="text" name="jj" value="12" size="2" maxlength="2" autocomplete="off" />, <input type="text" name="aa" value="2013" size="4" maxlength="4" autocomplete="off" /> @ <input type="text" name="hh" value="04" size="2" maxlength="2" autocomplete="off" /> : <input type="text" name="mn" value="11" size="2" maxlength="2" autocomplete="off" /></div><input type="hidden" id="ss" name="ss" value="55" />			</div>
			<br class="clear" />
	
	<label class="inline-edit-author"><span class="title">Author</span><select name='post_author' class='authors'>
	<option value='1'>admin</option>
</select></label>
			<div class="inline-edit-group">
				<label class="alignleft">
					<span class="title">Password</span>
					<span class="input-text-wrap"><input type="text" name="post_password" class="inline-edit-password-input" value="" /></span>
				</label>

				<em style="margin:5px 10px 0 0" class="alignleft">
					&ndash;OR&ndash;				</em>
				<label class="alignleft inline-edit-private">
					<input type="checkbox" name="keep_private" value="private" />
					<span class="checkbox-title">Private</span>
				</label>
			</div>

	
		</div></fieldset>

	
		<fieldset class="inline-edit-col-center inline-edit-categories"><div class="inline-edit-col">

	
			<span class="title inline-edit-categories-label">Categories				<span class="catshow">[more]</span>
				<span class="cathide" style="display:none;">[less]</span>
			</span>
			<input type="hidden" name="post_category[]" value="0" />
			<ul class="cat-checklist category-checklist">
				
<li id='category-1' class="popular-category"><label class="selectit"><input value="1" type="checkbox" name="post_category[]" id="in-category-1" /> Uncategorized</label></li>
			</ul>

	
		</div></fieldset>

	
		<fieldset class="inline-edit-col-right"><div class="inline-edit-col">

	
	
						<label class="inline-edit-tags">
				<span class="title">Tags</span>
				<textarea cols="22" rows="1" name="tax_input[post_tag]" class="tax_input_post_tag"></textarea>
			</label>
		
	
	
	
			<div class="inline-edit-group">
							<label class="alignleft">
					<input type="checkbox" name="comment_status" value="open" />
					<span class="checkbox-title">Allow Comments</span>
				</label>
							<label class="alignleft">
					<input type="checkbox" name="ping_status" value="open" />
					<span class="checkbox-title">Allow Pings</span>
				</label>
						</div>

	
			<div class="inline-edit-group">
				<label class="inline-edit-status alignleft">
					<span class="title">Status</span>
					<select name="_status">
												<option value="publish">Published</option>
						<option value="future">Scheduled</option>
												<option value="pending">Pending Review</option>
						<option value="draft">Draft</option>
					</select>
				</label>

	
	
				<label class="alignleft">
					<input type="checkbox" name="sticky" value="sticky" />
					<span class="checkbox-title">Make this post sticky</span>
				</label>

	
	
			</div>

				<div class="inline-edit-group">
				<label class="alignleft" for="post_format">
				<span class="title">Format</span>
				<select name="post_format">
									<option value="0">Standard</option>
									<option value="aside">Aside</option>
									<option value="chat" class="unsupported">Chat</option>
									<option value="gallery" class="unsupported">Gallery</option>
									<option value="link">Link</option>
									<option value="image">Image</option>
									<option value="quote">Quote</option>
									<option value="status">Status</option>
									<option value="video" class="unsupported">Video</option>
									<option value="audio" class="unsupported">Audio</option>
								</select></label>
			</div>
			
		</div></fieldset>

			<p class="submit inline-edit-save">
			<a accesskey="c" href="#inline-edit" title="Cancel" class="button-secondary cancel alignleft">Cancel</a>
			<input type="hidden" id="_inline_edit" name="_inline_edit" value="93d17a45e5" />				<a accesskey="s" href="#inline-edit" title="Update" class="button-primary save alignright">Update</a>
				<span class="spinner"></span>
						<input type="hidden" name="post_view" value="list" />
			<input type="hidden" name="screen" value="edit-post" />
			<span class="error" style="display:none"></span>
			<br class="clear" />
		</p>
		</td></tr>
	
		<tr id="bulk-edit" class="inline-edit-row inline-edit-row-post inline-edit-post bulk-edit-row bulk-edit-row-post bulk-edit-post" style="display: none"><td colspan="7" class="colspanchange">

		<fieldset class="inline-edit-col-left"><div class="inline-edit-col">
			<h4>Bulk Edit</h4>
				<div id="bulk-title-div">
				<div id="bulk-titles"></div>
			</div>

	
	
	
		</div></fieldset>

	
		<fieldset class="inline-edit-col-right"><div class="inline-edit-col">

	<label class="inline-edit-author"><span class="title">Author</span><select name='post_author' class='authors'>
	<option value='-1'>&mdash; No Change &mdash;</option>
	<option value='1'>admin</option>
</select></label>
	
	
			<div class="inline-edit-group">
					<label class="alignleft">
				<span class="title">Comments</span>
				<select name="comment_status">
					<option value="">&mdash; No Change &mdash;</option>
					<option value="open">Allow</option>
					<option value="closed">Do not allow</option>
				</select>
			</label>
					<label class="alignright">
				<span class="title">Pings</span>
				<select name="ping_status">
					<option value="">&mdash; No Change &mdash;</option>
					<option value="open">Allow</option>
					<option value="closed">Do not allow</option>
				</select>
			</label>
					</div>

	
			<div class="inline-edit-group">
				<label class="inline-edit-status alignleft">
					<span class="title">Status</span>
					<select name="_status">
							<option value="-1">&mdash; No Change &mdash;</option>
												<option value="publish">Published</option>
						<option value="future">Scheduled</option>
							<option value="private">Private</option>
												<option value="pending">Pending Review</option>
						<option value="draft">Draft</option>
					</select>
				</label>

	
	
				<label class="alignright">
					<span class="title">Sticky</span>
					<select name="sticky">
						<option value="-1">&mdash; No Change &mdash;</option>
						<option value="sticky">Sticky</option>
						<option value="unsticky">Not Sticky</option>
					</select>
				</label>

	
	
			</div>

				<div class="inline-edit-group">
				<label class="alignleft" for="post_format">
				<span class="title">Format</span>
				<select name="post_format">
									<option value="-1">&mdash; No Change &mdash;</option>
									<option value="0">Standard</option>
									<option value="aside">Aside</option>
									<option value="link">Link</option>
									<option value="image">Image</option>
									<option value="quote">Quote</option>
									<option value="status">Status</option>
								</select></label>
			</div>
			
		</div></fieldset>

			<p class="submit inline-edit-save">
			<a accesskey="c" href="#inline-edit" title="Cancel" class="button-secondary cancel alignleft">Cancel</a>
			<input type="submit" name="bulk_edit" id="bulk_edit" class="button button-primary alignright" value="Update" accesskey="s"  />			<input type="hidden" name="post_view" value="list" />
			<input type="hidden" name="screen" value="edit-post" />
			<span class="error" style="display:none"></span>
			<br class="clear" />
		</p>
		</td></tr>
			</tbody></table></form>

<div id="ajax-response"></div>
<br class="clear" />
</div>


<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><!-- wpbody -->
<div class="clear"></div></div><!-- wpcontent -->

<div id="wpfooter">
<p id="footer-left" class="alignleft"><span id="footer-thankyou">Thank you for creating with <a href="http://wordpress.org/">WordPress</a>.</span></p>
<p id="footer-upgrade" class="alignright">Version 3.5.2</p>
<div class="clear"></div>
</div>

<script type='text/javascript'>
/* <![CDATA[ */
var commonL10n = {"warnDelete":"You are about to permanently delete the selected items.\n  'Cancel' to stop, 'OK' to delete."};var inlineEditL10n = {"error":"Error while saving the changes.","ntdeltitle":"Remove From Bulk Edit","notitle":"(no title)","comma":","};/* ]]> */
</script>
<script type='text/javascript' src='http://localhost/wordpress/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=admin-bar,hoverIntent,common,suggest,inline-edit-post&amp;ver=3.5.2'></script>

<div class="clear"></div></div><!-- wpwrap -->
<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>
</body>
</html>
