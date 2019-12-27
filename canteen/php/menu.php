<?php

$servername = "localhost";
$username = "root";
$password = "";
$my_db="canteen";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$my_db );

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT * FROM menu WHERE food_cat = 'SNACKS'" ;

$result = mysqli_query($conn, $sql );


?>

<html>

<head>

<style>

table

{
font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
       bottom:200px;
       margin-top:150px;
}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

echo "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

<th>category</th>

<th>price</th>

</tr>";

 

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

  {

  echo "<tr>";

  echo "<td>" . $row['food_id'] . "</td>";

  echo "<td>" . $row['food_name'] . "</td>";

  echo "<td>" . $row['food_cat'] . "</td>";

  echo "<td>" . $row['price'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

?>

</body>

</html>