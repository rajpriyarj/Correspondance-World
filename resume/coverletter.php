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
	<title>resume</title>
	<link rel="stylesheet" type="text/css" href="../stylesheets/resume.css">
	</head>
<body>
	
			<div class="col-sm-9 text-center" id="right">

				<div id="page" class="droid">
					<div id="start">
					<p>Arun pratp
						<br> Resume LN<br>
						ghaziabad up
					<br>9694074361<br>
						apschauhan60@gmail.com</p>
						</div>
					<div id="sub">
					OBJECTIVE:ation for web developer senior engineer position</p>
					
					
					</div>
					
				</div>
	</div>
</body>
</html>