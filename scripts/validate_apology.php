<?php
session_start() ;
error_reporting(-1);

include './../../phpmailer/index.php' ;

$_SESSION['reason'] = $_POST['reason'] ;

if(!isset($_SESSION['reason']) )
{
  unset($_SESSION['reason']) ;
	header('location: /ncw/applications/submit_applications.php') ;
}

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ncw');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$usr= $_SESSION['login_user'] ;

$sql = "SELECT id FROM users WHERE username = '$usr' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$r = $row['id'];
$sql = "SELECT branch ,email FROM user_info WHERE id = '$r'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$br = $row['branch'] ;
$t2=$row['email'];

$sql = "SELECT email FROM heads WHERE dept = '$br'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$t = $row['email'] ;

$date = date("Y-m-d H:i:s");

$sub = "Regarding Leave From College" ;
$bd = "This is to inform you that i do apologize for" . $_SESSION['reason']. " <br><a href='127.0.0.1/ncw/scripts/accept.php?tag=accept&id=". $r ."'>ACCEPT</a><br><a href='127.0.0.1/ncw/scripts/reject.php?tag=reject&id=". $r ."&from=".$t2."'>REJECT</a>"  ;
$fl = "apology_application.php" ;

email($t, $sub, $bd, $fl) ;
?>
