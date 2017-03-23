<?php 
   class User_Controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function add_user() { 
         $this->load->model('User_Model');
			
         $data = array( 
            'userId' => '3', 
            'fname' => 'Lennox' 
         ); 
			
         $this->User_Model->insert($data); 
			echo "Hello";
      }
   }	  
  
     
?>