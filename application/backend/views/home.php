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

<script type='text/javascript'>
/* <![CDATA[ */
var userSettings = {"url":"\/wordpress\/","uid":"1","time":"1373525008"};/* ]]> */
</script>
<script type='text/javascript' src='http://localhost/wordpress/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=jquery,utils,json2&amp;ver=3.5.2'></script>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
</head>
<body class="wp-admin wp-core-ui no-js  index-php auto-fold admin-bar branch-3-5 version-3-5-2 admin-color-fresh locale-en-us no-customize-support">
<script type="text/javascript">
	document.body.className = document.body.className.replace('no-js','js');
</script>

	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
	
<div id="wpwrap">
<a tabindex="1" href="#wpbody-content" class="screen-reader-shortcut">Skip to main content</a>

<div id="adminmenuback"></div>
<div id="adminmenuwrap">
<div id="adminmenushadow"></div>
<ul id="adminmenu" role="navigation">
	<li class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
	<a href='home' class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Dashboard</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Dashboard</li><li class="wp-first-item current"><a href='index.php' class="wp-first-item current">Home</a></li><li><a href='update-core.php'>Updates <span class='update-plugins count-0' title=''><span class='update-count'>0</span></span></a></li></ul></li>
	<li class="wp-not-current-submenu wp-menu-separator"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu open-if-no-js menu-top menu-icon-post menu-top-first" id="menu-posts">
	<a href='edit.php' class="wp-has-submenu wp-not-current-submenu open-if-no-js menu-top menu-icon-post menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Posts</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Posts</li><li class="wp-first-item"><a href='edit.php' class="wp-first-item">All Posts</a></li><li><a href='post-new.php'>Add New</a></li><li><a href='edit-tags.php?taxonomy=category'>Categories</a></li><li><a href='edit-tags.php?taxonomy=post_tag'>Tags</a></li></ul></li>
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
			<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Top navigation toolbar." tabindex="0">
					<ul id="wp-admin-bar-root-default" class="ab-top-menu">
			<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item"  aria-haspopup="true" href="">jcms</a>
			<div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
			<li id="wp-admin-bar-view-site"><a class="ab-item"  href="">Visit Site</a>
					</li></ul></div>		
					</li>
	          </ul>			
          </div>
		<a class="screen-reader-shortcut" href="http://localhost/wordpress/wp-login.php?action=logout&#038;_wpnonce=9c87606c1a">Log Out</a>
		</div>

		
<div id="wpbody">

<div id="wpbody-content" aria-label="Main content" tabindex="0">
		
	
<div class="wrap">
<div id="icon-index" class="icon32"><br /></div><h2>Dashboard</h2>


 	<div id="welcome-panel" class="welcome-panel">
 		
			<div class="welcome-panel-content">
	<h3>Welcome to jcms!</h3>
	<p class="about-description">We&#8217;ve assembled some links to get you started:</p>
	<div class="welcome-panel-column-container">
	</div>
	</div>
		</div>




<input type="hidden" id="closedpostboxesnonce" name="closedpostboxesnonce" value="bd95c31294" /><input type="hidden" id="meta-box-order-nonce" name="meta-box-order-nonce" value="76866d9584" />
<div class="clear"></div>
</div><!-- dashboard-widgets-wrap -->

</div><!-- wrap -->


<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><!-- wpbody -->
<div class="clear"></div></div><!-- wpcontent -->


