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
	background-image: url("<?php echo base_url('images/back.jpg'); ?>");
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
			<input type="button" value="Admin" onclick="window.location ='<?php echo site_url('login/admin')?>'">
		</div>
		<br>
		<div class = "head">
			<div><img src="<?php echo base_url('images/logo.png'); ?>" alt="" width="50%" height="50%"></div>
		</div>
   <?php echo validation_errors(); ?>
   <?php echo form_open('alumniverify'); ?>
		<div class="login">
				<input type="text" name="email" placeholder="Email" value=""<br>
				<input type="password" name="password" placeholder="Password" value = ""><br>
				<input type="submit" value="Login">
				<p>------------------------------ OR -----------------------------</p>
		
				<input type="button" onclick="window.location ='<?php echo site_url('welcome/register')?>'" value="Register">
				
				<p>Have you forgotten your<br><a href="#" class="link"><strong>email</strong></a> or <a href="#" class="link"><strong>password</strong></a>?</p>
		</div>
	</form>
</body>

</html>