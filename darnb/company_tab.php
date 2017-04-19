<?php
session_start();
$_SESSION["id"]=4;
function update(){
    require("dbconnect.php");
   // $sql="INSERT INTO `company` (`companyName`, `alumniId`, `checked`) VALUES ('$_POST[\"\company_name \"]', '4', '');";
    $sql="UPDATE company 
    SET companyName = '".$_POST["company_name"]."', checked= '".$_POST["company_visible"]."' 
    WHERE alumniId = ".$_SESSION["id"].";";
    $update=$con->query($sql);
    if($update){
        return json_encode(array("status"=>"success", "button"=> $_POST["company_visible"]));
    }else{
        return json_encode(array("status"=>"failed", "button"=> $_POST["company_visible"]));
    }
}
echo update();
    
    ?>