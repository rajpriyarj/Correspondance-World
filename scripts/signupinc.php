<?php

if(isset($_POST['submit']))
{

  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'ncw');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
 $username=mysqli_real_escape_string($db,$_POST['uname']);
 $psw=mysqli_real_escape_string($db,$_POST['pass']);
	$psw2=mysqli_real_escape_string($db,$_POST['pass2']);
	 if(empty($username)||empty($psw)||empty($psw2)){
	header("Location:signup.php?signup=empty");
	 exit;
 }
	else{
		$sql1="SELECT *FROM user WHERE username='$username'";
		$result=mysqli_query($db,$sql1);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck>0){
				header("Location:signup.php?signup=usertaken");
			exit();
		}
		else{
			if($psw==$psw2)
			{
				$hashed=md5($psw);
				
			   $sql2="INSERT INTO user (username,password) values('$username','$hashed')";
			mysqli_query($db,$sql2);
				header("Location:../index.php?signup=success");
			echo "success";
			exit();
			}
		}
	}
}

