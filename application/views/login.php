<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Welcome To The Website For UWI Alumni</title>
  <link rel="icon" href="../../favicon.ico">
  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
  <script type = 'text/javascript' src = "<?php echo base_url();?>js/prefixfree.min.js"></script>
  <script type = 'text/javascript' src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  
    <style>
	.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url("images/back.jpg");
	background-size: cover;
	-webkit-filter: opacity(75%);
	z-index: 0;
}
	</style>
	
</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class ="search">
			<input type="text" placeholder="Search..." name="search" />
			<input type="button" value="Search">
		</div>
		<br>
		<div class = "head">
			<div><img src="images/logo.png"alt="" width="50%" height="50%"></div>
		</div>
		<div class="login">
				<input type="text" placeholder="username" name="user"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="button" value="Login">
				<p>------------------------------ OR -----------------------------</p>
				<form action="<?php echo site_url('register') ?>">
				<input type="button" onclick="window.location ='<?php echo site_url('register')?>'" value="Register">
				</form>
				<p>Have you forgotten your<br><a href="#" class="link"><strong>username</strong></a> or <a href="#" class="link"><strong>password</strong></a>?</p>
		</div>

</body>

</html>