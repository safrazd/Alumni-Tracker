<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <link href='publicstyle.css' rel='stylesheet' type='text/css'>
	 <link href='<?php echo base_url(); ?>css/nav.css' rel='stylesheet' type='text/css'>
     <!-- Latest compiled and minified CSS -->

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Unverified Alumni Members</title>

    <title>About</title>

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
          <a><img src=\" ".base_url()."images/logo1.png\" width='100px' height='100px'  alt=\"\"></a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\" >
          <ul class=\"nav navbar-nav\" id='pad'>
            <li ><a href='".site_url('alumni')."'>Alumni</a></li>
            <li><a href='".site_url('alumni/about')."'>About</a></li>
            <li class = \"active\"><a href='".site_url('alumni/contact')."'>Contact</a></li>
          </ul>
		  <ul  class=\"nav navbar-nav\" id='pad1' style='position:relative;float:right;'>
      <li><a href='".site_url('alumni/myprofile')."'>My Profile</a></li>
		  <li><a href='".site_url('alumni/session')."'>Log out</a></li>
		  <ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
	?>

  <style>
    #text
    {
      padding: 60px;
      margin: auto;
      width: 50%;
      border: 3px solid grey;
    }
  </style>
</head>
<body>
  <div id="text">
    <p> <font size="4"> 
        You can contact us using through the following:
        <br>
        <br>

        Location of DCIT        
        <br>

        Faculty of Science and Technology at The University of the West Indies, St. Augustine Campus, Trinidad & Tobago, W.I.
        <br>
        <br>


        Telephone: (868) 662-2002 Ext. 83098/83640 FAX NO. (868) 645-7132 
        <br>
        <br>
        
        E-mail: dcit@sta.uwi.edu
        </font>
    </p>

  </div>
    
    
</body>
</html>