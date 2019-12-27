<?php

session_start();
if(isset($_POST['submit']))
{

  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'ncw');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
   $name=mysqli_real_escape_string($db,$_POST['first']);
	 $cor=mysqli_real_escape_string($db,$_POST['cor']);
	 $cor2=mysqli_real_escape_string($db,$_POST['cor2']);
	 $cor3=mysqli_real_escape_string($db,$_POST['cor3']);
	 $username=mysqli_real_escape_string($db,$_POST['username']);
	 $branch=mysqli_real_escape_string($db,$_POST['branch']);
	 $email=mysqli_real_escape_string($db,$_POST['email']);
	$eid=mysqli_real_escape_string($db,$_POST['eid']);
	
	if(empty($name)||empty($cor)||empty($cor2)||empty($cor3)||empty($username)||empty($branch)||empty($email)||empty($eid))
	{
		header("location:facultydetails.php");
		exit();
		
	}
	
		 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location:userinfo.php?signup=invalid email");
		exit();
		 }
	$usr= $_SESSION['login_user'] ;

$sql = "SELECT id FROM users WHERE username = '$usr' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$r = $row['id'] ;
			$sql="INSERT INTO faculty(id,facultyid,username,branch,email,coord,year,sec,name) VALUES('$r','$eid',$username','$branch','$email','$cor','$cor2','$cor3','$name')";
	   mysqli_query($db,$sql);
	 	$sql2="UPDATE users SET details=1 WHERE id='$r'";
	mysqli_query($db,$sql2);
			header("location:./../home.php");
	
		
}
?>