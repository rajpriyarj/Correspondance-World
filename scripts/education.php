<?php
session_start();
if(!isset($_SESSION['login_user']))
{												
header("location:../index.php");
		exit();
}
if(isset($_POST['submit']))
{

  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'ncw');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
 $duration=mysqli_real_escape_string($db,$_POST['duration']);
 $degree=mysqli_real_escape_string($db,$_POST['degree']);
	$board=mysqli_real_escape_string($db,$_POST['board']);
	$per=mysqli_real_escape_string($db,$_POST['per']);
	
 $duration1=mysqli_real_escape_string($db,$_POST['duration1']);
 $degree1=mysqli_real_escape_string($db,$_POST['degree1']);
	$board1=mysqli_real_escape_string($db,$_POST['board1']);
	$per1=mysqli_real_escape_string($db,$_POST['per1']);
	
	 
 $duration2=mysqli_real_escape_string($db,$_POST['duration2']);
 $degree2=mysqli_real_escape_string($db,$_POST['degree2']);
	$board2=mysqli_real_escape_string($db,$_POST['board2']);
	$per2=mysqli_real_escape_string($db,$_POST['per2']);
	
	
	
	
	
if(empty($duration)||empty($degree)||empty($board)||empty($per)||empty($duration1)||empty($degree1)||empty($board1)||empty($per1)||empty($duration2)||empty($degree2)||empty($board2)||empty($per2))
{
	header("location:edu.php");
	exit();
}
	else{

	$usr=$_SESSION['login_user'];
	$sql="SELECT id FROM users WHERE username='$usr'";
	$result=mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $r = $row['id'] ;
		
    $sql2="INSERT INTO edu(id,duration,board,percentage,degree) VALUES ('$r','$duration','$board','$per','$degree')";
	$sql3="INSERT INTO edu12(id,duration,board,percentage,degree) VALUES('$r','$duration1','$board1','$per1','$degree1')";
	$sql4="INSERT INTO edu10(id,duration,board,percentage,degree) VALUES('$r','$duration2','$board2','$per2','$degree2')";
	$sql5="UPDATE users SET details=1 WHERE id='$r'";
   mysqli_query($db,$sql2);
	mysqli_query($db,$sql3);
		mysqli_query($db,$sql4);
		mysqli_query($db,$sql5);
  header("location:./../home.php");
		
	exit();
	
}
}