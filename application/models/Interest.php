<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
Class Interest extends CI_Model { 

function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      }
function interest(){
    
$id=$this->session->userdata['logged_in']['alumniId']; 
//require("company_info.php");
//require("dbconnect.php");

$sql="UPDATE interest
SET interest='".$_POST["comment"]."'
WHERE alumniId='".$id."';";

$interest = $this->db->query($sql);
if($interest){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failed"));
}
}
}