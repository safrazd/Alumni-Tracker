<?php 
   class Test extends CI_Controller {
  
      $this->load->model('User');
			
         $data = array( 
            'userId' => '3', 
            'fname' => 'Daniel' 
         ); 
			
         $this->User->insert($data); 
   } 
?>
