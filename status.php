<?php  

	include 'connect.php';
	$conn = OpenCon();
	$id = $_GET['id'];
	$new_stat = "1";
	$sql = "UPDATE `notes` SET `status`='$new_stat' WHERE id='$id'";
	mysqli_query($conn,$sql);
	header("Location: home.php");
?>