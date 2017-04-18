<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div>

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
        $count = $res->num_rows;
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
                echo "<option value='No'>No</option>";
                echo "<option value='Yes'>Yes</option>";
                echo "</select>";
                echo "</td>";
                echo "</tr>";
            }
			 echo "</tbody></table>";
			 echo "<input type='submit' name='update' onclick='window.location.reload(true);'>";
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

 
</body>
</html>