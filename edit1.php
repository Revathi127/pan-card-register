<?php

include("config.php");



$result = mysqli_query($mysqli, "SELECT * FROM register WHERE id='$id'");

	while($res = mysqli_fetch_array($result)){
	
	$name = $res['name'];
	$fname = $res['fname'];
	$number = $res['number'];
	$email = $res['email'];
	}
	


if(isset($_POST['update']))
	{
		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$number = $_POST['number'];	
		$email = $_POST['email'];	
		
		
		$result = "UPDATE register SET name='$name',number='$fname',number='$number',email='$email' WHERE id='$id'";
		
		$query = mysqli_query($mysqli, $result);
		
		if($query)
		{
			echo '<script> window.location.href="view.php";</script>';
		}
		else
		{
			echo "Not Ok";
		}
	}


?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
 <div class="container">

 <img src="img/header.jpg" style="margin-left: 129px;
    width: 1044px;
    height: 298px;" >

<div>
   
	 <form class="modal-content" method="post" action="edit.php">
	 <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create your PAN Card.</p>
      <hr>	
	  <div class="row">
      <div class="col-md-3" style="padding:15px"><label><b>Name</b></label></div>
      <div class="col-md-3"><input type="text" 	 name="name" value="<?php echo $name;?>"></div>
	 

      <div class="col-md-3" style="padding:15px"><label><b>Father's Name</b></label></div>
      <div class="col-md-3"><input  type="text" value="<?php echo $fname;?>" name="fname" required></div>
 </div>
  <div class="row">
      <div class="col-md-3" style="padding:15px">
      <label><b>Mobile Number</b></label></div>
	   <div class="col-md-3" style="padding:15px"><input  type="text" value="<?php echo $number;?>" name="number" required></div>
	   
	   <div class="col-md-3" style="padding:15px"><label><b>Emai Id</b></label></div>
      <div class="col-md-3" style="padding:15px"><input type="email" value="<?php echo $email;?>" name="email" required></div>
	 </div>
	
	  </div>
	   <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		
        <button type="submit" name="update" class="signupbtn">Update</button>
      </div>
    
  </form>
  </div>
  </div>
</body>
</html>