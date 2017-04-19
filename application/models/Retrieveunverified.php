<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Retrieveunverified extends CI_Model //checks if user logging in
{
	function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 

function retrieve(){
//require("dbconnect.php");
//$con= $this->db;
$sql="SELECT * FROM `alumni` where alumni.verified='No'";
$count=0;
 //$res=$con->query($sql);
 $res = $this->db->query($sql);
  echo"<nav class=\"navbar navbar-inverse navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\"><img id =\"webnav\" src=\" ".base_url()."images/logo-uwi.png\" alt=\"\"></a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href='".site_url('alumni')."'>Alumni</a></li>
            <li class = \"active\"><a href=\"index.html\">About</a></li>
            <li><a href=\"contact.html\">Contact</a></li>
          </ul>
		  <ul  class=\"nav navbar-nav\" style='position:relative;float:right;'>
		  <li><a href='".site_url('admin')."'>Verify</a></li>
		  <li><a href='".site_url('admin/export')."'>Export</a></li>
		  <ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
	 
    // $row=$res->fetch_assoc();
      echo"<div class=\"container\">";
	  
       echo "<form action='' method='post'>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Verified</th>
            </tr>
        </thead>
        <tbody>";
		
 if($res){
     foreach ($res->result_array() as $row){
         echo "<tr>";
                echo "<td>"; 
				echo "<input name='alumni[]'". "value='". $row['alumniId']."' readonly>";
				echo "</td>";
				echo "<td>" . $row['fName'] . "</td>";
                echo "<td>" . $row['lName'] . "</td>";
                echo "<td>" . $row['email'] . "</td>"; 
                echo "<td> <select name='select[]'>";
                echo "<option value=\"No\">No</option>";
                echo "<option value=\"Yes\">Yes</option>";
                echo "</select>";
                echo "</td>";
                echo "</tr>";
     }
	 echo "</tbody></table>";
             echo "<div align=center>";
			 echo "<input type='submit' name='update' class=\"btn btn-success\" onclick='window.location.reload(true);'>";
             echo "</div>";

 }
 if (isset($_POST['update'])){
	$alumniValues= $_POST['alumni'];
	$selectValues= $_POST['select'];
		//print_r($alumniValues);
		//print_r($selectValues);
		for ($i=0; $i<sizeof($alumniValues);$i++){
			$sql1 = "UPDATE `alumni` SET verified='$selectValues[$i]' WHERE alumni.alumniId='$alumniValues[$i]'";
			 $res = $this->db->query($sql1);
		}
		 echo "<meta http-equiv='refresh' content='0'>";
	}

}

}

?>