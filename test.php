<?php

//require("dbconnect.php");
//$con= $this->db;
$sql="SELECT alumni.alumniId, alumni.fname, alumni.lname, company.companyName, degree.degreeName, degree.degreeClass, degree.yearGrad, link.image
 FROM ((alumni
 LEFT JOIN company ON alumni.alumniId=company.alumniId)
 LEFT JOIN degree ON alumni.alumniId=degree.alumniId)
 INNER JOIN link on alumni.alumniId=link.alumniId
 WHERE alumni.verified='Yes'";
$count=0;
$con =new mysqli("localhost", "root", "", "alumnit");
 $res=$con->query($sql);
 
 
 if($res){
     
     while ($row = $res->fetch_assoc()){
         echo $row['image'];
		 echo "<br>";
	 }
 }
	 ?>