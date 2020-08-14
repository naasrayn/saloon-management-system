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
            <div class="col-md-12"> <center><i><h2> Welcome <?php echo  $_SESSION['fullname'] ?> to Babashop Cutting Salon 
            </h2></i></center></div>
        </div>
       
    </div>


</div>

</body>
</html>