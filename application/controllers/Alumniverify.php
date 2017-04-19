<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumniverify extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('alumniuser','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('alumni_login');

   }
   else
   {
     //Go to private area
     //redirect('home', 'refresh');
	 //load profiles view page or load another controller
	 $this->load->model('retrieveprofiles');
	 $this->retrieveprofiles->profiles();
	 $this->load->view('profiles_list');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   //$username = $this->input->post('username');
   $email = $this->input->post('email');
   //query the database

   $result = $this->alumniuser->login($email, $password);
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'alumniId' => $row->alumniId,
         'email' => $row->email
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid email or password');
     return false;
   }
 }
}
?>