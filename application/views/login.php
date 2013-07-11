<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>wordpress &rsaquo; Log In</title>
	<link rel='stylesheet' id='wp-admin-css'  href='http://localhost/wordpress/wp-admin/css/wp-admin.min.css?ver=3.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='http://localhost/wordpress/wp-includes/css/buttons.min.css?ver=3.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='http://localhost/wordpress/wp-admin/css/colors-fresh.min.css?ver=3.5.2' type='text/css' media='all' />
<meta name='robots' content='noindex,nofollow' />
	</head>
	<body class="login login-action-login wp-core-ui">
	<div id="login">
		<h1>&nbsp; Login: </h1>
		<br />
	
<form name="loginform" id="loginform" action="" method="post">
	<p>
		<label for="user_login">Username<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
	
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
		<input type="hidden" name="redirect_to" value="http://localhost/wordpress/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>



<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="http://localhost/jcms" title="Are you lost?">&larr; Back to homepage</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	