<?php 
   class Test_Model extends CI_Model {
   
      public function insert($data) { 
         if ($this->db->insert("users", $data)) { 
            return true; 
         } 
      }
   } 
?>