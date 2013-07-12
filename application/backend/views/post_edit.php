<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UCenter Administrator's Control Panel</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo  base_url();  ?>css/backend.css" media="screen" />
<meta content="Comsenz Inc." name="Copyright" />
<style type="text/css">
.menu{ position:relative; z-index:20; margin:0px; padding:0px;
}
	.menu ul{ position:absolute; top:10px; right:-1px !important; right:-2px; list-style:none; width:150px;
	     background:#F2F9FD url(http://localhost/jcms/images/bg_repy.gif) right -20px no-repeat; }
		.menu li{ margin:3px 0; *margin:1px 0; height:auto !important; height:24px; overflow:hidden; font-size:14px; font-weight:700; }
		.menu li a{ display:block; margin-right:2px; padding:3px 0 2px 30px; *padding:4px 0 2px 30px; border:1px solid #F2F9FD; background:url(http://localhost/jcms/images/bg_repno.gif) no-repeat 10px -40px; color:#666; }
			.menu li a:hover{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF; }
		.menu li a.tabon{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF url(http://localhost/jcms/images/bg_repy.gif) repeat-y; color:#2366A8; }
.footer{ position:absolute; z-index:10; right:13px; bottom:0; padding:5px 0; line-height:150%; background:url(http://localhost/jcms/images/bg_repx.gif) 0 -199px repeat-x; font-family:Arial, sans-serif; font-size:10px; -webkit-text-size-adjust: none; }
</style>

<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>

</head>
<body scroll="no">
<table cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
		<td colspan="2" height="69">
		     <?php  $this->load->view('top');  ?>
		</td>
	</tr>
	<tr>
		<td valign="top" width="160">
		    <?php  $this->load->view('left');  ?>
		</td>
		
		<td valign="top">
             
             <div class="container">
				<div class="mainbox nomargin">
			<form action="<?php echo  base_url();  ?>admin/post/save" method="post">
				<input type="hidden" name="formhash" value="d210453fca545649">
				<table class="opt">
					<tr>
						<th colspan="2">Add New Post</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="post_title" value="<?php echo $post->title ?>" /></td>
						<td>input your title</td>
					</tr>


					<tr>
						<th colspan="1"></th>
					</tr>
					<tr>
					<th colspan="2">
					  <textarea class="wp-editor-area" style="height:378px;width:450px;" cols="40" name="post_content" id="content"><?php echo $post->title ?></textarea>
					</th>
					</tr>
					
					
				</table>
				<div class="opt"><input type="submit" name="submit" value=" 提 交 " class="btn" tabindex="3" /></div>
			</form>
		</div>
	</div>
             
             
		</td>
	</tr>
</table>
</body>
</html>