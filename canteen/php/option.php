

<?php

$servername = "localhost";
$username = "root";
$password = "";
$my_db="canteen";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$my_db );


$sql1="SELECT food_cat FROM menu";
mysqli_connect($conn,$sql1);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, $sql1 );


?>
<html>
	<head>
		
	</head>
	<body>
		<ul>
			<?php
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				
			}
			?>
		</ul>
	</body>
</html>