<script type='text/javascript'>list_args = {"class":"WP_Comments_List_Table","screen":{"id":"dashboard","base":"dashboard"}};</script>
<script type='text/javascript'>list_args = {"class":"WP_Comments_List_Table","screen":{"id":"dashboard","base":"dashboard"}};</script>
	<script type="text/html" id="tmpl-media-frame">
		<div class="media-frame-menu"></div>
		<div class="media-frame-title"></div>
		<div class="media-frame-router"></div>
		<div class="media-frame-content"></div>
		<div class="media-frame-toolbar"></div>
		<div class="media-frame-uploader"></div>
	</script>

	<script type="text/html" id="tmpl-media-modal">
		<div class="media-modal wp-core-ui">
			<a class="media-modal-close" href="#" title="Close"><span class="media-modal-icon"></span></a>
			<div class="media-modal-content"></div>
		</div>
		<div class="media-modal-backdrop"></div>
	</script>

	<script type="text/html" id="tmpl-uploader-window">
		<div class="uploader-window-content">
			<h3>Drop files to upload</h3>
		</div>
	</script>

	<script type="text/html" id="tmpl-uploader-inline">
		<# var messageClass = data.message ? 'has-upload-message' : 'no-upload-message'; #>
		<div class="uploader-inline-content {{ messageClass }}">
		<# if ( data.message ) { #>
			<h3 class="upload-message">{{ data.message }}</h3>
		<# } #>
					<div class="upload-ui">
				<h3 class="upload-instructions drop-instructions">Drop files anywhere to upload</h3>
				<a href="#" class="browser button button-hero">Select Files</a>
			</div>

			<div class="upload-inline-status"></div>

			<div class="post-upload-ui">
				
				<p class="max-upload-size">Maximum upload file size: 2MB.</p>

				
							</div>
				</div>
	</script>

	<script type="text/html" id="tmpl-uploader-status">
		<h3>Uploading</h3>
		<a class="upload-dismiss-errors" href="#">Dismiss Errors</a>

		<div class="media-progress-bar"><div></div></div>
		<div class="upload-details">
			<span class="upload-count">
				<span class="upload-index"></span> / <span class="upload-total"></span>
			</span>
			<span class="upload-detail-separator">&ndash;</span>
			<span class="upload-filename"></span>
		</div>
		<div class="upload-errors"></div>
	</script>

	<script type="text/html" id="tmpl-uploader-status-error">
		<span class="upload-error-label">Error</span>
		<span class="upload-error-filename">{{{ data.filename }}}</span>
		<span class="upload-error-message">{{ data.message }}</span>
	</script>

	<script type="text/html" id="tmpl-attachment">
		<div class="attachment-preview type-{{ data.type }} subtype-{{ data.subtype }} {{ data.orientation }}">
			<# if ( data.uploading ) { #>
				<div class="media-progress-bar"><div></div></div>
			<# } else if ( 'image' === data.type ) { #>
				<div class="thumbnail">
					<div class="centered">
						<img src="{{ data.size.url }}" draggable="false" />
					</div>
				</div>
			<# } else { #>
				<img src="{{ data.icon }}" class="icon" draggable="false" />
				<div class="filename">
					<div>{{ data.filename }}</div>
				</div>
			<# } #>

			<# if ( data.buttons.close ) { #>
				<a class="close media-modal-icon" href="#" title="Remove"></a>
			<# } #>

			<# if ( data.buttons.check ) { #>
				<a class="check" href="#" title="Deselect"><div class="media-modal-icon"></div></a>
			<# } #>
		</div>
		<#
		var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly';
		if ( data.describe ) { #>
			<# if ( 'image' === data.type ) { #>
				<input type="text" value="{{ data.caption }}" class="describe" data-setting="caption"
					placeholder="Caption this image&hellip;" {{ maybeReadOnly }} />
			<# } else { #>
				<input type="text" value="{{ data.title }}" class="describe" data-setting="title"
					<# if ( 'video' === data.type ) { #>
						placeholder="Describe this video&hellip;"
					<# } else if ( 'audio' === data.type ) { #>
						placeholder="Describe this audio file&hellip;"
					<# } else { #>
						placeholder="Describe this media file&hellip;"
					<# } #> {{ maybeReadOnly }} />
			<# } #>
		<# } #>
	</script>

	<script type="text/html" id="tmpl-attachment-details">
		<h3>
			Attachment Details
			<span class="settings-save-status">
				<span class="spinner"></span>
				<span class="saved">Saved.</span>
			</span>
		</h3>
		<div class="attachment-info">
			<div class="thumbnail">
				<# if ( data.uploading ) { #>
					<div class="media-progress-bar"><div></div></div>
				<# } else if ( 'image' === data.type ) { #>
					<img src="{{ data.size.url }}" draggable="false" />
				<# } else { #>
					<img src="{{ data.icon }}" class="icon" draggable="false" />
				<# } #>
			</div>
			<div class="details">
				<div class="filename">{{ data.filename }}</div>
				<div class="uploaded">{{ data.dateFormatted }}</div>

				<# if ( 'image' === data.type && ! data.uploading ) { #>
					<# if ( data.width && data.height ) { #>
						<div class="dimensions">{{ data.width }} &times; {{ data.height }}</div>
					<# } #>

					<# if ( data.can.save ) { #>
						<a class="edit-attachment" href="{{ data.editLink }}&amp;image-editor" target="_blank">Edit Image</a>
						<a class="refresh-attachment" href="#">Refresh</a>
					<# } #>
				<# } #>

				<# if ( ! data.uploading && data.can.remove ) { #>
					<a class="delete-attachment" href="#">Delete Permanently</a>
				<# } #>

				<div class="compat-meta">
					<# if ( data.compat && data.compat.meta ) { #>
						{{{ data.compat.meta }}}
					<# } #>
				</div>
			</div>
		</div>

		<# var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
			<label class="setting" data-setting="title">
				<span>Title</span>
				<input type="text" value="{{ data.title }}" {{ maybeReadOnly }} />
			</label>
			<label class="setting" data-setting="caption">
				<span>Caption</span>
				<textarea {{ maybeReadOnly }}>{{ data.caption }}</textarea>
			</label>
		<# if ( 'image' === data.type ) { #>
			<label class="setting" data-setting="alt">
				<span>Alt Text</span>
				<input type="text" value="{{ data.alt }}" {{ maybeReadOnly }} />
			</label>
		<# } #>
			<label class="setting" data-setting="description">
				<span>Description</span>
				<textarea {{ maybeReadOnly }}>{{ data.description }}</textarea>
			</label>
	</script>

	<script type="text/html" id="tmpl-media-selection">
		<div class="selection-info">
			<span class="count"></span>
			<# if ( data.editable ) { #>
				<a class="edit-selection" href="#">Edit</a>
			<# } #>
			<# if ( data.clearable ) { #>
				<a class="clear-selection" href="#">Clear</a>
			<# } #>
		</div>
		<div class="selection-view"></div>
	</script>

	<script type="text/html" id="tmpl-attachment-display-settings">
		<h3>Attachment Display Settings</h3>

		<# if ( 'image' === data.type ) { #>
			<label class="setting">
				<span>Alignment</span>
				<select class="alignment"
					data-setting="align"
					<# if ( data.userSettings ) { #>
						data-user-setting="align"
					<# } #>>

					<option value="left">
						Left					</option>
					<option value="center">
						Center					</option>
					<option value="right">
						Right					</option>
					<option value="none" selected>
						None					</option>
				</select>
			</label>
		<# } #>

		<div class="setting">
			<label>
				<span>Link To</span>
				<select class="link-to"
					data-setting="link"
					<# if ( data.userSettings ) { #>
						data-user-setting="urlbutton"
					<# } #>>

					<option value="custom">
						Custom URL					</option>
					<option value="file" selected>
						Media File					</option>
					<option value="post">
						Attachment Page					</option>
					<option value="none">
						None					</option>
				</select>
			</label>
			<input type="text" class="link-to-custom" data-setting="linkUrl" />
		</div>

		<# if ( 'undefined' !== typeof data.sizes ) { #>
			<label class="setting">
				<span>Size</span>
				<select class="size" name="size"
					data-setting="size"
					<# if ( data.userSettings ) { #>
						data-user-setting="imgsize"
					<# } #>>
											<#
						var size = data.sizes['thumbnail'];
						if ( size ) { #>
							<option value="thumbnail" >
								Thumbnail &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['medium'];
						if ( size ) { #>
							<option value="medium" >
								Medium &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['large'];
						if ( size ) { #>
							<option value="large" >
								Large &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['full'];
						if ( size ) { #>
							<option value="full"  selected='selected'>
								Full Size &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
									</select>
			</label>
		<# } #>
	</script>

	<script type="text/html" id="tmpl-gallery-settings">
		<h3>Gallery Settings</h3>

		<label class="setting">
			<span>Link To</span>
			<select class="link-to"
				data-setting="link"
				<# if ( data.userSettings ) { #>
					data-user-setting="urlbutton"
				<# } #>>

				<option value="post" selected>
					Attachment Page				</option>
				<option value="file">
					Media File				</option>
			</select>
		</label>

		<label class="setting">
			<span>Columns</span>
			<select class="columns" name="columns"
				data-setting="columns">
									<option value="1" >
						1					</option>
									<option value="2" >
						2					</option>
									<option value="3"  selected='selected'>
						3					</option>
									<option value="4" >
						4					</option>
									<option value="5" >
						5					</option>
									<option value="6" >
						6					</option>
									<option value="7" >
						7					</option>
									<option value="8" >
						8					</option>
									<option value="9" >
						9					</option>
							</select>
		</label>

		<label class="setting">
			<span>Random Order</span>
			<input type="checkbox" data-setting="_orderbyRandom" />
		</label>
	</script>

	<script type="text/html" id="tmpl-embed-link-settings">
		<label class="setting">
			<span>Title</span>
			<input type="text" class="alignment" data-setting="title" />
		</label>
	</script>

	<script type="text/html" id="tmpl-embed-image-settings">
		<div class="thumbnail">
			<img src="{{ data.model.url }}" draggable="false" />
		</div>

					<label class="setting caption">
				<span>Caption</span>
				<textarea data-setting="caption" />
			</label>
		
		<label class="setting alt-text">
			<span>Alt Text</span>
			<input type="text" data-setting="alt" />
		</label>

		<div class="setting align">
			<span>Align</span>
			<div class="button-group button-large" data-setting="align">
				<button class="button" value="left">
					Left				</button>
				<button class="button" value="center">
					Center				</button>
				<button class="button" value="right">
					Right				</button>
				<button class="button active" value="none">
					None				</button>
			</div>
		</div>

		<div class="setting link-to">
			<span>Link To</span>
			<div class="button-group button-large" data-setting="link">
				<button class="button" value="file">
					Image URL				</button>
				<button class="button" value="custom">
					Custom URL				</button>
				<button class="button active" value="none">
					None				</button>
			</div>
			<input type="text" class="link-to-custom" data-setting="linkUrl" />
		</div>
	</script>

	<script type="text/html" id="tmpl-attachments-css">
		<style type="text/css" id="{{ data.id }}-css">
			#{{ data.id }} {
				padding: 0 {{ data.gutter }}px;
			}

			#{{ data.id }} .attachment {
				margin: {{ data.gutter }}px;
				width: {{ data.edge }}px;
			}

			#{{ data.id }} .attachment-preview,
			#{{ data.id }} .attachment-preview .thumbnail {
				width: {{ data.edge }}px;
				height: {{ data.edge }}px;
			}

			#{{ data.id }} .portrait .thumbnail img {
				max-width: {{ data.edge }}px;
				height: auto;
			}

			#{{ data.id }} .landscape .thumbnail img {
				width: auto;
				max-height: {{ data.edge }}px;
			}
		</style>
	</script>
	<link rel='stylesheet' href='http://localhost/wordpress/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load=media-views,wp-jquery-ui-dialog&amp;ver=3.5.2' type='text/css' media='all' />

