<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Welcome To The Website For UWI Alumni</title>
  <link rel="icon" href="../../favicon.ico">
  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/register.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type = 'text/javascript' src = "<?php echo base_url();?>js/prefixfree.min.js"></script>
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
		  <li ><a href='".site_url('login/admin')."'>Admin</a></li>
		  <ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
	?>
</head>

<body style="background-color: #F1F3FA;">
		
   <?php echo form_open('createalumni'); ?>
		<div class="register" style="position:absolute; top:150px;">
				<label style= "font-family: Garamond;font-size:24px;">Registration</label>
				
				<input type="text" name="fName" placeholder="First Name"> <br><br>
				<input type="text" name="lName" placeholder="Last Name"><br><br>
				 <select name="degreeName" class="general"  >
					<option value="" disabled selected hidden>Degree</option>
					<option value="BSc. Information Technology">BSc. Information Technology</option>
					<option value="BSc. Computer Science">BSc. Computer Science</option>
				 </select>
				 <br><br>
				 <input type="number" name="yearGrad" placeholder="Year graduate" class="general" min="2000" max="2099" step="1" value="2017" ><br><br>
				 <input type="email" name="email" placeholder="email" class="general"><br><br>
				 <input type="password" name="password" placeholder="password" class="general"><br><br>
				 <input type="password" name="repassword" placeholder="reenter password" class="general"><br><br>
				<input type="submit" id="sub" value="Register">
				
		</div>
	</form>
</body>

</html>