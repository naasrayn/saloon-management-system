<?php 
session_start();  
include("connection.php");
if(isset($_POST['submit'])){

  

   $username = $_POST['username'];
   $password = $_POST['password'];
    $sql="SELECT * FROM users,roles WHERE roles.role_id=users.role_id AND users.userName=? and users.passowrd=?";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array($username,$password));
    $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($data) {
      foreach ($data as $value) {
        $_SESSION['user_id']=$value['user_id'];;
       $_SESSION['user']=$username;
       $_SESSION['pass']=$password;
      $_SESSION['role']=$value['role_id'];
       $_SESSION['fullname']=$value['full_Name'];


      header('location:home.php');
     
      }
          }
          else{
            $_SESSION['error']="Error login detail username or password";
        header('location:index.php');
      }
}

 ?>
