<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<link rel="stylesheet" href="css/adminlogin.css">
<script src="js/adminlogin.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Document</title>
</head>
<body>


<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0" align="center">
	<div class="logo">Admin Login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left" method="post" action="">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" name="email" class="sr-only">Email</label>
                        <br>
						<input type="text" class="form-control" id="lg_username" name="email" placeholder="email">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
                        <br>
						<input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
				<button type="submit" class="login-button" name="login"><i class="fa fa-chevron-right"></i></button>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>




<?php

    include "lib.php";

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM admin WHERE email='".$email."' AND password='".$password."'";
        $res = $conn->query($sql);
        if($res->num_rows == 1){
            header("Location: home.php");
        }
        else {
            $message = "Invalid Login Information";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>
    
</body>
</html>



