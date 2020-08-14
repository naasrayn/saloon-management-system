<?php
	include("connection.php");
session_start();
if(isset($_GET["id"])){

	$id=$_GET["id"];
		$sql="DELETE FROM users WHERE user_id=?";
		$stmt=$conn->prepare($sql);
$stmt->execute(array($id));
header("location:view_staff.php");
}
?>