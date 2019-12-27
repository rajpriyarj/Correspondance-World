<?php
session_start();
error_reporting(0) ;
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ncw');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$usr= $_SESSION['login_user'] ;
$sql = "SELECT isadmin,details FROM users WHERE username = '$usr' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$r = $row['isadmin'] ;
$q =$row['details'];
echo '<input id="hvalue" type="hidden" value="'.$ishostel.'">' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>cw</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="/ncw/stylesheets/hhh.css">
	<link rel="stylesheet" href="webchat.css">
	<link rel="stylesheet" href="/ncw/stylesheets/common.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

	<link href='https://fonts.googleapis.com/css?family=Galindo' rel='stylesheet'>
</head>
<body>

	<div class="containerr">
		
			<h1>CORRESPONDANCE WORLD</h1>
			<p>We Create to make your life easy...</p>
			

  <header>
   <div class="logo">
	  			<img src="/ncw/images/logo.png">

	  </div>
    <nav>
    
      <ul>
        <li><a href="/ncw/home.php" class="active">Home</a> </li>
        <li><a href="#" class="sub-menu">Applications</a>
        <ul>
          <li><a href="/ncw/applications/submit_applications.php">Submit Applicatins</a></li>
           <li><a href="/ncw/applications/view_applications.php">View Applicatins</a></li>

        </ul>
      </li>
 
    
        <li><a href="/ncw/Food Canteen/index.php" >Canteen</a> </li>
	
       
		
         <li><a href="/ncw/notices/not.php">Notices</a>
       
      </li>
       
       
			<li><a href="/ncw/forms/all-forms.php">forms</a></li>
       	
       
		  
        <li><a href="#" class="sub-menu">Resume </a>
        <ul>
           <li><a href="/ncw/resume/resume.php">Resume</a></li>
            <li><a href="/ncw/resume/coverletter.php">Cover letter</a></li>

        </ul>
      </li>
			 <li><a href="#" >Chat Box</a>
                    <ul>
                        <form action="/ncw/webchat/home.php" method="post">
                        <li><input type="text" placeholder="Chat With" name="cwn" required></li>
                        <input type="Submit" name="sum">    
                        </form>
                    </ul>
		  </li>
			    <li><a href="/ncw/team/team.php">About us</a></li>
		  <li><a href="/ncw/scripts/logout.php">Log out</a></li>
      </ul>
    </nav>
    <div class="menu-toggle"><i class="fa fa-bars" aria-hiden="true"></i></div>
  </header>
	</div>
