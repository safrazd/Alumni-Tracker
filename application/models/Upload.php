<?php
require 'cloudinary/Cloudinary.php';
require 'cloudinary/Uploader.php';
require 'cloudinary/Api.php';

defined('BASEPATH') OR exit('No direct script access allowed');
Class Upload extends CI_Model { 

function __construct() { 
         parent::__construct(); 
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
      }
function upload(){  
\Cloudinary::config(array( 
  "cloud_name" => "alumnit", 
  "api_key" => "116371315411181", 
  "api_secret" => "SUC_Y5t2VsLcsQW_gTxIOG_itGQ" 
));


$file = $_FILES["photo"];

$id= $this->session->userdata['logged_in']['alumniId'];

//echo $id;

//$api = new \Cloudinary\Api();
//$result = $api->resources_by_ids(array("2"));
//var_dump($result['resources'][0]['url']);
//echo $result['resources'][0]['url'];
//echo($result['resources'][1]['url']);
//$url = (string) $result['resources'][1]['url'];
//echo $url;

\Cloudinary\Uploader::upload($file['tmp_name'], array("public_id" => $id,"width"=>200,'height'=>250));
header('Location:'.site_url('alumni/myprofile'));

}
}