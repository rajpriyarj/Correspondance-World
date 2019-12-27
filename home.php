<?php
session_start();
error_reporting(1);
if(!isset($_SESSION['login_user']))
{												
header("location:index.php");
		exit();
}
	define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ncw');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$usr= $_SESSION['login_user'] ;
$sql = "SELECT prof,details FROM users WHERE username = '$usr' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
$p=$row['prof'];
$d=$row['details'];
if($p)
{if($d==1){
	include 'headerp.php' ;
 include 'dashp.php'  ;}
 else{
	 header("location:./scripts/facultydetails.php");
 }

}
else{
	if($d==1){
	include 'header.php';
	include 'dash.php'  ;}
	else{
		header("location:./scripts/userinfo.php");
	}
}

//include './applications/leave_application.php' ;

include 'footer.php' ;
   
?>
