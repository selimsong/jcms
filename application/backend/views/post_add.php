<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8 wp-toolbar"  lang="en-US">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar"  lang="en-US">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dashboard &lsaquo; wordpress &#8212; WordPress</title>
<script type="text/javascript">
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var ajaxurl = '/wordpress/wp-admin/admin-ajax.php',
	pagenow = 'dashboard',
	typenow = '',
	adminpage = 'index-php',
	thousandsSeparator = ',',
	decimalPoint = '.',
	isRtl = 0;
</script>
<link rel='stylesheet' href='http://localhost/wordpress/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load=admin-bar,wp-admin,buttons&amp;ver=3.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='thickbox-css'  href='http://localhost/wordpress/wp-includes/js/thickbox/thickbox.css?ver=20121105' type='text/css' media='all' />
<link rel='stylesheet' id='colors-css'  href='http://localhost/wordpress/wp-admin/css/colors-fresh.min.css?ver=3.5.2' type='text/css' media='all' />
<!--[if lte IE 7]>
<link rel='stylesheet' id='ie-css'  href='http://localhost/wordpress/wp-admin/css/ie.min.css?ver=3.5.2' type='text/css' media='all' />
<![endif]-->

<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
<script type='text/javascript' src='http://localhost/wordpress/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=jquery,utils,json2&amp;ver=3.5.2'></script>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
</head>
<body class="wp-admin wp-core-ui no-js  post-new-php auto-fold admin-bar branch-3-5 version-3-5-2 admin-color-fresh locale-en-us no-customize-support">
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
			    <li id="wp-admin-bar-site-name" class="menupop">jcms
			      <div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
	          <li id="wp-admin-bar-view-site"><a class="ab-item"  href="http://localhost/wordpress/">Visit Site</a>		</li></ul></div>		</li></ul>
</div>
						<a class="screen-reader-shortcut" href="http://localhost/wordpress/wp-login.php?action=logout&#038;_wpnonce=9c87606c1a">Log Out</a>
					</div>

		
<div id="wpbody">

<div id="wpbody-content" aria-label="Main content" tabindex="0">
		
				<div id="screen-meta-links">
					<div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<a href="#contextual-help-wrap" id="contextual-help-link" class="show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">Help</a>
			</div>
					<div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<a href="#screen-options-wrap" id="show-settings-link" class="show-settings" aria-controls="screen-options-wrap" aria-expanded="false">Screen Options</a>
			</div>
				</div>
		
<div class="wrap">
<div id="icon-edit" class="icon32 icon32-posts-post"><br /></div><h2>Add New Post</h2>
<form name="post" action="post.php" method="post" id="post">
<div id="poststuff">
<div id="titlewrap">
	<label class="" id="title-prompt-text" for="title">Title:</label>
	<input type="text" name="post_title" size="30"  style="width: 500px;margin:10px 0px 30px 5px;" value="" id="title" autocomplete="off">
</div>
<div id="post-body" class="metabox-holder columns-2">
<div id="post-body-content"><!-- /titlediv -->
<div id="postdivrich" class="postarea">

<div id="wp-content-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><link rel='stylesheet' id='editor-buttons-css'  href='http://localhost/wordpress/wp-includes/css/editor.min.css?ver=3.5.2' type='text/css' media='all' />

<div id="wp-content-editor-container" class="wp-editor-container">
<textarea class="wp-editor-area" style="height: 378px" cols="40" name="content" id="content"></textarea>
</div>
</div>
<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Publish" accesskey="p">



</div>

</div><!-- /post-body-content -->

<div id="postbox-container-1" class="postbox-container">
<div id="side-sortables" class="meta-box-sortables">
  <div id="postimagediv" class="postbox " >
    <div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span>Featured Image</span></h3>
<div class="inside">
<p class="hide-if-no-js"><a title="Set featured image" href="http://localhost/wordpress/wp-admin/media-upload.php?post_id=10&#038;type=image&#038;TB_iframe=1" id="set-post-thumbnail" class="thickbox">Set featured image</a></p></div>
</div>
</div></div>
<div id="postbox-container-2" class="postbox-container">
<div id="normal-sortables" class="meta-box-sortables"></div>
</div><!-- /post-body -->
<br class="clear" />

</div><!-- /poststuff -->
</form>
</div>




















</div>

</body>
</html>
