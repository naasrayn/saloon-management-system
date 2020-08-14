<?php 
session_start();  
include("connection.php");
if(isset($_POST['save_customer'])){

  

   $fname = $_POST['fname'];
   $address = $_POST['address'];
     $email = $_POST['email'];
   $phone = $_POST['phone'];
     $uname = $_POST['uname'];
   $pass = $_POST['pass'];


	$sql="INSERT INTO users VALUES(?,?,?,?,?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(NULL,$fname,$address,$email,$phone,$uname,$pass,3));

    $row=$stmt->rowCount();
    if ($row) {
      header('location:index.php');
     
      
          }
          else{
        header('location:register_customer.php');
      }


}

 ?>