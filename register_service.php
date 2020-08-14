<?php 
session_start();  
include("connection.php");
if(isset($_POST['save_service'])){

  

   $service = $_POST['service'];

   $userID = $_SESSION['user_id'];
    $file1=$_FILES['V_Image']['tmp_name'];
    move_uploaded_file($_FILES["V_Image"]["tmp_name"],"images_services/" . $_FILES["V_Image"]["name"]);
    $upload_dir1=$_FILES["V_Image"]["name"];


	$sql="INSERT INTO service VALUES(?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(NULL,$service,$upload_dir1,$userID));

    $row=$stmt->rowCount();
    if ($row) {
      header('location:view_service.php');
     
      
          }
          else{
        header('location:insert_service.php');
      }


}

 ?>