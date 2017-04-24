<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_tab extends CI_Model { //viewing a person profile that is not yours

 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 



function update(){
$id= $this->session->userdata['logged_in']['alumniId'];
    //require("dbconnect.php");
   // $sql="INSERT INTO `company` (`companyName`, `alumniId`, `checked`) VALUES ('$_POST[\"\company_name \"]', '4', '');";
    $sql1="UPDATE company 
    SET companyName = '".$_POST["company_name"]."', company_visible= '".$_POST["company_visible"]."' 
    WHERE alumniId = $id;";
    $sql2="UPDATE personal
    SET display_personal='". $_POST["public_profile"]."'
    WHERE alumniId=$id;";

    $company = $this->db->query($sql1);
    $personal = $this->db->query($sql2);
    if(($company)&&($personal)){
        echo json_encode(array("status"=>"success", "button"=> $_POST["public_profile"]));
    }else{
        echo json_encode(array("status"=>"failed", "button"=> $_POST["company_visible"]));
    }
}
//echo update();
} 
    ?>