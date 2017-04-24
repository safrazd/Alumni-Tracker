<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Createalumni extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('saveuser','',TRUE);
 }

 function index()
 {
		  $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
				$this->form_validation->set_rules('fName', 'First Name', 'required');
				$this->form_validation->set_rules('lName', 'Last Name', 'required');
				$this->form_validation->set_rules('degreeName', 'Degree Acquired', 'required');
				$this->form_validation->set_rules('yearGrad', 'Year Graduated', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('repassword', 'Password1', 'callback_password_check');
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('registration');
						
                }
                else
                {
                        
           
  $email = $this->input->post('email');
  $data = array(
'fName' => $this->input->post('fName'),
'lName' => $this->input->post('lName'),
'email' => $this->input->post('email'),
'password' =>$this->input->post('password')
);
  
  $alumniId= $this->saveuser->register($data);
	$data1 = array(
'yearGrad' => $this->input->post('yearGrad'),
'degreeName' => $this->input->post('degreeName'),
'alumniId' =>$alumniId
);
$this->saveuser->register1($data1);
$sess_array = array(
         'alumniId' => $alumniId,
         'email' => $data['email']
       );
 $this->load->library('session');
 $this->session->set_userdata('logged_in', $sess_array);
 redirect('alumni');
 }
 }
 
 function password_check($repassword){
	if ($repassword!=$this->input->post('password'))
		return false;
 }
 
}
?>