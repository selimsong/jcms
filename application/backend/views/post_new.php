
<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8 wp-toolbar"  lang="en-US">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar"  lang="en-US">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Add New Post &lsaquo; wordpress &#8212; WordPress</title>
<script type="text/javascript">
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var ajaxurl = '/wordpress/wp-admin/admin-ajax.php',
	pagenow = 'post',
	typenow = 'post',
	adminpage = 'post-new-php',
	thousandsSeparator = ',',
	decimalPoint = '.',
	isRtl = 0;
</script>
<link rel='stylesheet' href='http://localhost/wordpress/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load=admin-bar,buttons,media-views,wp-admin&amp;ver=3.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='thickbox-css'  href='http://localhost/wordpress/wp-includes/js/thickbox/thickbox.css?ver=20121105' type='text/css' media='all' />
<link rel='stylesheet' id='colors-css'  href='http://localhost/wordpress/wp-admin/css/colors-fresh.min.css?ver=3.5.2' type='text/css' media='all' />
<!--[if lte IE 7]>
<link rel='stylesheet' id='ie-css'  href='http://localhost/wordpress/wp-admin/css/ie.min.css?ver=3.5.2' type='text/css' media='all' />
<![endif]-->

<script type='text/javascript'>
/* <![CDATA[ */
var userSettings = {"url":"\/wordpress\/","uid":"1","time":"1373534690"};/* ]]> */
</script>
<script type='text/javascript' src='http://localhost/wordpress/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=jquery,utils,plupload,plupload-html5,plupload-flash,plupload-silverlight,plupload-html4,json2&amp;ver=3.5.2'></script>
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


	<li class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
	<a href='index.php' class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Dashboard</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Dashboard</li><li class="wp-first-item"><a href='index.php' class="wp-first-item">Home</a></li><li><a href='update-core.php'>Updates <span class='update-plugins count-0' title=''><span class='update-count'>0</span></span></a></li></ul></li>
	<li class="wp-not-current-submenu wp-menu-separator"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-has-current-submenu wp-menu-open open-if-no-js menu-top menu-icon-post menu-top-first" id="menu-posts">
	<a href='edit.php' class="wp-has-submenu wp-has-current-submenu wp-menu-open open-if-no-js menu-top menu-icon-post menu-top-first" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Posts</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Posts</li><li class="wp-first-item"><a href='edit.php' class="wp-first-item">All Posts</a></li><li class="current"><a href='post-new.php' class="current">Add New</a></li><li><a href='edit-tags.php?taxonomy=category'>Categories</a></li><li><a href='edit-tags.php?taxonomy=post_tag'>Tags</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" id="menu-media">
	<a href='upload.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Media</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Media</li><li class="wp-first-item"><a href='upload.php' class="wp-first-item">Library</a></li><li><a href='media-new.php'>Add New</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
	<a href='edit.php?post_type=page' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Pages</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Pages</li><li class="wp-first-item"><a href='edit.php?post_type=page' class="wp-first-item">All Pages</a></li><li><a href='post-new.php?post_type=page'>Add New</a></li></ul></li>
	<li class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" id="menu-comments">
	<a href='edit-comments.php' class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Comments <span class='awaiting-mod count-0'><span class='pending-count'>0</span></span></div></a></li>
	<li class="wp-not-current-submenu wp-menu-separator"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" id="menu-appearance">
	<a href='themes.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Appearance</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Appearance</li><li class="wp-first-item"><a href='themes.php' class="wp-first-item">Themes</a></li><li><a href='widgets.php'>Widgets</a></li><li><a href='nav-menus.php'>Menus</a></li><li><a href='themes.php?page=custom-header'>Header</a></li><li><a href='themes.php?page=custom-background'>Background</a></li><li><a href='theme-editor.php'>Editor</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" id="menu-plugins">
	<a href='plugins.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Plugins <span class='update-plugins count-0'><span class='plugin-count'>0</span></span></div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Plugins <span class='update-plugins count-0'><span class='plugin-count'>0</span></span></li><li class="wp-first-item"><a href='plugins.php' class="wp-first-item">Installed Plugins</a></li><li><a href='plugin-install.php'>Add New</a></li><li><a href='plugin-editor.php'>Editor</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" id="menu-users">
	<a href='users.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Users</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Users</li><li class="wp-first-item"><a href='users.php' class="wp-first-item">All Users</a></li><li><a href='user-new.php'>Add New</a></li><li><a href='profile.php'>Your Profile</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" id="menu-tools">
	<a href='tools.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Tools</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Tools</li><li class="wp-first-item"><a href='tools.php' class="wp-first-item">Available Tools</a></li><li><a href='import.php'>Import</a></li><li><a href='export.php'>Export</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" id="menu-settings">
	<a href='options-general.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Settings</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Settings</li><li class="wp-first-item"><a href='options-general.php' class="wp-first-item">General</a></li><li><a href='options-writing.php'>Writing</a></li><li><a href='options-reading.php'>Reading</a></li><li><a href='options-discussion.php'>Discussion</a></li><li><a href='options-media.php'>Media</a></li><li><a href='options-permalink.php'>Permalinks</a></li></ul></li><li id="collapse-menu" class="hide-if-no-js"><div id="collapse-button"><div></div></div><span>Collapse menu</span></li></ul>
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

<div id="post-body" class="metabox-holder columns-2">
<div id="post-body-content"><!-- /titlediv -->
<div id="postdivrich" class="postarea">

<div id="wp-content-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><link rel='stylesheet' id='editor-buttons-css'  href='http://localhost/wordpress/wp-includes/css/editor.min.css?ver=3.5.2' type='text/css' media='all' />
<div id="wp-content-editor-tools" class="wp-editor-tools hide-if-no-js"><a id="content-html" class="wp-switch-editor switch-html" onclick="switchEditors.switchto(this);">Text</a>
<a id="content-tmce" class="wp-switch-editor switch-tmce" onclick="switchEditors.switchto(this);">Visual</a>

