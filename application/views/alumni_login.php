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

	#sub{
	width: 260px;
	height: 35px;
	background: #343197;
	border: 1px solid rgb(52, 49, 151);
	cursor: pointer;
	border-radius: 2px;
	color: #fff;
	font-family: "Arial Black", sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
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
				<input type="submit" id="sub" value="Login">
				<p>------------------------------ OR -----------------------------</p>
		
				<input type="button" onclick="window.location ='<?php echo site_url('welcome/register')?>'" value="Register">
				
		</div>
	</form>
</body>

</html>