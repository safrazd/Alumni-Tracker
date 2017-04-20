<?php

if(isset($_POST["export"])){
    require "lib.php";
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=All Records.csv');
    $output= fopen("php://output", "w");
    fputcsv($output, array('AlumniId', 'First Name', 'Last Name', 'Email Address', 'Company Name', 'Country of Company', 'Occupation', 'Degree Name', 'Degree Class', 'Year Graduated', 'FaceBook', 'LinkedIn' 'Contact Number', 'Country of Birth'));
    $query = "SELECT a1.alumniId, a1.fName, a1.lName, a1.email, c1.companyName, c1.country, c1.occupation, d1.degreeName, d1.degreeClass, d1.yearGrad, l1.facebook, l1.linkedin, p1.contactNo, p1.birthCountry from `alumni` a1
              INNER JOIN company c1 ON a1.alumniId=c1.alumniId
              INNER JOIN degree d1 ON a1.alumniId=d1.alumniId
              INNER JOIN link l1 ON a1.alumniId=l1.alumniId
              INNER JOIN personal p1 ON a1.alumniId=p1.alumniId";
    $res=$conn->query($query);

    while($row= mysqli_fetch_assoc($res)){
        fputcsv($output, $row);
    }
    fclose($output);
}

if(isset($_POST["export2"])){
    require "lib.php";
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=Selected Records.csv');
    $output= fopen("php://output", "w");
    fputcsv($output, array('AlumniId', 'First Name', 'Last Name', 'Email Address', 'Company Name', 'Country of Company', 'Occupation', 'Degree Name', 'Degree Class', 'Year Graduated', 'FaceBook', 'LinkedIn' 'Contact Number', 'Country of Birth'));
    
    $ids = $_POST['check'];


    array_walk($ids, function(&$value, $key){
        $value =(int)$value;
    });

    $ids = implode(', ', $ids);
    
    $query = "SELECT a1.alumniId, a1.fName, a1.lName, a1.email, c1.companyName, c1.country, c1.occupation, d1.degreeName, d1.degreeClass, d1.yearGrad, l1.facebook, l1.linkedin, p1.contactNo, p1.birthCountry from `alumni` a1
              INNER JOIN company c1 ON a1.alumniId=c1.alumniId
              INNER JOIN degree d1 ON a1.alumniId=d1.alumniId
              INNER JOIN link l1 ON a1.alumniId=l1.alumniId
              INNER JOIN personal p1 ON a1.alumniId=p1.alumniId WHERE a1.alumniId IN ($ids)";
    $res=$conn->query($query);

    while($row= mysqli_fetch_assoc($res)){
        fputcsv($output, $row);
    }
    fclose($output);
}

?>