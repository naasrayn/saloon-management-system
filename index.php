<?php 
session_start();  
include("connection.php");
?>

<html>

</head>

<body>


  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="gallary.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">

   <div class="header">

    <center><h2 style="padding-top: 2%; color: white;"><b>SALON BOOKING SYSTEM</b></h2></center>
  

  </div>  



<div class="container">

  <h2 style="padding-top: 2%"><center><b>LOGIN HERE</b></center></h2>
  <center>
    <form class="form-horizontal" action="loginhandler.php" method="POST">
  <div class="form-group">
    
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" required="" id="username" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="password" required="" placeholder="Enter password">
    </div>
  </div>

<?php
if (isset( $_SESSION['error'])){

?>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10" style="color: red">
     
<?php echo  $_SESSION['error']; ?>

    </div>
  </div>

<?php } ?>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-success">Sign In</button>
    </div>
  </div>

<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10" style="color: blue">
     
<a href="register_customer.php">If not Registered? Click Here!</a>

    </div>
  </div>

</form></center>
</div>

<div class="footer">
  Copyright @2020 nasrayn & salamy 
  

</div>
<?php 

unset ($_SESSION['error']);
 ?>
</body> 
</html>