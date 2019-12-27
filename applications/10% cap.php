<?php
error_reporting(0);
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','ncw');

$db=mysqli_connect(DB_DATABASE,DB_PASSWORD,DB_USERNAME,DB_SERVER);

$val= $_GET['tag'];
$user= $_GET['id'];

$date= date("Y-m-d H-i-s");

if($val=='accept')
{
	$sql="INSERT into new_records VALUES('','$user','$date','ACCEPT','ACCEPTED');";
	if($db->query($sql)==true)
	{
		$mail='harsh.1631066@kiet.edu';
		$subject='Application acceted';
		$content='Your application has been accepted on'.$date;
		$f1=0;
		emailn($mail,$subject,$content,$f1);
	}
	else
	{
      echo 'Application not considered' ;
	}
}

?>
