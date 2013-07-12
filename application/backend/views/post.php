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
	
		<h3>Posts</h3>
		<div class="mainbox">
			<form action="admin.php?m=user&a=ls&srchname=&srchregdate=" onsubmit="return confirm('该操作不可恢复，您确认要删除这些用户吗？');" method="post">
				<input type="hidden" name="formhash" value="2926d50d4209e484">
				<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
					<tr>
						<th><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" class="checkbox" /> <label for="chkall"> delete</label></th>
						<th>Title</th>
						<th>Auth</th>
						<th>Categories</th>
						<th>Date</th>
						<th>Edit</th>
					</tr>
					<?php
					   foreach ($post as $value){
					?>
					   <tr>
							<td class="option"><input type="checkbox" name="delete[]" value="<?php echo $value->id; ?>" class="checkbox" /></td>
							<td> <strong><?php echo $value->title;  ?></strong></td>
							<td>admin</td>
							<td>null</td>
							<td><?php echo $value->date;  ?></td>
							<td><a href="admin.php?m=user&a=edit&uid=1">编辑</a></td>
						</tr>
				  <?php }  ?>				
					  <tr class="nobg">
						<td><input type="submit" value="submit" class="btn" /></td>
						<td class="tdpage" colspan="6"></td>
					</tr>
				</table>
				</form>
					</div>
	</div>     
		</td>
	</tr>
</table>
</body>
</html>