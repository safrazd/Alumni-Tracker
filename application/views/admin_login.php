<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Welcome To The Website For UWI Alumni</title>
  <link rel="icon" href="../../favicon.ico">
  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
  <script type = 'text/javascript' src = "<?php echo base_url();?>js/prefixfree.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
    <style>
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

<body style="background-color: #F1F3FA;">
		<div class ="search">
			<input type="button" value="Admin" onclick="window.location ='<?php echo site_url('login/admin')?>'">
		</div>
		<br>
		<div class = "head">
			<div><img src="<?php echo base_url('images/logo.png'); ?>" alt="" width="50%" height="50%"></div>
		</div>
   <?php echo validation_errors(); ?>
   <?php echo form_open('adminverify'); ?>
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