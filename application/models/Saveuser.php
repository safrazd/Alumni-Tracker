<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Saveuser extends CI_Model //checks if user logging in
{
 function register($data)
 {
  $this->db->insert('alumni', $data);
  $email= $data['email'];
  $query = $this->db->query("SELECT alumniId from alumni where email='$email'");
   foreach ($query->result() as $row){
        $alumniId = $row->alumniId;
		}
	return $alumniId;
 }
 
 function register1($data1)
 {
  $this->db->insert('degree', $data1);
 }
 
 function register2($data2)
 {
	 $this->db->insert('company', $data2);
	 $this->db->insert('link', $data2);
     $this->db->insert('personal', $data2);
     $this->db->insert('interest', $data2);
 }
 
}
?>