
<?php
session_start();
if(!isset($_SESSION['login_user']))
{
	header("location:../index.php");
	exit();
}

?>

<html>
<head>
	<link rel="stylesheet" href="../stylesheets/signup.css">
	
	</head>
	
<body>
	<h2>EDUCATIONAL-DETAILS</h2>
	<div class="container">
	<div class="box">
	<form name="eduform" action="education.php" method="post">
		<h2>CURRENT</h2>
	<label for="duration">DURATION</label>
		<input type="text" name="duration" placeholder="duration" required>
		<label for="degree">DEGREE</label>
		<input type="text" name="degree" placeholder="degree" required>
	<label for="board">BOARD/INSTITUE</label>
		<input type="text" name="board" placeholder="board" required>
		<label for="per">PERCENTAGE</label>
		<input type="text" name="per"placeholder="percentage" required>
		
	
	<h2>CLASS 12 DETAILS</h2>
	
	<label for="duration1">DURATION</label>
		<input type="text" name="duration1" placeholder="duration" required>
		<label for="degree1">DEGREE</label>
		<input type="text" name="degree1" placeholder="degree" required>
	<label for="board1">BOARD/INSTITUE</label>
		<input type="text" name="board1" placeholder="board" required>
		<label for="per1">PERCENTAGE</label>
		<input type="text" name="per1"placeholder="percentage" required>
	
		<h2>CLASS 10 DETAILS</h2>
		
	<label for="duration2">DURATION</label>
		<input type="text" name="duration2" placeholder="duration" required>
		<label for="degree2">DEGREE</label>
		<input type="text" name="degree2" placeholder="degree" required>
	<label for="board">BOARD/INSTITUE</label>
		<input type="text" name="board2" placeholder="board" required>
		<label for="per2">PERCENTAGE</label>
		<input type="text" name="per2"placeholder="percentage" required>
		<button type="submit" name="submit">REGISTER</button>
	</form>
		
		
	</div>
	</div>
	<scripts>
	function validateform(){
		var x=document.forms["eduform"]["duration"].value;
		if(x==""){
		alert("details are not filled");
		return false;
		}
		
		}
	</scripts>
	</body>
</html>