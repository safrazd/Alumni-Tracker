<?php

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

if(isset($_POST["export2"])){
    require "lib.php";
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data3.csv');
    $output= fopen("php://output", "w");
    fputcsv($output, array('AlumniId', 'First Name', 'Last Name', 'Email Address', 'Password', 'Time Created', 'Verified'));
    
    $ids = $_POST['check'];


    array_walk($ids, function(&$value, $key){
        $value =(int)$value;
    });

    $ids = implode(', ', $ids);
    
    $query = "SELECT * FROM `alumni` WHERE alumniId IN ($ids)";
    $res=$conn->query($query);

    while($row= mysqli_fetch_assoc($res)){
        fputcsv($output, $row);
    }
    fclose($output);
}

?>