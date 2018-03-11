<?php

	include("config.php");
	$result = mysqli_query($mysqli, "SELECT * FROM register ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>

	<head>
	    <link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		</head>
<body>
<div class="container">

 

<div class="col-md-12 modal-content" style="padding:20px">
<img src="img/header.jpg" style="width: 1044px;
    height: 298px;" >
	<h1 style="text-align:center">View details</h1>
		<table width="100%">
			<tr  style="background-color:#333; color:#fff">
				<td>Name</td>

				<td>Father's Name</td>
			
				<td>Emai id</td>
			
				<td>Mobile Number</td>
				
				<td>Edit</td>
				<td>Delete</td>
				
			</tr>

<?php 
     while($res = mysqli_fetch_array($result)) {
		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['fname']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['number']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
		echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
	}		
	
	
?>
</table>

<nav aria-label="Page navigation example" class="pull-right">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
</div>



</body>
</html>

   