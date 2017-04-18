<?php

function displayprof(){
require("dbconnect.php");
$sql="SELECT alumni.fname, alumni.lname, company.companyName, degree.degreeName, degree.degreeClass, degree.yearGrad
 FROM ((alumni
 LEFT JOIN company ON alumni.alumniId=company.alumniId)
 LEFT JOIN degree ON alumni.alumniId=degree.alumniId)
 WHERE alumni.verified='Yes';";
$count=0;

 $res=$con->query($sql);
 if($res){
     $row=$res->fetch_assoc();
      echo"<div class=\"container\">";
      
     while($row){
         if(($count%3==0)&&($count>0)){
             echo"</div>";
             
         }else if($count%3==0){
           
            echo"<div class=\”row display-flex\”>";
           
        }
        
        echo"<div class=\"col-md-4\">
                <div class=\"thumbnail\">
                    <a href=\"profile.jpg\" target=\"_blank\">
                        <img src=\"profile.jpg\" alt=\"Lights\" style=\"width:100%; height:300px\">
                        <div class=\"caption text-center\">
                            <h4 id=\"name\" >".$row["fname"]." ".$row["lname"]."</h3>
                            <p id=\"degree\" class=\"display_degree\"><strong>".$row["degreeClass"]." ".$row["degreeName"].", ".$row["yearGrad"]."</strong></p>
                            ";
                            if($row["companyName"]!=""){
                            echo"<p>Curently works at ".$row["companyName"]."</p>";
                            }else{
                        echo"</div>
                    </a>
                </div>
            </div>
        ";
                        }

        $count++;
        
         $row=$res->fetch_assoc();
         
         
     }
     echo"</div>";
 }else{
     echo"error";
 }
}