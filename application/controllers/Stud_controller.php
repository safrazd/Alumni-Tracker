<?php 
   class Stud_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
			
      } 
  
  
      public function add_student() { 
         $this->load->model('Stud_Model');
			
         $data = array( 
            'userId' => 3, 
            'fname' => 'Sam' 
         ); 
			
         $this->Stud_Model->insert($data); 
   
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
      }  
   } 
?>