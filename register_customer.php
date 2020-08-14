<html>

</head>
<script type="text/javascript">
  function validation() {
    var phone=document.getElementById('phone');
    var name=document.getElementById("name")
    if (phone.value.length !=10){
      alert("invalid phone number");
      return false;
    }
    // body...

  }
</script>
<body>


  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="gallary.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

   <div class="header">

  
  <ul >
    
    <li><a href="index.php"><b style="color: white;">HOME</b></a></li>
    

  </ul>
  </div>  

<div class="container">
  <h2><center><b>PLEASE REGISTER HERE</b></center></h2>
  <center>

    <form class="form-horizontal" method="POST" action="customer_handler.php" onsubmit="return validation()">
  

   <div class="form-group">
    
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" name="fname" placeholder="Enter your full name">
    </div>
  </div>

   <div class="form-group">
    
    <div class="col-sm-10"> 
      <input type="text" class="form-control" required="" name="address" placeholder="Enter  your address">
    </div>
  </div>

 <div class="form-group">
    
    <div class="col-sm-10"> 
      <input type="email" class="form-control" required="" name="email" placeholder="Enter  your email">
    </div>
  </div>


  <div class="form-group">
    
    <div class="col-sm-10"> 
     <input type="number" class="form-control" required="" name="phone" placeholder="Enter your phone" id="phone">
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
      <button type="submit" class="btn btn-success" name="save_customer">Save</button>
    </div>
  </div>
</form></center>
</div>

<div class="footer">
  Copyright @2020 nasrayn & salamy 
  

</div>

</body> 
</html>