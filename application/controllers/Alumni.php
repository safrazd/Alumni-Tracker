<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumni extends CI_Controller { //viewing a person profile that is not yours

 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 

public function index()
	{
	if ($this->session->userdata['logged_in']['alumniId']){
	 $this->load->model('retrieveprofiles');
	 $this->retrieveprofiles->profiles();
	 $this->load->view('profiles_list');;
	}
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
	
	public function company_info_tab(){
		$this->load->model('company_info_tab');
		$this->company_info_tab->Comapny_info();
	}
	
public function session()
	{
		$this->session->sess_destroy();
		redirect('login');
	}	
public function profile()
	{
		$this->load->view('viewprofile');
		$this->load->model('alumniprofile');
		$this->alumniprofile->profile();
	}

public function about()
	{
		$this->load->view('alumni_about');

	}



public function contact()
	{
		$this->load->view('alumni_contact');

	}
	public function social()
	{	
		$this->load->model('social');
		$this->social->social();
	}
	public function propic()
	{	
		$this->load->model('propic');
		$this->propic->propic();
	}
		public function interest()
	{	
		$this->load->model('interest');
		$this->interest->interest();
	}

}


?>