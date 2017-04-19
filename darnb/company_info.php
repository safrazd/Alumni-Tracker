<?php

$_SESSION["id"]=4;

    function company_info(){
        require("dbconnect.php");
        $sql="SELECT * FROM company WHERE alumniId=".$_SESSION["id"].";";
        $res=$con->query($sql);
        echo "<div class=\"tab-pane text-style\" id=\"tab4\">";
        if($res){
            $row=$res->fetch_assoc();
            echo "
						<button type=\"button\" class=\"btn btn-info btn-circle\" data-toggle=\"modal\" data-target=\"#country_modal\"><i class=\"glyphicon glyphicon-ok\"></i></button>  
                        <div class=\"page-header \">
                            <h1 class=\"text-center company_name_page\">".$row["companyName"]."</h1>      
                        </div>
                        <dl class=\"row\">
                            <dt class=\"col-sm-3 about_company_title\">About Company</dt>
                            <dd class=\"col-sm-9 about_company\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sint magnam sequi repellendus volupta</dd>

                            <dt class=\"col-sm-3 country_employed_title\">Country Employed</dt>
                            <dd class=\"col-sm-9 country_employed\">Vestibulum</dd>
                            

                            <dt class=\"col-sm-3 company_email_title\">Company Email</dt>
                            <dd class=\"col-sm-9 company_email\">Email@something.com</dd>

                            
                            </dd>
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
								<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        </form>
                                    
                        
            ";
        }
        echo"</div>";
    }
    ?>