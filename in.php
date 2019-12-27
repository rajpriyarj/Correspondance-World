rror_reporting(-1) ;
?>

<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/dxhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>CW : LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./stylesheets/header.css">
	<link rel="stylesheet" type="text/css" href="./stylesheets/login.css">
	<link rel="stylesheet" type="text/css" href="./stylesheets/footer.css">
	<link href="https://fonts.googleapis.com/css?family=Kalam:700" rel="stylesheet">
</head>
<body>
	<!-- CORRESPONDANCE PORTAL -->
	<div id="container">
		<div class="head-logo" align="center">
			<img src="./images/logo.png">
			<span><h1>CORRESPONDANCE WORLD</h1></span>
		</div><div class="box">	
			<form action="./scripts/login.php" method="POST">
				<table>
					<tr>
						<th><input onfocus="shadowon(this)" onblur="shadowoff(this)" class="logdiv" type="text" name="uname" placeholder="USERNAME" autocomplete="off"></th>
					</tr>
					<tr>
						<th><input onfocus="shadowon(this)" onblur="shadowoff(this)" class="logdiv" type="password" name="passwd" placeholder="PASSWORD"></th>
					</tr>
					<tr>
						<th><button class="logdiv">LOGIN</button></th>
				
					</tr>
					<tr>
						<th><button type="submit" class="logdiv" class="one"><a  href="scripts/signup.php">REGISTER</a></button></th>
					</tr>
				</table>
			</form>
			</div>
	</div>
	</body>
</html>