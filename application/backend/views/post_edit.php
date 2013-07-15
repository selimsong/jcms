<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
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
			<form action="<?php echo  base_url();  ?>admin/post/update" method="post">
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
					  <textarea class="wp-editor-area" style="height:378px;width:450px;" cols="40" name="post_content" id="content"><?php echo $post->content ?></textarea>
					</th>
					</tr>
					<tr>
						<td><input type="hidden" class="txt" name="post_id" value="<?php echo $post->id ?>" /></td>
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