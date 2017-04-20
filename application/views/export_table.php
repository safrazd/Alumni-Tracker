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

    <style>
        body{
            background-image: url(computer_code.jpg); 
        }
    </style>
    <nav class="navbar navbar-default" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav" id="list">
      <li><a href="home.php">Home</a></li>
      <li><a href="alumniTable.php">Almuni Table</a></li>
      <li class="active"><a href="export.php">Export</a></li>
    </ul>
  </div>
</nav>
</head>
<body>
    

<br>

<div id="table">


<form action="">
    

<div class="container" id="hold">
<h3>Welcome to the Export Table</h3>
<p>Here you can select as many records as you want with the checkbox column, Select, and click the Export Selected button to create a CSV file of the selected records.</p>
<p>You can also export all records on the database to a CSV file with the Export All to Excel button.</p>
  <table class="table table-bordered" id="a_table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Select</th>
            </tr>
        </thead>
        <tbody>
    <?php
		
        $sql = "SELECT * FROM `alumni`";
        $res = $this->db->query($sql);
        
        foreach ($res->result_array() as $row){
            ?>
            <tr>

                <td><?php echo $row['alumniId']; ?></td>
                <td><?php echo $row['fName']; ?></td>
                <td><?php echo $row['lName']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><input type="checkbox" name="check[]" value="<?php echo $row['alumniId']?>">
                <?php
                $id[] = $row['alumniId'];
                ?>
            </tr>

            <?php
        }
        
    ?>

    </tbody>
    </table>

</div>
</div>
<div style="text-align:center;">   
    <input type="button" name="export"  value="Register">
    <input type="submit" name="export2" class="btn btn-success" >

</div>




</form>
     
</body>
</html>

<script>
$(document).ready(function(){
    $('button').click(function(){
        var excel_data = $('#hold').html();
		var string= <?php echo site_url("admin/download") ?>
        var page = string?data=" + excel_data;
        window.location = page;
    });

    $('#export2').click(function(){
        var excel_data = $('#hold').html();
        var page = "excel.php?data=" + excel_data;
        window.location = page;
    });
});

</script>