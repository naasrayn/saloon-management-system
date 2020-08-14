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

                <center><label style="color: blue">VIEW SERVICES</label></center>
                <table style=" margin-top: 2%" border="1" width="100%">

                    <th>SNO</th>
                    <th>service_name</th>
                    <th>service_image</th>
                <th>ACTION</th>
                    
                    <tbody>

                               <?php

                        $sql="SELECT * FROM service";
                        $stmt=$conn->prepare($sql);
                        $stmt->execute(array());
                        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
                        if ($data) {

                        $count=1;
                          foreach ($data as $value) {

                        ?>

                        <tr>
                            <td><?php echo $count?></td>
                            <td><?php echo $value["service_name"]?></td>
                            <td><?php echo $value["service_image"]?></td>
                         
                          
                            <td>
                                
                                <a href="#">Edit</a> |
                                <a href="#">Delete</a>
                            </td>

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