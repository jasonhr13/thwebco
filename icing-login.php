<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	
</head>
<body>

	



<!-- Primary Page Layout -->

	<div class="container">
	<div style="width: 420px; margin:0 auto; margin-top: 120px"><img src="img/login_logo.png"></div>
<div class="form-bg">
			<form name="loginform" id="loginform" method="post" action="http://icingonthecake-bakery.com/wordpress/wp-login.php">
				<h2>Login</h2>
				<p><input type="text" placeholder="Username" name="log" id="user_login" value=""></p>
				<p><input type="password" value="" placeholder="Password" name="pwd" id="user_pass"></p>
				<label for="rememberme">
				  <input type="checkbox" id="rememberme" value="forever" name="rememberme" />
				  <span>Remember me on this computer</span>
				</label>
               <button type="submit" value="Log In" name="wp-submit" id="wp-submit"></button>
                <input type="hidden" name="redirect_to" value="http://www.thwebco.com/icing-login.php" />
                <input type="hidden" name="testcookie" value="1" />
				
			<form>
		</div>

	
		


</div>
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

<!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>