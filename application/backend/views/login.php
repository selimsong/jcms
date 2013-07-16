
	<body class="login login-action-login wp-core-ui">
	<div >
<form name="loginform" id="loginform" action="<?php  echo site_url('/admin/login/validate'); ?>" method="post">

		<h1>Login</h1>

	 <p style="color: #E01056">
	   <?php echo $error; ?>
	 </p>
	<p>
		<label for="user_login">Username: 
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password: 
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
	
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
	</p>
</form>





	<p id="backtoblog"><a href="http://localhost/jcms" title="Are you lost?">&larr; Back to homepage</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	