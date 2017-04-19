<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="alumniTable.php">Almuni Table</a></li>
      <li><a href="export.php">Export</a></li>
    </ul>
  </div>
</nav>

<div id="background">
  <img src="images/computer_code.jpg" alt="background" height="100%" width="100%">
</div>
  
<div class="container" id="hold">
  <h3>Welcome to the Alumni Table</h3>
  <p>Here you can approve all pending accounts that need verification by changing the verified value to Yes and clicking submit.</p>


    <form action='' method='post'>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Verified</th>
            </tr>
        </thead>
        <tbody>
    <?php
        include "lib.php";
        $sql = "SELECT * FROM `alumni` where alumni.verified='No'";
        $res = $conn->query($sql);
        if ($res){
            while (($row = $res-> fetch_assoc())!=null){
                // print the rows of the table
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
			
    ?>
	
	<?php
	if (isset($_POST['update'])){
	$alumniValues= $_POST['alumni'];
	$selectValues= $_POST['select'];
		//print_r($alumniValues);
		//print_r($selectValues);
		for ($i=0; $i<sizeof($alumniValues);$i++){
			$sql1 = "UPDATE `alumni` SET verified='$selectValues[$i]' WHERE alumni.alumniId='$alumniValues[$i]'";
			$result=$conn->query($sql1);
		}
		 echo "<meta http-equiv='refresh' content='0'>";
	}
	?>
</div>
 
</body>
</html>