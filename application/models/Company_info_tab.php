<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
Class Company_info_tab extends CI_Model { 

function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      }
function Comapny_info(){
    
$id= $this->session->userdata['logged_in']['alumniId'];
//require("company_info.php");
//require("dbconnect.php");

$sql1="UPDATE company
SET companyName='".$_POST["Company_Name"]."'
WHERE alumniId='".$id."';";

$sql2="UPDATE company
SET companyDescription='".$_POST["About_Company"]."'
WHERE alumniId='".$id."';";

$sql3="UPDATE company
SET country='".$_POST["Country_Employed"]."'
WHERE alumniId='".$id."';";

$sql4="UPDATE company
SET company_email='".$_POST["Company_Email"]."'
WHERE alumniId='".$id."';";

 //$res=$con->query($sql);
$companyName = $this->db->query($sql1);
$aboutCompany = $this->db->query($sql2);
$companyDescription = $this->db->query($sql3);
$companyEmail = $this->db->query($sql4);
 if(($companyName) && ($aboutCompany) && ($companyDescription) && ($companyEmail)) {
      echo json_encode(array("status"=>"success"));
 }else{
     echo json_encode(array("status"=>"failed"));
 }
}

}


