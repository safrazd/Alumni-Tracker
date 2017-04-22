<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumni extends CI_Controller { //viewing a person profile that is not yours

 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 

public function index()
	{
	 $this->load->model('retrieveprofiles');
	 $this->retrieveprofiles->profiles();
	 $this->load->view('profiles_list');;
	}

public function myprofile()
	{
		$this->load->view('myprofile');
		$this->load->model('myprofilemodel');
		$this->myprofilemodel->profile();
	}
public function aboutus()
	{	
		$this->load->model('About_me_tab');
		$this->About_me_tab->AboutMe();
	}
	public function company()
	{	
		$this->load->model('Company_tab');
		$this->Company_tab->update();
	}
}
?>