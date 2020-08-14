<?php 
session_start();  
include("connection.php");
if(isset($_POST['save_staff'])){

  

   $fname = $_POST['fname'];
   $address = $_POST['address'];
     $email = $_POST['email'];
   $phone = $_POST['phone'];
     $uname = $_POST['uname'];
   $pass = $_POST['pass'];


	$sql="INSERT INTO users VALUES(?,?,?,?,?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(NULL,$fname,$address,$email,$phone,$uname,$pass,2));

    $row=$stmt->rowCount();
    if ($row) {
      header('location:view_staff.php');
     
      
          }
          else{
        header('location:register_staff.php');
      }


}

 ?>