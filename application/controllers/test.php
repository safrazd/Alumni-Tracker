<?php 
   class Test extends CI_Controller {  
	
      public function index() { 
         echo "This is default function."; 
      } 
  
  
      public function add_student() { 
         $this->load->model('Test_Model');
			
         $data = array( 
            'userId' => '3', 
            'fname' => 'Henry' 
         ); 
			
         $this->Test_Model->insert($data); 
      } 
   } 
?>