</div>
<div id="wp-content-editor-container" class="wp-editor-container"><textarea class="wp-editor-area" style="height: 378px" cols="40" name="content" id="content"></textarea></div>
</div>




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
















	<script type="text/javascript">
		tinyMCEPreInit = {
			base : "http://localhost/wordpress/wp-includes/js/tinymce",
			suffix : "",
			query : "ver=358-24486",
			mceInit : {'content':{mode:"exact",width:"100%",theme:"advanced",skin:"wp_theme",language:"en",spellchecker_languages:"+English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,Portuguese=pt,Spanish=es,Swedish=sv",theme_advanced_toolbar_location:"top",theme_advanced_toolbar_align:"left",theme_advanced_statusbar_location:"bottom",theme_advanced_resizing:true,theme_advanced_resize_horizontal:false,dialog_type:"modal",formats:{
						alignleft : [
							{selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles : {textAlign : 'left'}},
							{selector : 'img,table', classes : 'alignleft'}
						],
						aligncenter : [
							{selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles : {textAlign : 'center'}},
							{selector : 'img,table', classes : 'aligncenter'}
						],
						alignright : [
							{selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles : {textAlign : 'right'}},
							{selector : 'img,table', classes : 'alignright'}
						],
						strikethrough : {inline : 'del'}
					},relative_urls:false,remove_script_host:false,convert_urls:false,remove_linebreaks:true,gecko_spellcheck:true,fix_list_elements:true,keep_styles:false,entities:"38,amp,60,lt,62,gt",accessibility_focus:true,media_strict:false,paste_remove_styles:true,paste_remove_spans:true,paste_strip_class_attributes:"all",paste_text_use_dialog:true,webkit_fake_resize:false,spellchecker_rpc_url:"http://localhost/wordpress/wp-includes/js/tinymce/plugins/spellchecker/rpc.php",schema:"html5",wpeditimage_disable_captions:false,wp_fullscreen_content_css:"http://localhost/wordpress/wp-includes/js/tinymce/plugins/wpfullscreen/css/wp-fullscreen.css",plugins:"inlinepopups,spellchecker,tabfocus,paste,media,fullscreen,wordpress,wpeditimage,wpgallery,wplink,wpdialogs,wpfullscreen",content_css:"http://localhost/wordpress/wp-content/themes/twentytwelve/editor-style.css",elements:"content",wpautop:true,apply_source_formatting:false,theme_advanced_buttons1:"bold,italic,strikethrough,bullist,numlist,blockquote,justifyleft,justifycenter,justifyright,link,unlink,wp_more,spellchecker,wp_fullscreen,wp_adv",theme_advanced_buttons2:"formatselect,underline,justifyfull,forecolor,pastetext,pasteword,removeformat,charmap,outdent,indent,undo,redo,wp_help",theme_advanced_buttons3:"",theme_advanced_buttons4:"",tabfocus_elements:"sample-permalink,post-preview",body_class:"content post-type-post",theme_advanced_resizing_use_cookie:false}},
			qtInit : {'content':{id:"content",buttons:"strong,em,link,block,del,ins,img,ul,ol,li,code,more,spell,close,fullscreen"},'replycontent':{id:"replycontent",buttons:"strong,em,link,block,del,ins,img,ul,ol,li,code,spell,close"}},
			ref : {plugins:"inlinepopups,spellchecker,tabfocus,paste,media,fullscreen,wordpress,wpeditimage,wpgallery,wplink,wpdialogs,wpfullscreen",theme:"advanced",language:"en"},
			load_ext : function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
		};
	</script>
<script type='text/javascript' src='http://localhost/wordpress/wp-includes/js/tinymce/wp-tinymce.php?c=1&amp;ver=358-24486'></script>
<script type='text/javascript' src='http://localhost/wordpress/wp-includes/js/tinymce/langs/wp-langs-en.js?ver=358-24486'></script>

	<script type="text/javascript">
		var wpActiveEditor;

		(function(){
			var init, ed, qt, first_init, DOM, el, i, mce = 1;

			if ( typeof(tinymce) == 'object' ) {
				DOM = tinymce.DOM;
				// mark wp_theme/ui.css as loaded
				DOM.files[tinymce.baseURI.getURI() + '/themes/advanced/skins/wp_theme/ui.css'] = true;

				DOM.events.add( DOM.select('.wp-editor-wrap'), 'mousedown', function(e){
					if ( this.id )
						wpActiveEditor = this.id.slice(3, -5);
				});

				for ( ed in tinyMCEPreInit.mceInit ) {
					if ( first_init ) {
						init = tinyMCEPreInit.mceInit[ed] = tinymce.extend( {}, first_init, tinyMCEPreInit.mceInit[ed] );
					} else {
						init = first_init = tinyMCEPreInit.mceInit[ed];
					}

					if ( mce )
						try { tinymce.init(init); } catch(e){}
				}
			} else {
				if ( tinyMCEPreInit.qtInit ) {
					for ( i in tinyMCEPreInit.qtInit ) {
						el = tinyMCEPreInit.qtInit[i].id;
						if ( el )
							document.getElementById('wp-'+el+'-wrap').onmousedown = function(){ wpActiveEditor = this.id.slice(3, -5); }
					}
				}
			}

			if ( typeof(QTags) == 'function' ) {
				for ( qt in tinyMCEPreInit.qtInit ) {
					try { quicktags( tinyMCEPreInit.qtInit[qt] ); } catch(e){}
				}
			}
		})();
				</script>




</div>

</body>
</html>
