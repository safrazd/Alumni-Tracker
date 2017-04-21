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
$sql="SELECT alumni.alumniId, alumni.fname, alumni.lname, company.companyName, degree.degreeName, degree.degreeClass, degree.yearGrad, link.image
 FROM ((alumni
 LEFT JOIN company ON alumni.alumniId=company.alumniId)
 LEFT JOIN degree ON alumni.alumniId=degree.alumniId)
 INNER JOIN link on alumni.alumniId=link.alumniId
 WHERE alumni.verified='Yes'";
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
          <a><img src=\" ".base_url()."images/logo1.png\" width='100px' height='100px'  alt=\"\"></a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\" >
          <ul class=\"nav navbar-nav\" id='pad'>
            <li  class = \"active\"><a href='".site_url('profile')."'>Alumni</a></li>
            <li><a href=\"index.html\">About</a></li>
            <li><a href=\"contact.html\">Contact</a></li>
          </ul>
		  <ul  class=\"nav navbar-nav\" id='pad1' style='position:relative;float:right;'>
		  <li><a href='".site_url('')."'>My Profile</a></li>
		  <ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
	 
    // $row=$res->fetch_assoc();
      echo"<div class=\"container\">";
     
     foreach ($res->result_array() as $row){
         if(($count%3==0)&&($count>0)){
             echo"</div>";
             echo "<h1>".$row['image']."</h1>";
         }else if($count%3==0){
           
            echo"<div class=\”row display-flex\”>";
           
        }
        $image= "images/".$row['image'];
        echo"<div class=\"col-md-4\">
                <div class=\"thumbnail\">
                    <a href='".site_url('profile?alumniId='.$row["alumniId"])."'>
                        <img src='".base_url($image)."' alt=\"Lights\" style=\"width:100%; height:300px\">
                        
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