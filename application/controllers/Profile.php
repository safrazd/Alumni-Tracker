<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller { //viewing a person profile that is not yours

 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 

public function index()
	{
		$this->load->view('viewprofile');
		$this->load->model('alumniprofile');
		$this->alumniprofile->profile();
	}
}
?>