<?php 
   class User extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
	public function add__user(){
     $data = array( 
   'userId' => ‘3’, 
   'fname' => ‘Virat’ 
); 
$this->db->insert("users", $data);
	}

}
?> 