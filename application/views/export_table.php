<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='<?php echo base_url(); ?>css/nav.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Export Alumni</title>

    <style>
     
    </style>
    <?php
	 echo"<nav class=\"navbar navbar-inverse navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a><img src=\" ".base_url()."images/logo1.png\" width='100px' height='100px'  alt=\"\"></a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\" >
          <ul class=\"nav navbar-nav\" id='pad'>
            <li ><a href='".site_url('admin/alumni')."'>Alumni</a></li>
            <li ><a href='".site_url('admin/about')."'>About</a></li>
            <li><a href='".site_url('admin/contact')."'>Contact</a></li>
          </ul>
		  <ul  class=\"nav navbar-nav\" id='pad1' style='position:relative;float:right;'>
		  <li ><a href='".site_url('admin')."'>Verify</a></li>
		  <li class = \"active\"><a href='".site_url('admin/export')."'>Export</a></li>
		  <li><a href='".site_url('admin/session')."'>Log out</a></li>
		  <ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
	?>
</head>
<body style="background-color: #F1F3FA;">
    



<br>

<div id="table">


<form action="<?php echo site_url('admin/download')?>" method="post">
    

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
    <input type="submit" name="export" class="btn btn-success" value="Export All to Excel">
    <input type="submit" name="export2" class="btn btn-success" value="Export Selected to Excel">

</div>




</form>


    

     
</body>
</html>

