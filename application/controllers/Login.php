<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index() //homepage or page for alumni to log in
 {
   $this->load->helper(array('form'));
   $this->load->helper('url');
   $this->load->view('alumni_login');
 }
 
 function admin() //page for admin to login
 {
   $this->load->helper(array('form'));
   $this->load->helper('url');
   $this->load->view('admin_login');
 }
}
 
 
?>
