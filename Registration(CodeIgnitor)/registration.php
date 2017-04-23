<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome To The Website For UWI Alumni</title> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylepage.css">
        <script src="js/prefixfree.min.js"></script>
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
        <div class = "body"></div>
        <div class = "grad"></div>
        <div class ="header">
            <div><img src="images/logo.png"alt="" width=100px height=100px></div>
        </div>
        <div class ="search">
			<input type="text" placeholder="Search..." name="search" />
			<input type="button" value="Search">
		</div>
        <div class = "login">
        <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Register</legend>

<?php $attributes = array("name" => "registrationform");
echo form_open("user/register", $attributes);?>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <input id="fname" name="textinput" type="text" value="<?php echo set_value('fname'); ?>" placeholder=" eg: John" class="form-control input-md" required="">
  <span class="text-danger"><?php echo form_error('fname'); ?></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="LastName">Last Name</label>  
  <div class="col-md-4">
  <input id="lname" name="Last Name" type="text1" value="<?php echo set_value('lname'); ?>" placeholder="eg: Doe" class="form-control input-md" required="">
  <span class="text-danger"><?php echo form_error('lname'); ?></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="Email" type="text2" value="" placeholder="eg: johndoe7@gmail.com" class="form-control input-md" required="">
  <span class="text-danger"><?php echo form_error('email'); ?></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Year Graduated">Year Graduated</label>  
  <div class="col-md-4">
  <input id="graduated" name="Year Graduated" type="text3"<?php echo set_value('graduated'); ?> placeholder="eg: 1995" class="form-control input-md" required="">
  <span class="text-danger"><?php echo form_error('fname'); ?></span>
    
  </div>
</div>


<!-- Button Drop Down -->
<div class="form-group">
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
    <span class="text-danger"><?php echo form_error('password'); ?></span>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password2">Re-Enter Password</label>
  <div class="col-md-4">
    <input id="password2" name="password2" type="password" placeholder="Re-Enter Password" class="form-control input-md" required="">
    <span class="text-danger"><?php echo form_error('password2'); ?></span>
    <input type="button" value="Register">
  </div>
</div>

<?php echo form_close(); ?>
</fieldset>
</form>
</div>
<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    </body>
</html>