<?php 
include 'connect.php';

$sql = "SELECT * FROM events";	

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>
Event 1: Test <br>
Event 2: User Found <br>
Event 3: NO User Found / User left<br>
<br>

<h1>Events</h1>
	<?php 
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				echo "id: " . $row["id"]. " - User: " . $row["user"]. " - Event: " . $row["event"]. " - Time: " .$row["time"] . "<br>" ;
			}
		}else{
			echo "0 results";
		}

		mysqli_close($conn);
	?>
</body>
</html>