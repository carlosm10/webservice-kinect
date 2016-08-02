<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "kinect_events";

$conn = mysqli_connect($server, $user, $password, $database);

if(mysqli_connect_errno()){
	echo "Failed to connect: " . mysqli_connect_error();
 }


?>
