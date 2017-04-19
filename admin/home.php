<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="alumniTable.php">Almuni Table</a></li>
      <li><a href="export.php">Export</a></li>
    </ul>
  </div>
</nav>

<div id="background">
  <img src="images/computer_code.jpg" alt="background" height="100%" width="100%">
</div>
  
<div class="container" id="hold">
  <h3>Welcome to the Admin Page</h3>
  <p>Here you can use the links in the upper left navigation bar to perform different tasks.</p>
  <p>The Alumni Table tab allows you to approve accounts which need to be verified on the site.</p>
  <p>Export allows you to export a single record, multiple records or the entire database to a CSV file.</p>
</div>

</body>
</html>