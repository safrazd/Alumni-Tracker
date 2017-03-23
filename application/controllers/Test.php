<?php 
   class Test extends CI_Controller {
  
     public function add_user() { 
         $this->load->model('User');
			
         $data = array( 
            'userId' => '3', 
            'fname' => 'Tiger'
         ); 
			
         $this->User->insert($data); 
   
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
      }
   }	  
	  
?>
