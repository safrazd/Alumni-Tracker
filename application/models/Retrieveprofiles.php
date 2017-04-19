<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Retrieveprofiles extends CI_Model //checks if user logging in
{
	function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 

function profiles(){
//require("dbconnect.php");
//$con= $this->db;
$sql="SELECT alumni.alumniId, alumni.fname, alumni.lname, company.companyName, degree.degreeName, degree.degreeClass, degree.yearGrad
 FROM ((alumni
 LEFT JOIN company ON alumni.alumniId=company.alumniId)
 LEFT JOIN degree ON alumni.alumniId=degree.alumniId)
 WHERE alumni.verified='Yes';";
$count=0;
 //$res=$con->query($sql);
 $res = $this->db->query($sql);
 
 if($res){
	 echo"<nav class=\"navbar navbar-inverse navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\"><img id =\"webnav\" src=\" ".base_url()."images/logo-uwi.png\" alt=\"\"></a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href='".site_url('alumni')."'>Alumni</a></li>
            <li class = \"active\"><a href=\"index.html\">About</a></li>
            <li><a href=\"contact.html\">Contact</a></li>
          </ul>
		  <ul  class=\"nav navbar-nav\" style='position:relative;float:right;'><li><a href=\"\">My Profile</a></li><ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
	 
    // $row=$res->fetch_assoc();
      echo"<div class=\"container\">";
      
     foreach ($res->result_array() as $row){
         if(($count%3==0)&&($count>0)){
             echo"</div>";
             
         }else if($count%3==0){
           
            echo"<div class=\”row display-flex\”>";
           
        }
        
        echo"<div class=\"col-md-4\">
                <div class=\"thumbnail\">
                    <a href='".site_url('profile?alumniId=1')."'>
                        <img src='" .base_url()."images/profile.jpg' alt=\"Lights\" style=\"width:100%; height:300px\">
                        <div class=\"caption text-center\">
                            <h4 id=\"name\" >".$row["fname"]." ".$row["lname"]."</h3>
                            <p id=\"degree\" class=\"display_degree\"><strong>".$row["degreeClass"]." ".$row["degreeName"].", ".$row["yearGrad"]."</strong></p>
                            ";
                            if($row["companyName"]!=""){
                            echo"<p>Curently works at ".$row["companyName"]."</p>";
                            }else{
                        echo"</div>
                    </a>
                </div>
            </div>
        ";
                        }
        $count++;
        
         //$row=$res->fetch_assoc();
         
         
     }
     echo"</div>";
 }else{
     echo"error";
 }
}
}
?>