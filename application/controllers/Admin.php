<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller { //viewing a person profile that is not yours

 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 

public function index()
	{
		$this->load->view('alumni_table');
		$this->load->model('retrieveunverified');
		$this->retrieveunverified->retrieve();
	}
	public function export()
	{
		$this->load->view('export_table');
		
	}
	
	public function download()
	{
		$this->load->model('excel');
		$this->excel->export();
	}
	
	public function alumni()
	{
     $this->load->model('retrieveprofiles_admin');
	 $this->retrieveprofiles_admin->profiles();
	 $this->load->view('profiles_list');
	}
	
	public function profile()
	{
		$this->load->view('viewprofile');
		$this->load->model('alumniprofile_admin');
		$this->alumniprofile_admin->profile();
	}
	
	public function session()
	{
		$this->session->sess_destroy();
		redirect('login/admin');
	}

public function about()
	{
		$this->load->view('admin_about');
		
	}

public function contact()
	{
		$this->load->view('admin_contact');
		
	}
	
}
?>