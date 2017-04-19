<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Adminuser extends CI_Model //checks if user logging in
{
 function login($email, $password)
 {
   $this -> db -> select('adminId, email, password');
   $this -> db -> from('admin');
   $this -> db -> where('email', $email);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>