
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

    <?php
 $sql="SELECT * FROM user WHERE user_id=:id";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array('id'=>$_GET["user_id"]));
  $ft = $stmt->fetch(PDO::FETCH_ASSOC);

?>

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
  <h2><center><b>ADD STAFF</b></center></h2>
  <center>

    <form class="form-horizontal" method="POST" action="register_staff.php">
  

   <div class="form-group">
    
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" name="fname" placeholder="Enter your fullname" value="<?php echo $ft['name']; ?>">
    </div>
  </div>

   <div class="form-group">
    
    <div class="col-sm-10"> 
      <input type="text" class="form-control" required="" name="address" placeholder="Enter  your address" value="<?php echo $ft['address']; ?>">
    </div>
  </div>

 <div class="form-group">
    
    <div class="col-sm-10"> 
      <input type="email" class="form-control" required="" name="email" placeholder="Enter  your email" value="<?php echo $ft['email']; ?>">
    </div>
  </div>


  <div class="form-group">
    
    <div class="col-sm-10"> 
      <input type="number" class="form-control" required="" name="phone" placeholder="Enter your phone" value="<?php echo $ft['phone']; ?>">
    </div>
  </div>

  <div class="form-group">
    
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" name="uname" placeholder="Enter username">
    </div>
  </div>

  <div class="form-group">
    
    <div class="col-sm-10">
      <input type="password" class="form-control" required="" name="pass" placeholder="Enter password">
    </div>
  </div>



  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" name="save_staff">Save</button>
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