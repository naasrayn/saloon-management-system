
<?php 
session_start();  
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>

  <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="gallary.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>MENU</h2>

        <?php include "menu.php" ?>
        
    </div>
    <div class="main_content">
        <div class="header"><center><h2><b>SALON BOOKING SYSTEM</b></h2></center></div>  

        <div class="row" style="margin-left: 5%; margin-top: 3%">
            <div class="col-md-12"> 


<div class="container">
  <h2><center><b>ADD SERVICE</b></center></h2>
  <center>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="register_service.php">
  

   <div class="form-group">
    
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" name="service" placeholder="Enter Service name">
    </div>
  </div>

   <div class="form-group">
    
    <div class="col-sm-10"> 
      <input type="file" class="form-control" required="" name="V_Image">
    </div>
  </div>




  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" name="save_service">Save</button>
    </div>
  </div>
</form></center>
</div>


            </div>
        </div>
       
    </div>


</div>

</body>
</html>