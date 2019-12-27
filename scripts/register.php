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
 $add=mysqli_real_escape_string($db,$_POST['add']);
 $session=mysqli_real_escape_string($db,$_POST['session']);
 $date=mysqli_real_escape_string($db,$_POST['dob']);
 $sec=mysqli_real_escape_string($db,$_POST['sec']);
 $branch=mysqli_real_escape_string($db,$_POST['branch']);
 $sem=mysqli_real_escape_string($db,$_POST['sem']);
 $mno=mysqli_real_escape_string($db,$_POST['phno']);
 $rno=mysqli_real_escape_string($db,$_POST['rno']);
 //$uid=mysqli_real_escape_string($db,$_POST['uid']);
 $pwd=mysqli_real_escape_string($db,$_POST['apwd']);
 $email=mysqli_real_escape_string($db,$_POST['email']);
 $course="btech";
 $hos=0;
 $yr=2;
 if(empty($name)||empty($add)||empty($session)||empty($date)||empty($sec)||empty($branch)||empty($sem)||empty($mno)||empty($rno)||empty($pwd)||empty($email)){
	 header("Location:userinfo.php?signup=error");
	 exit;
 }
 else{
	  if(!preg_match("/^[a-zA-Z]*$/",$name)||!preg_match("/^[a-zA-Z]*$/",$branch)||!preg_match("/^[a-zA-Z]*$/",$sec)||!preg_match("/^[0-9]*$/",$sem)||!preg_match("/^[0-9]*$/",$mno)||!preg_match("/^[0-9]*$/",$rno)){
		 	header("Location:userinfo.php?signup=invalid input");
		 exit();
	 }
	 else{
		 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location:userinfo.php?signup=invalid email");
		exit();
	 }
		 
		else{
			
		
			$usr= $_SESSION['login_user'] ;

$sql = "SELECT id FROM users WHERE username = '$usr' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$r = $row['id'] ;
			
			//$id=$_SESSION['id'];
			
             //   $id="SELECT id FROM users WHERE username =" . $_SESSION['login_user'] . "\"";
			//if(empty($id)){
				//header("Location:signup.php?signup=invalid id");
				//exit();
				
		//	}
			
			if(!empty($r)){
				echo $r;
			
			
			
				$sql="INSERT INTO user_info (id, name, fname, session, sem, sec, year, course, branch, dob, addr, mobno, rollno, email, ishosteller) VALUES ('$r', '$name', '--', '$session', '$sem', '$sec', '$yr', 'btech', '$branch','$date', '$add', '$mno','$rno', '$email',0) ";

                 mysqli_query($db,$sql);
				
			 header("location:edu.php");
			echo "success";
			exit();
			}
			   else{
				   header("location:userinfo.php");
				   exit();
			   }
			
                 
 
		}
		 }
	 }
 }
 
