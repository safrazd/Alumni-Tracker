<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Propic extends CI_Model { //viewing a person profile that is not yours

 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 


function propic(){
$id= $this->session->userdata['logged_in']['alumniId'];
$sql="SELECT * FROM link
WHERE alumniId=$id;";
    $link = $this->db->query($sql);

$valid_file=true;
if($_FILES['photo']['name'])
{
	//if no errors...
	if(!$_FILES['photo']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['photo']["name"]); //rename file
		if($_FILES['photo']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is to large.';
		}
		
		//if the file has passed the test
		if($valid_file)
		{
			$ext = end((explode(".", $new_file_name)));
			
			//move it to where we want it to be
			move_uploaded_file($_FILES['photo']['tmp_name'], 'http://alumnit.azurewebsites.net/images/'.$id.".".$ext);
			$sql2="UPDATE link
			SET image='$id.$ext'
			WHERE alumniId=$id;";
			$this->db->query($sql2);
			$message = 'Congratulations!  Your file was accepted.';

			header('Location: '.'http://alumnit.azurewebsites.net/index.php/alumni/myprofile');
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
	}
}

//you get the following information for each file:

}
}
?>