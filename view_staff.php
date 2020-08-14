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
            <div class="col-md-12"> 

                <center><label style="color: blue">VIEW STAFF REGISTERED</label></center>
                <table style=" margin-top: 2%" border="1" width="100%">

                    <th>SNO</th>
                    <th>F_NAME</th>
                    <th>ADDRESS</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>USERNAME</th>
                    <th>ROLE_NAME</th>
                    <th>ACTION</th>
                    <tbody>

                               <?php

                        $sql="SELECT * FROM users,roles WHERE roles.role_id=users.role_id AND roles.role_id=2";
                        $stmt=$conn->prepare($sql);
                        $stmt->execute(array());
                        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
                        if ($data) {

                        $count=1;
                          foreach ($data as $value) {

                        ?>

                        <tr>
                            <td><?php echo $count?></td>
                            <td><?php echo $value["full_Name"]?></td>
                            <td><?php echo $value["address"]?></td>
                            <td><?php echo $value["email"]?></td>
                            <td><?php echo $value["phone"]?></td>
                            <td><?php echo $value["userName"]?></td>
                            <td><?php echo $value["role_name"]?></td>
                            <td>
                                
                                <a href="#">Edit</a> |
                                <a href="deletestaff.php?id=<?php echo $value["user_id"]?>">Delete</a>
                            </td>

                            <td>
                                
                               

                        </tr>

                        <?php
                            $count++;
                            } }

                        ?>
                        
                 

                    </tbody>
                    

                </table>


            </div>
        </div>
       
    </div>


</div>

</body>
</html>