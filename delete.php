<?php

include("config.php");
$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM register WHERE id=$id");
header("Location:view.php");
?>
