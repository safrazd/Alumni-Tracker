<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	 <link href='style.css' rel='stylesheet' type='text/css'>
	 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
     <!-- Latest compiled and minified CSS -->

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     
	 <link href='style.css' rel='stylesheet' type='text/css'>
	 <script src="prof.js"></script>
	<meta charset="UTF-8">
	 <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <title>Document</title>
		
</head>
<body style="background-color: #F1F3FA;">
    <!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><img id ="webnav" src="logo-uwi.png" alt=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="wel.html">Home</a></li>
            <li class = "active"><a href="index.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="profile.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav tab">
						<li class="active">
							<a href="#tab1" data-toggle="tab">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#tab2" data-toggle="tab">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#tab3" data-toggle="tab">
							<i class="glyphicon glyphicon-ok"></i>
							About Me </a>
						</li>
						<li id="company_tab">
							<a href="#tab4" data-toggle="tab">
							<i class="glyphicon glyphicon-flag"></i>
							About My Company </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
				<div class="tab-content">
					<div class="tab-pane active text-style" id="tab1">
						<form>
						<div class="form-group">
							<textarea class="form-control" rows="5" id="comment" placeholder="Enter some interest..."></textarea>
							<div class="row" id="post_button">
								<div class="col-md-4"> </div>
								<div class="col-md-4 text-center"> 
									<button type="button" class="btn btn-primary ">Post</button>	
								</div>
								<div class="col-md-4"> </div>
							</div>
						</div>
						</form>		
					</div>
					<div class="tab-pane text-style" id="tab2">
						
							<div class="row">
								<h2>Options</h2>
							</div>
							<label >Enable Company Section</label>
							<form>
							<div class="row" >
								<div class="row">
									<div class="col-lg-6">
										<div class="input-group" >
											
											<span class="input-group-addon beautiful">
												<input type="checkbox" id="company_visible" name="company_visible">
											</span>
											<input type="text"  class="form-control" placeholder="Enter Company Name" id="company_name" name="company_name">
										</div>
									</div>
									  
								</div>
							</div>

							<div class="checkbox checkbox-info checkbox-circle">
								<input id="checkbox8" type="checkbox" checked="">
								<label for="checkbox8">
									Make Profile Public
								</label>
							</div>
							  
							<div class="row" id="company_button"> 
								<div class="col-md-4"></div>
								<div class="col-md-4" > <input class="btn btn-primary" value="save" type="button" id="settings"></input></div>
								<div class="col-md-4"></div>
							</div>
							</form>
						</div>			
									
					
					<div class="tab-pane text-style" id="tab3">
						
                        
						<form>
							
						<div class="row ">
                            <div class="col-md-12">
                                
								<button type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-ok"></i></button>
							
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Edit Form</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!--modal content-->

											<form>
												<div class="row">
													<div class="col-md-6">
															 
														<div class="form-group">
															<label for="contact">Contact Number</label>
															<input type="text" class="form-control" id="contact" name="contact"  placeholder="...">
															
														</div>
													</div>
													<div class="col-md-6">
														
														<div class="form-group">
															<label for="contact">Degree</label>
															<input type="text" class="form-control" id="degree" name="degree"  placeholder="...">
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
															 
														<div class="form-group">
															<label for="birth_country">Country of Birth</label>
															<input type="text" class="form-control" id="birth_country" name="birth_country" placeholder="...">
															
														</div>
													</div>
													<div class="col-md-6">
														
														<div class="form-group">
															<label for="graduated">Year Graduated</label>
															<input type="date" class="form-control" id="graduated" name="graduated" placeholder="...">
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
															 
														<div class="form-group">
															<label for="email">Email</label>
															<input type="email" class="form-control" id="email" name="email" placeholder="...">
															
														</div>
													</div>
													<div class="col-md-6">
														
														<div class="form-group">
															<label for="degree_acquired">Degree Acquired</label>
															<input type="text" class="form-control" id="degree_acquired" name="degree_acquired" placeholder="...">
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
															 
														<div class="form-group">
															<label for="occupation">Occupation</label>
															<input type="text" class="form-control" id="occupation" name="occupation" placeholder="...">
															
														</div>
													</div>
													<div class="col-md-6">
														
														<div class="form-group">
															<label for="degree_class">Class of Degree awarded</label>
															<input type="text" class="form-control" id="degree_class" name="degree_class"  placeholder="...">
															
														</div>
													</div>
												</div>
											</form>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

							<div class="row ">
                            <div class="col-md-6"><h4>Occupation </h4>
							<p class="occupation"></p>
							</div>
                            <div class="col-md-6"><h4>Degree</h4>
                                <p class="degree"></p>
							</div>
                                
                        </div>
                        <div class="row profileinfo">
                            <div class="col-md-6"><h4>Class of Degree awarded</h4>
							<p class="degree_class"></p>
						</div>
                            <div class="col-md-6"><h4>Year Graduated</h4>
							<p class="graduate"></p>
							</div>
                        </div>
                        <div class="row profileinfo">
                            <div class="col-md-6"><h4>Degree Acquired </h4>
								<p class="degree_acquired"></p>
							</div>
							<div class="col-md-6"><h4>Email </h4>
							<p class="email"></p>
							</div>
                        </div>
                        <div class="row profileinfo">
							<div class="col-md-6"><h4>Contact Number</h4>
                                <p class="phone_number" ></p>
							</div>
							<div class="col-md-6"><h4>Country of Birth </h4>
							<p class="birth"></p>
							</div>
                        </div>  
						</form> 
					</div>
					<?php require("company_info.php");
						company_info();
					?>
					</div>
				</div>
            </div>
		</div>
	</div>
</div>

<br>
<br>
</body>
</html>