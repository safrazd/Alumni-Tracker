<?php

Class Myprofilemodel extends CI_Model { 

function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
function profile(){
$id= $this->session->userdata['logged_in']['alumniId']; //fetching alumnid of logged in user
// require("company_info.php");
// require("dbconnect.php");
$sql="SELECT *
 FROM (((alumni
 LEFT JOIN company ON alumni.alumniId=company.alumniId)
 LEFT JOIN degree ON alumni.alumniId=degree.alumniId)
LEFT JOIN personal ON alumni.alumniId=personal.alumniId)
INNER JOIN link ON alumni.alumniId=link.alumniId
 WHERE alumni.alumniId='".$id."';";

//  $res=$con->query($sql);
 $res = $this->db->query($sql);

if($res){
    // $row=$res->fetch_assoc();
   foreach ($res->result_array() as $row){ 
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
            <li><a href='".site_url('alumni')."'>Alumni</a></li>
            <li><a href=\"index.html\">About</a></li>
            <li><a href=\"contact.html\">Contact</a></li>
          </ul>
		  <ul  class=\"nav navbar-nav\" id='pad1' style='position:relative;float:right;'>
		  <li class = \"active\" ><a href='".site_url('alumni/myprofile')."'>My Profile</a></li>
		  <li><a href='".site_url('alumni/session')."'>Log out</a></li>
		  <ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class=\"container\">
    <div class=\"row profile\">
		<div class=\"col-md-3\">
			<div class=\"profile-sidebar\">
				<!-- SIDEBAR USERPIC -->
				<div class=\"profile-userpic\">
					<img src='" .base_url()."images/".$row['image']."' 	alt=\"Lights\" style=\"width:80%; height:150px\" class=\"img-responsive\">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class=\"profile-usertitle\">
					<div class=\"profile-usertitle-name\">
						".$row["fName"]." ".$row["lName"]."
					</div>
					<div class=\"profile-usertitle-job\">
						
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
							<a href=\"#tab2\" data-toggle=\"tab\">
							<i class=\"glyphicon glyphicon-user\"></i>
							Account Settings </a>
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
									<button type=\"button\" id=\"post_interest\" class=\"btn btn-primary \">Post</button>	
								</div>
								<div class=\"col-md-4\"> </div>
							</div>
						</div>
						</form>		
					</div>
					<div class=\"tab-pane text-style\" id=\"tab2\">
						
							<div class=\"row\">
								<h2>Options</h2>
							</div>
							<label >Enable Company Section</label>
							<form>
							<div class=\"row\" >
								<div class=\"row\">
									<div class=\"col-lg-6\">
										<div class=\"input-group\" >
											
											<span class=\"input-group-addon beautiful\">
												<input type=\"checkbox\" id=\"company_visible\" name=\"company_visible\">
											</span>
											<input type=\"text\"  class=\"form-control\" placeholder=\"Enter Company Name\" id=\"company_name\" name=\"company_name\">
										</div>
									</div>
									  
								</div>
							</div>

							<div class=\"checkbox checkbox-info checkbox-circle\">
								<input  type=\"checkbox\" checked=\"checked\" id=\"public_profile\" name=\"public_profile\" value=\"yes\">
								<label for=\"public_profile\">
									Make Profile Public
								</label>
							</div>
							  
							<div class=\"row\" id=\"company_button\"> 
								<div class=\"col-md-4\"></div>
								<div class=\"col-md-4\" > <input class=\"btn btn-primary\" value=\"save\" type=\"button\" id=\"settings\"></input></div>
								<div class=\"col-md-4\"></div>
							</div>
							</form>
						</div>			
									
					
					<div class=\"tab-pane text-style\" id=\"tab3\">
						
                        
						<form>
							
						<div class=\"row \">
                            <div class=\"col-md-12\">
                                
								<button type=\"button\" class=\"btn btn-info btn-circle\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-ok\"></i></button>
							
								<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
									<div class=\"modal-dialog\" role=\"document\">
										<div class=\"modal-content\">
										<div class=\"modal-header\">
											<h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Form</h5>
											<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
											<span aria-hidden=\"true\">&times;</span>
											</button>
										</div>
										<div class=\"modal-body\">
											<!--modal content-->

											<form>
												<div class=\"row\">
													<div class=\"col-md-6\">
															 
														<div class=\"form-group\">
															<label for=\"contact\">Contact Number</label>
															<input type=\"text\" class=\"form-control\" id=\"contact\" name=\"contact\"  placeholder=\"...\" value=\"".$row["contactNo"]."\">
															
														</div>
													</div>
													<div class=\"col-md-6\">
														
														<div class=\"form-group\">
															<label for=\"degree\">Degree</label>
															<input type=\"text\" class=\"form-control\" id=\"degree\" name=\"degree\"  placeholder=\"...\" value=\"".$row["degreeName"]."\">
															
														</div>
													</div>
												</div>
												<div class=\"row\">
													<div class=\"col-md-6\">
															 
														<div class=\"form-group\">
															<label for=\"birth_country\">Country of Birth</label>
															<input type=\"text\" class=\"form-control\" id=\"birth_country\" name=\"birth_country\" placeholder=\"...\" value=\"".$row["birthCountry"]."\">
															
														</div>
													</div>
													<div class=\"col-md-6\">
														
														<div class=\"form-group\">
															<label for=\"graduated\">Year Graduated</label>
															<input type=\"number\" class=\"form-control\" id=\"graduated\" name=\"graduated\" placeholder=\"...\" value=\"".$row["yearGrad"]."\">
															
														</div>
													</div>
												</div>
												<div class=\"row\">
													<div class=\"col-md-6\">
															 
														<div class=\"form-group\">
															<label for=\"email\">Email</label>
															<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"...\" value=\"".$row["email"]."\">
															
														</div>
													</div>
													<div class=\"col-md-6\">
														
														<div class=\"form-group\">
															
															
														</div>
													</div>
												</div>
												<div class=\"row\">
													<div class=\"col-md-6\">
															 
														<div class=\"form-group\">
															<label for=\"occupation\">Occupation</label>
															<input type=\"text\" class=\"form-control\" id=\"occupation\" name=\"occupation\" placeholder=\"...\" value=\"".$row["occupation"]."\">
															
														</div>
													</div>
													<div class=\"col-md-6\">
														
														<div class=\"form-group\">
															<label for=\"degree_class\">Class of Degree awarded</label>
															<input type=\"text\" class=\"form-control\" id=\"degree_class\" name=\"degree_class\"  placeholder=\"...\" value=\"".$row["degreeClass"]."\">
															
														</div>
													</div>
												</div>
											</form>
										<div class=\"modal-footer\">
											<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
											<input type=\"button\" class=\"btn btn-primary\" value=\"Save changes\" id=\"about_me\" data-dismiss=\"modal\"></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

							<div class=\"row \">
                            <div class=\"col-md-6\"><h4>Occupation </h4>
							<p class=\"occupation\">".$row["occupation"]."</p>
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
                            
							";
							if($row["display_personal"]=="true"){
							echo"
							<div class=\"col-md-6\"><h4>Email </h4>
							<p class=\"email\">".$row["email"]."</p>
							</div>
							<div class=\"col-md-6\"><h4>Country of Birth </h4>
							<p class=\"birth\">".$row["birthCountry"]."</p>
							</div>
                        </div>
                        <div class=\"row profileinfo\">
							<div class=\"col-md-6\"><h4>Contact Number</h4>
                                <p class=\"phone_number\" >".$row["contactNo"]."</p>
							</div>
							
                        </div>  
						</form> 
					</div>
					
						";

                    echo"
                    <div class=\"tab-pane text-style\" id=\"tab4\">
                    <button type=\"button\" class=\"btn btn-info btn-circle\" data-toggle=\"modal\" data-target=\"#country_modal\"><i class=\"glyphicon glyphicon-ok\"></i></button>  
                        <div class=\"page-header \">
                            <h1 class=\"text-center company_name_page\">".$row["companyName"]."</h1>      
                        </div>
                        <dl class=\"row\">
                            <dt class=\"col-sm-3 about_company_title\">About Company</dt>
                            <dd class=\"col-sm-9 about_company\">".$row["companyDescription"]."</dd>
						</dl>
						<dl class=\"row\">
                            <dt class=\"col-sm-3 country_employed_title\">Country Employed</dt>
                            <dd class=\"col-sm-9 country_employed\">".$row["country"]."</dd>
                        </dl>
						<dl class=\"row\">
                            <dt class=\"col-sm-3 company_email_title\">Company Email</dt>
                            <dd class=\"col-sm-9 company_email\">".$row["company_email"]."</dd>
						</dl>
                            
                            
							
                            
                            <div class=\"modal fade\" id=\"country_modal\" role=\"dialog\">
                           
                            <div class=\"modal-dialog\">
                            
                            <!-- Modal content-->
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modal Header</h4>
                                </div>
                                <div class=\"modal-body\">
                                <form>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                                    
                                            <div class=\"form-group\">
                                                <label for=\"Company_Name\">Company Name</label>
                                                <input type=\"text\" class=\"form-control\" id=\"Company_Name\" name=\"Company_Name\"  placeholder=\"localgoods ltd\">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                                    
                                            <div class=\"form-group\">
                                                <label for=\"About_Company\">About Company</label>
                                                <textarea class=\"form-control\" id=\"About_Company\" name=\"About_Company\"  placeholder=\"Our company does...\"></textarea>
                                                
                                            </div>
                                        </div>
                                        </div>

                                        <div class=\"row\">
                                        <div class=\"col-md-12\">
                                                    
                                            <div class=\"form-group\">
                                                <label for=\"Country_Employed\">Country Employed</label>
                                                <input type=\"text\" class=\"form-control\" id=\"Country_Employed\" name=\"Country_Employed\"  placeholder=\"Trinidad\">
                                                
                                            </div>
                                        </div>
                                        </div>

                                        <div class=\"row\">
                                        <div class=\"col-md-12\">
                                                    
                                            <div class=\"form-group\">
                                                <label for=\"Company_Email\">Company Email</label>
                                                <input type=\"text\" class=\"form-control\" id=\"Company_Email\" name=\"Company_Email\"  placeholder=\"Company1@yahoo.com\">
                                                
                                            </div>
                                        

                                </div>

                                <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
								<button type=\"button\" class=\"btn btn-primary\" id=\"button_company\" data-dismiss=\"modal\">Save changes</button>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        </form>
                        </div>   
					
					</div>
				</div>
            </div>
		</div>
	</div>
</div>
";
                            }
   }
   }else{
       echo"error";
   }
}
}
