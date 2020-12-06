<?php

function openCon()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "tasks";

	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Connection Failed");

	return $conn;
}
   
?>