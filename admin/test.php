<?php
include "lib.php";
$alumniValues= $_POST['alumni'];
$selectValues= $_POST['select'];
//print_r($alumniValues);
//print_r($selectValues);
for ($i=0; $i<sizeof($alumniValues);$i++){
	 $sql1 = "UPDATE `alumni` SET verified='$selectValues[$i]' WHERE alumni.alumniId='$alumniValues[$i]'";
     $result=$conn->query($sql1);
}
?>