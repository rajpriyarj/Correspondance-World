<?php
session_start();
include 'dbh.php';

$msg=$_POST['msg'];
$name=$_SESSION['login_user'];

$sql="insert into posts(msg,name) VALUES('$msg','$name')";
$result=$conn->query($sql);

header("Location:/ncw/webchat/home.php");


?>