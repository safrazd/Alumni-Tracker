<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_tab extends CI_Model { //viewing a person profile that is not yours

 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 



function update(){
	$_SESSION["id"]=2;
    //require("dbconnect.php");
   // $sql="INSERT INTO `company` (`companyName`, `alumniId`, `checked`) VALUES ('$_POST[\"\company_name \"]', '4', '');";
    $sql="UPDATE company 
    SET companyName = '".$_POST["company_name"]."', company_visible= '".$_POST["company_visible"]."' 
    WHERE alumniId = ".$_SESSION["id"].";";
    $update = $this->db->query($sql);
    if($update){
        echo json_encode(array("status"=>"success", "button"=> $_POST["company_visible"]));
    }else{
        echo json_encode(array("status"=>"failed", "button"=> $_POST["company_visible"]));
    }
}
//echo update();
} 
    ?>