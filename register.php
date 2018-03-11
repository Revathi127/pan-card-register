
<?php
include_once("config.php");

if(isset($_POST['submit']))
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

$result = mysqli_query($mysqli, "INSERT INTO register(name,fname,number,email,income,address,dob,country,code) VALUES('$name','$fname','$number','$email','$income','$address','$dob','$country','$code')");
   
  	echo "<script>document.location.href='register.html'</script>";
	
}
?>

