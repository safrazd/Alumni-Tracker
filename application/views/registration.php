<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Welcome To The Website For UWI Alumni</title>
  <link rel="icon" href="../../favicon.ico">
  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">

  <script type = 'text/javascript' src = "<?php echo base_url();?>js/prefixfree.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='<?php echo base_url(); ?>css/nav.css' rel='stylesheet' type='text/css'>
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
	
	#drop{
		padding-right:100px;border: 3px solid rgb(52, 49, 151);
	border-radius: 4px;
	position:relative;
	left:135px;
	color: #343197;
	background: #C6C6CB;
	font-family:  sans-serif;
	font-size: 14px;
	font-weight: 400;
	width: 250px;
	}
	

	</style>
	 <?php
	 echo"<nav class=\"navbar navbar-inverse navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a href='".site_url('login')."'><img src=\" ".base_url()."images/logo1.png\" width='100px' height='100px'  alt=\"\"></a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\" >
		  <ul  class=\"nav navbar-nav\" id='pad1' style='position:relative;float:right;'>
		  <li><a href='".site_url('login/admin')."'>Admin</a></li>
		  <ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
	?>
</head>

<body style="background-color: #F1F3FA;">
  <div class = "login">
        <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Register</legend>

<?php $attributes = array("name" => "registrationform");
echo form_open("register", $attributes);?>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <input name="fname"  type="text" value="<?php echo set_value('fname'); ?>" placeholder=" eg: John" class="form-control input-md" required="">
  <span class="text-danger"><?php echo form_error('fname'); ?></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="LastName">Last Name</label>  
  <div class="col-md-4">
  <input name="lname" type="text" value="<?php echo set_value('lname'); ?>" placeholder="eg: Doe" class="form-control input-md" required="">
  <span class="text-danger"><?php echo form_error('lname'); ?></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-4">
  <input name="email" type="text" value="" placeholder="eg: johndoe7@gmail.com" class="form-control input-md" required="">
  <span class="text-danger"><?php echo form_error('email'); ?></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Year Graduated">Year Graduated</label>  
  <div class="col-md-4">
  <input name="graduated" type="text"<?php echo set_value('graduated'); ?> placeholder="eg: 1995" class="form-control input-md" required="">
  <span class="text-danger"><?php echo form_error('fname'); ?></span>
    
  </div>
</div>

<div class="form-group">
  <select class="form-control" id="drop" name="degree">
    <option value="">Select Degree</option>
    <option value="BSc. Information Technology">BSc. Information Technology</option>
    <option value="BSc. Computer Science">BSc. Computer Science</option>
  </select>
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
    <input type="submit" value="Register">
  </div>
</div>

<?php echo form_close(); ?>
</fieldset>
</form>
</div>
</body>

</html>