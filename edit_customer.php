
<!DOCTYPE html>
<?php
include "connection.php"
?>
<html>
<head>
	

    <script type="text/javascript">
	
			function validate(){
	var phone=document.getElementById('phone');
	
		if (phone.value.length != 10){
		alert("Phone number is not valid");
		return false;
	}
	
	
}
</script>

</head>




<body>

	<?php
 $sql="SELECT * FROM user WHERE user_id=:id";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array('id'=>$_GET["user_id"]));
  $ft = $stmt->fetch(PDO::FETCH_ASSOC);

?>


	<div class="row col-md-9 col-md-offset-1">
		<div class="panel panel-primary">


			<div class="panel-heading text-center">
				e

			</div>

			<div class="panel-body">
<div style="margin-left:16%";>

	<form action="addstaffhandler.php" method="POST" class="form-horizontal" role="form" onsubmit="return validate()">
  <div class="form-group">
    <label class="control-label col-sm-2">USER ID:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="id" placeholder="Enter Full Name" value="<?php echo $ft['staff_id']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Full Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="fullname" placeholder="Enter LastName" value="<?php echo $ft['fullname']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Gender:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="gender" placeholder="Enter Gender" value="<?php echo $ft['gender']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Address:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="address" placeholder="Enter Address" value="<?php echo $ft['address']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Occupation:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="occupation" placeholder="Enter Occupation" value="<?php echo $ft['occupation']; ?>">
    </div>

  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Phone:</label>
    <div class="col-sm-6">
    	
      <input type="number"  id="phone" class="form-control" name="phone" placeholder="Enter phone" value="<?php echo $ft['phone']; ?>">
    </div>
</div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="save">Save</button>
    </div>
  </div>
	</div>
	
		

	</form>

	<?php 
include("connection.php");

if(isset($_POST['save'])){

  $id=$_POST['staff_id'];
  $name=$_POST['fullname'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $occupation=$_POST['occupation'];
  $phone=$_POST['phone'];
 
 
 
  $sql="UPDATE staff SET staff_id=:staff_id,fullname=:fullname,gender=:gender,address=:address,occupation=:occupation,phone=:phone WHERE staff_id= :id";
  $pre = $conn->prepare($sql);
  $pre->execute(array(':staff_id'=>$id,':fullname'=>$name,':gender'=>$gender,':address'=>$address,':occupation'=>$occupation,':phone'=>$phone,":id"=>$_GET['staff_id']));

  header("location:viewstaff.php");
}

?>
	


	</div>
 
	</form>


				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>



</body>
</html>