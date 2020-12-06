<?php  

	include 'connect.php';
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "DELETE FROM notes WHERE id='$id'";
	mysqli_query($conn,$sql);
	header("Location: home.php");
?>