<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Excel extends CI_Model //checks if user logging in
{
	function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 

	function export(){
if(isset($_POST["export"])){
    require "lib.php";
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=datam.csv');
    $output= fopen("php://output", "w");
    fputcsv($output, array('AlumniId', 'First Name', 'Last Name', 'Email Address', 'Password', 'Time Created', 'Verified'));
    $query = "SELECT * FROM `alumni`";
    $res=$conn->query($query);

    while($row= mysqli_fetch_assoc($res)){
        fputcsv($output, $row);
    }
    fclose($output);
}

	}
}

?>