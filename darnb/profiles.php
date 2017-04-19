<?php
$alumniId = $_GET['alumniId'];
require("company_info.php");
require("dbconnect.php");
$sql="SELECT *
 FROM ((alumni
 LEFT JOIN company ON alumni.alumniId=company.alumniId)
 LEFT JOIN degree ON alumni.alumniId=degree.alumniId)
 WHERE alumni.alumniId='$alumniId';";

 $res=$con->query($sql);


if($res){
    $row=$res->fetch_assoc();
echo"<nav class=\"navbar navbar-inverse navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\"><img id =\"webnav\" src=\"logo-uwi.png\" alt=\"\"></a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"wel.html\">Home</a></li>
            <li class = \"active\"><a href=\"index.html\">About</a></li>
            <li><a href=\"contact.html\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class=\"container\">
    <div class=\"row profile\">
		<div class=\"col-md-3\">
			<div class=\"profile-sidebar\">
				<!-- SIDEBAR USERPIC -->
				<div class=\"profile-userpic\">
					<img src=\"profile.jpg\" class=\"img-responsive\" alt=\"\">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class=\"profile-usertitle\">
					<div class=\"profile-usertitle-name\">
						".$row["fName"]." ".$row["lName"]."
					</div>
					<div class=\"profile-usertitle-job\">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class=\"profile-userbuttons\">
					<button type=\"button\" class=\"btn btn-success btn-sm\">Follow</button>
					<button type=\"button\" class=\"btn btn-danger btn-sm\">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class=\"profile-usermenu\">
					<ul class=\"nav tab\">
						<li class=\"active\">
							<a href=\"#tab1\" data-toggle=\"tab\">
							<i class=\"glyphicon glyphicon-home\"></i>
							Overview </a>
						</li>
						<li>
							<a href=\"#tab3\" data-toggle=\"tab\">
							<i class=\"glyphicon glyphicon-ok\"></i>
							About Me </a>
						</li>
						<li id=\"company_tab\">
							<a href=\"#tab4\" data-toggle=\"tab\">
							<i class=\"glyphicon glyphicon-flag\"></i>
							About My Company </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class=\"col-md-9\">
            <div class=\"profile-content\">
				<div class=\"tab-content\">
					<div class=\"tab-pane active text-style\" id=\"tab1\">
						<form>
						<div class=\"form-group\">
							<textarea class=\"form-control\" rows=\"5\" id=\"comment\" placeholder=\"Enter some interest...\"></textarea>
							<div class=\"row\" id=\"post_button\">
								<div class=\"col-md-4\"> </div>
								<div class=\"col-md-4 text-center\"> 
									<button type=\"button\" class=\"btn btn-primary \">Post</button>	
								</div>
								<div class=\"col-md-4\"> </div>
							</div>
						</div>
						</form>		
					</div>
						
					
					<div class=\"tab-pane text-style\" id=\"tab3\">

							<div class=\"row \">
                            <div class=\"col-md-6\"><h4>Occupation </h4>
							<p class=\"occupation\"></p>
							</div>
                            <div class=\"col-md-6\"><h4>Degree</h4>
                                <p class=\"degree\">".$row["degreeName"]."</p>
							</div>
                                
                        </div>
                        <div class=\"row profileinfo\">
                            <div class=\"col-md-6\"><h4>Class of Degree awarded</h4>
							<p class=\"degree_class\">".$row["degreeClass"]."</p>
						</div>
                            <div class=\"col-md-6\"><h4>Year Graduated</h4>
							<p class=\"graduate\">".$row["yearGrad"]."</p>
							</div>
                        </div>
                        <div class=\"row profileinfo\">
                            <div class=\"col-md-6\"><h4>Degree Acquired </h4>
								<p class=\"degree_acquired\"></p>
							</div>
							<div class=\"col-md-6\"><h4>Email </h4>
							<p class=\"email\">".$row["email"]."</p>
							</div>
                        </div>
                        <div class=\"row profileinfo\">
							<div class=\"col-md-6\"><h4>Contact Number</h4>
                                <p class=\"phone_number\" ></p>
							</div>
							<div class=\"col-md-6\"><h4>Country of Birth </h4>
							<p class=\"birth\"></p>
							</div>
                        </div>  
						</form> 
					</div>
                    ";
						company_info();
					echo"
					</div>
				</div>
            </div>
		</div>
	</div>
</div>
";
}else{
    echo"error";
}
?>