<script type='text/javascript'>
/* <![CDATA[ */
var commonL10n = {"warnDelete":"You are about to permanently delete the selected items.\n  'Cancel' to stop, 'OK' to delete."};var wpAjax = {"noPerm":"You do not have permission to do that.","broken":"An unidentified error has occurred."};var quicktagsL10n = {"wordLookup":"Enter a word to look up:","dictionaryLookup":"Dictionary lookup","lookup":"lookup","closeAllOpenTags":"Close all open tags","closeTags":"close tags","enterURL":"Enter the URL","enterImageURL":"Enter the URL of the image","enterImageDescription":"Enter a description of the image","fullscreen":"fullscreen","toggleFullscreen":"Toggle fullscreen mode","textdirection":"text direction","toggleTextdirection":"Toggle Editor Text Direction"};var adminCommentsL10n = {"hotkeys_highlight_first":"","hotkeys_highlight_last":"","replyApprove":"Approve and Reply","reply":"Reply"};var _wpCustomizeLoaderSettings = {"url":"http:\/\/localhost\/wordpress\/wp-admin\/customize.php","isCrossDomain":false,"browser":{"mobile":false,"ios":false}};var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"http:\/\/localhost\/wordpress\/wp-includes\/js\/thickbox\/loadingAnimation.gif","closeImage":"http:\/\/localhost\/wordpress\/wp-includes\/js\/thickbox\/tb-close.png"};var plugininstallL10n = {"plugin_information":"Plugin Information:","ays":"Are you sure you want to install this plugin?"};var _wpMediaModelsL10n = {"settings":{"ajaxurl":"\/wordpress\/wp-admin\/admin-ajax.php","post":{"id":0}}};var pluploadL10n = {"queue_limit_exceeded":"You have attempted to queue too many files.","file_exceeds_size_limit":"%s exceeds the maximum upload size for this site.","zero_byte_file":"This file is empty. Please try another.","invalid_filetype":"This file type is not allowed. Please try another.","not_an_image":"This file is not an image. Please try another.","image_memory_exceeded":"Memory exceeded. Please try another smaller file.","image_dimensions_exceeded":"This is larger than the maximum size. Please try another.","default_error":"An error occurred in the upload. Please try again later.","missing_upload_url":"There was a configuration error. Please contact the server administrator.","upload_limit_exceeded":"You may only upload 1 file.","http_error":"HTTP error.","upload_failed":"Upload failed.","big_upload_failed":"Please try uploading this file with the %1$sbrowser uploader%2$s.","big_upload_queued":"%s exceeds the maximum upload size for the multi-file uploader when used in your browser.","io_error":"IO error.","security_error":"Security error.","file_cancelled":"File canceled.","upload_stopped":"Upload stopped.","dismiss":"Dismiss","crunching":"Crunching\u2026","deleted":"moved to the trash.","error_uploading":"\u201c%s\u201d has failed to upload."};
var _wpPluploadSettings = {"defaults":{"runtimes":"html5,silverlight,flash,html4","file_data_name":"async-upload","multiple_queues":true,"max_file_size":"2097152b","url":"\/wordpress\/wp-admin\/async-upload.php","flash_swf_url":"http:\/\/localhost\/wordpress\/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":"http:\/\/localhost\/wordpress\/wp-includes\/js\/plupload\/plupload.silverlight.xap","filters":[{"title":"Allowed Files","extensions":"*"}],"multipart":true,"urlstream_upload":true,"multipart_params":{"action":"upload-attachment","_wpnonce":"2a1c3e36e8"}},"browser":{"mobile":false,"supported":true},"limitExceeded":false};var _wpMediaViewsL10n = {"url":"URL","addMedia":"Add Media","search":"Search","select":"Select","cancel":"Cancel","selected":"%d selected","dragInfo":"Drag and drop to reorder images.","uploadFilesTitle":"Upload Files","uploadImagesTitle":"Upload Images","mediaLibraryTitle":"Media Library","insertMediaTitle":"Insert Media","createNewGallery":"Create a new gallery","returnToLibrary":"\u2190 Return to library","allMediaItems":"All media items","noItemsFound":"No items found.","insertIntoPost":"Insert into post","uploadedToThisPost":"Uploaded to this post","warnDelete":"You are about to permanently delete this item.\n  'Cancel' to stop, 'OK' to delete.","insertFromUrlTitle":"Insert from URL","setFeaturedImageTitle":"Set Featured Image","setFeaturedImage":"Set featured image","createGalleryTitle":"Create Gallery","editGalleryTitle":"Edit Gallery","cancelGalleryTitle":"\u2190 Cancel Gallery","insertGallery":"Insert gallery","updateGallery":"Update gallery","addToGallery":"Add to gallery","addToGalleryTitle":"Add to Gallery","reverseOrder":"Reverse order","settings":{"tabs":[],"tabUrl":"http:\/\/localhost\/wordpress\/wp-admin\/media-upload.php?chromeless=1","mimeTypes":{"image":"Images","audio":"Audio","video":"Video"},"captions":true,"nonce":{"sendToEditor":"33072f3a3d"},"post":{"id":3,"nonce":"ffb343c979","featuredImageId":-1},"defaultProps":{"link":"file","align":"","size":""}}};var wordCountL10n = {"type":"w"};var wpLinkL10n = {"title":"Insert\/edit link","update":"Update","save":"Add Link","noTitle":"(no title)","noMatchesFound":"No matches found."};/* ]]> */
</script>
<script type='text/javascript' src='http://localhost/wordpress/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=admin-bar,hoverIntent,common,wp-ajax-response,jquery-color,wp-lists,quicktags,jquery-query,admin-comments,jquery-ui-core,jquery-&amp;load%5B%5D=ui-widget,jquery-ui-mouse,jquery-ui-sortable,postbox,dashboard,customize-base,customize-loader,thickbox,plugin-install,underscor&amp;load%5B%5D=e,shortcode,media-upload,backbone,media-models,plupload,plupload-html5,plupload-flash,plupload-silverlight,plupload-html4,wp-plu&amp;load%5B%5D=pload,media-views,media-editor,word-count,jquery-ui-resizable,jquery-ui-draggable,jquery-ui-button,jquery-ui-position,jquery-ui-&amp;load%5B%5D=dialog,wpdialogs,wplink,wpdialogs-popup&amp;ver=3.5.2'></script>

	<script type="text/javascript">
		tinyMCEPreInit = {
			base : "",
			suffix : "",
			query : "ver=358-24486",
			mceInit : {},
			qtInit : {'replycontent':{id:"replycontent",buttons:"strong,em,link,block,del,ins,img,ul,ol,li,code,spell,close"}},
			ref : {plugins:"",theme:"advanced",language:""},
			load_ext : function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
		};
	</script>

	<script type="text/javascript">
		var wpActiveEditor;

		(function(){
			var init, ed, qt, first_init, DOM, el, i, mce = 0;

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
			<div style="display:none;">
	<form id="wp-link" tabindex="-1">
	<input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="87bc802ba3" />	<div id="link-selector">
		<div id="link-options">
			<p class="howto">Enter the destination URL</p>
			<div>
				<label><span>URL</span><input id="url-field" type="text" name="href" /></label>
			</div>
			<div>
				<label><span>Title</span><input id="link-title-field" type="text" name="linktitle" /></label>
			</div>
			<div class="link-target">
				<label><input type="checkbox" id="link-target-checkbox" /> Open link in a new window/tab</label>
			</div>
		</div>
				<p class="howto toggle-arrow " id="internal-toggle">Or link to existing content</p>
		<div id="search-panel" style="display:none">
			<div class="link-search-wrapper">
				<label>
					<span class="search-label">Search</span>
					<input type="search" id="search-field" class="link-search-field" autocomplete="off" />
					<span class="spinner"></span>
				</label>
			</div>
			<div id="search-results" class="query-results">
				<ul></ul>
				<div class="river-waiting">
					<span class="spinner"></span>
				</div>
			</div>
			<div id="most-recent-results" class="query-results">
				<div class="query-notice"><em>No search term specified. Showing recent items.</em></div>
				<ul></ul>
				<div class="river-waiting">
					<span class="spinner"></span>
				</div>
			</div>
		</div>
	</div>
	<div class="submitbox">
		<div id="wp-link-update">
			<input type="submit" value="Add Link" class="button-primary" id="wp-link-submit" name="wp-link-submit">
		</div>
		<div id="wp-link-cancel">
			<a class="submitdelete deletion" href="#">Cancel</a>
		</div>
	</div>
	</form>
	</div>
	
<div class="clear"></div></div><!-- wpwrap -->
<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>
</body>
</html>
