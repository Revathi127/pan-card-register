<?php
  include("config.php");
  
  

 
  
  if(isset($_POST['update']))
  {
	  
	  $name = $_POST['name'];
	  $fname = $_POST['fname'];
	  $number = $_POST['number'];
	  $email = $_POST['email'];
	  $income = $_POST['income'];
	  $address = $_POST['message'];
	  $dob = $_POST['dob'];
	  $country = $_POST['country'];
	  $code = $_POST['code'];
	  
	$result = mysqli_query($mysqli, "UPDATE register SET name='$name', fname='$fname', number='$number', email='$email', income='$income', address='$address', dob='$dob', country='$country', code='$code' WHERE id=$id ");
	header("Location:view.php");
	
	
  }
  $id = $_GET['id'];
   $result1 = mysqli_query($mysqli, "SELECT * FROM register WHERE id=$id");
  
  while($output = mysqli_fetch_array($result1))
  
    {
  
	  $name = $output['name'];
	  $fname = $output['fname'];
	  $number = $output['number'];
	  $email = $output['email'];
	  $income = $output['income'];
	  $address = $output['address'];
	  $dob = $output['dob'];
	  $country = $output['country'];
	  $code = $output['code'];
 }
   
?>




<!DOCTYPE html>
<html>
    <head>
		 <link href="css/style.css" rel="stylesheet">
		 </head>
<body>
<div class="container">

 <img src="img/header.jpg" style="margin-left: 129px;
    width: 1044px;
    height: 298px;" >

<div class="col-md-6">
	
<form class="modal-content" method="post">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create your PAN Card.</p>
      <hr>
	  
      <label><b>Name</b></label>
      <input type="text" value="<?php  echo $name; ?>" name="name" required>

      <label><b>Father's Name</b></label>
      <input type="text" value="<?php  echo $fname; ?>" name="fname" required>

      <label><b>Mobile Number</b></label>
      <input type="text" value="<?php  echo $number; ?>"  name="number" required>
	  
	  <label><b>Emai Id</b></label>
      <input type="text" value="<?php  echo $email; ?>" name="email" required>
	  
	  <label><b>Anual Income</b></label>
      <input type="text" value="<?php  echo $income; ?>" name="income" required>
      
	  <label class="pull-left"><b>Permenent Address</b></label>
      <textarea  value="<?php  echo $address; ?>" name="message" ></textarea>
	  <div class="pull-right">
	  <label ><b>Date of Birth</b></label>
	  
      <input  type="date" value="<?php  echo $dob; ?>" name="dob" required><br>
	  </div><br>
	  <label><b>Country</b></label>
      <input type="text" value="<?php  echo $country; ?>" name="country" required>
	  
	  <label><b>Zip code</b></label>
      <input type="text" value="<?php  echo $code; ?>" name="code" required>
	   <div class="clearfix">
        
        <button type="submit" name="update" class="signupbtn">submit</button>
      </div>
    </div>
  </form>

</div>
</div>


</body>
</html>
