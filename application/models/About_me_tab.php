<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
Class About_me_tab extends CI_Model { 

function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      }
function AboutMe(){
    
$id=$this->session->userdata['logged_in']['alumniId']; 
//require("company_info.php");
//require("dbconnect.php");

$sql1="UPDATE alumni
SET email='".$_POST["email"]."'
WHERE alumniId='".$id."';";

$sql2="UPDATE company
SET occupation='".$_POST["occupation"]."'
WHERE alumniId='".$id."';";

$sql3="UPDATE degree
SET degreeName='".$_POST["degree"]."',degreeClass='".$_POST["degree_class"]."',yearGrad='".$_POST["graduated"]."'
WHERE alumniId='".$id."';";

$sql4="UPDATE personal
SET contactNo='".$_POST["contact"]."',birthCountry='".$_POST["birth_country"]."'
WHERE alumniId='".$id."';";
 //$res=$con->query($sql);
$alumni_update = $this->db->query($sql1);
$company_update = $this->db->query($sql2);
$degree_update = $this->db->query($sql3);
$update_personal = $this->db->query($sql4);
 if(($alumni_update) && ($company_update) && ($degree_update) && ($update_personal)) {
      echo json_encode(array("status"=>"success"));
 }else{
     echo json_encode(array("status"=>"failed"));
 }
}

}


