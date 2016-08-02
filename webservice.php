<?php 
include 'connect.php';


if (isset($_POST["name"]) && !empty($_POST["name"])) {
	$name = $_POST['name'];		
}else{
	//$name = "name-test";		
	echo "name is not set.";
	echo "</br>";
}

if(isset($_POST["event"]) && !empty($_POST["event"])){
	$event = $_POST['event'];
}else{
	echo "event is not set.";
	echo "</br>";
}

if(isset($_POST["time"]) && !empty($_POST["time"])){
	$time = $_POST['time'];
}else{
	echo "time is not set.";
	echo "</br>";
}

$sql = "INSERT INTO events (user, event, time) VALUES ('$name', '$event', '$time')";	

if(mysqli_query($conn, $sql)){
	echo "Inserted";
}else{
	echo "Error" .mysqli_error($conn);
}

?>
