
<?php

error_reporting(0) ;

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ncw');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
session_start() ;
$usr= $_SESSION['login_user'] ;


$sql1="SELECT * FROM notice WHERE type='institute'";
$res2=mysqli_query($db,$sql1);
$r1=mysqli_fetch_array($res2,MYSQLI_ASSOC);
$d1=$r1['info'];
$sql2="SELECT * FROM notice WHERE type='department'";
$res3=mysqli_query($db,$sql2);
$r2=mysqli_fetch_array($res3,MYSQLI_ASSOC);
$d2=$r2['info'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notices</title>
	<link rel="stylesheet" type="text/css" href="stu.css">

	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	
	 <div class="row">
    <div class="col-*-*">
    	<div class="box">
    		<h1>General Notice</h1>
    		<p>
    			<ul >
				
    				<li><a href="1.php" style="top:50%; left: 35%; position: relative;">Innotech is on 1 nov</a></li>
    	<li><a href="#" style="top:50%; left: 35%; position: relative;">There wil be no classes</a></li>
    			</ul>

    		</p>

    </div>
    <div class="col-*-*">
    	<div class="box2">
    		<h1>Departmental Notice</h1>
    		<p>
    			<ul>
    		<li style="padding: 10px;"><a href="$" style="top:100%; left: 35%; position: relative;">CT will be held never.</a></li>
    	<li><a href="%" style="top:50%; left: 35%; position: relative;">There wil be no classes</a></li>
    			</ul>
    		</p>

    </div>
  </div>
</div>
	</div>
	</div>
</body>
</html>