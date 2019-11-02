<!DOCTYPE html>
<html>
<title>LOGIN FORM</title>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/backend/css/login.css'); ?>" />
</head>
<body>
	<div class="loginBox">
	<h2>log In Here</h2>
	<form method="post" action="<?php echo site_url('login/validation'); ?>">
		<a>Email:</a>
		<input type="Email" name="email" placeholder="Enter Email">
		<a>Password:</a>
		<input type="password" name="password" placeholder="Enter Password">
		<input type="submit" name="" value="LOGIN">
	</form>
	</div>
</body>
</html>