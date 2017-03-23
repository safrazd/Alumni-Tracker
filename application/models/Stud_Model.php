<?php 
   class Stud_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("stud", $data)) { 
            return true; 
         } 
      } 
   
    
   } 
?> 