<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome To The Website For UWI Alumni</title> 
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>css/stylepage.css">
        <script type = 'text/javascript' src = "<?php echo base_url();?>js/prefixfree.min.js"></script>
		<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
		<style>
		.body{
	     position: absolute;
	     top: -20px;
	     left: -20px;
	     right: -40px;
	     bottom: -40px;
	     width: auto;
	     height: auto;
	     background-image: url("<?php echo base_url();?>images/back.jpg");
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
            <div><img src="<?php echo base_url();?>images/logo.png" alt="" width=100px height=100px></div>
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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder=" eg: John" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Last Name">Last Name</label>  
  <div class="col-md-4">
  <input id="Last Name" name="Last Name" type="text" placeholder="eg: Doe" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-4">
  <input id="Email" name="Email" type="text" placeholder="eg: johndoe7@gmail.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Year Graduated">Year Graduated</label>  
  <div class="col-md-4">
  <input id="Year Graduated" name="Year Graduated" type="text" placeholder="eg: 1995" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Button Drop Down -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttondropdown">Degree Acquired</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="Degree Acquired" type="text">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li><a href="#">Option one</a></li>
          <li><a href="#">Option two</a></li>
          <li><a href="#">Option three</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password2">Re-Enter Password</label>
  <div class="col-md-4">
    <input id="password2" name="password2" type="password" placeholder="Re-Enter Password" class="form-control input-md" required="">
    <input type="button" value="Register">
  </div>
</div>
</fieldset>
</form>
</div>
    </body>
</html>