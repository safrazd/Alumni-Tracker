<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
Class Social extends CI_Model { 

function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      }
function social(){
    
$id=$this->session->userdata['logged_in']['alumniId']; 
//require("company_info.php");
//require("dbconnect.php");

$sql1="UPDATE link
SET facebook='".$_POST["fb"]."'
WHERE alumniId='".$id."';";

$sql2="UPDATE link
SET linkedin='".$_POST["li"]."'
WHERE alumniId='".$id."';";

$sql3="UPDATE link
SET tumblr='".$_POST["tr"]."'
WHERE alumniId='".$id."';";

$facebook = $this->db->query($sql1);
$linkedin = $this->db->query($sql2);
$tumblr = $this->db->query($sql3);

if(($facebook)&&($linkedin)&&($tumblr)){
    echo json_encode(array("status"=>"success","button"=>$_POST["fb"]));
}else{
    echo json_encode(array("status"=>"failed"));
}
}
}