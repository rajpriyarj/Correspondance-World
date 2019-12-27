<?php

*error_reporting(0) ;

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
$d2=$r2['info'];*/
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/ncw/stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="/ncw/stylesheets/sti.css">
	<title></title>
</head>
<body>
<a href="#" id="myBtn" class="butn"><svg><rect></rect></svg> General</a>

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>General Notices</h2>
    </div>
    <div class="modal-body">
      <p id="not">Innotech is on 2nd November</p>
    </div>
    </div>

</div>
<a href="#" id="mybtn" class="but"><svg><rect></rect></svg> Departmental</a>
<div id="myModals" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="closed">&times;</span>
      <h2>Departmental Notices</h2>
    </div>
    <div class="modal-body">
      <p id="not1">Screening for Innotech of IT-DEPT. on 8th October</p>
<!--      <p>Stay Tuned...</p>-->
    </div>
    </div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modals = document.getElementById('myModals');

// Get the button that opens the modal
var btns = document.getElementById("mybtn");

// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("closed")[0];

// When the user clicks the button, open the modal 
btns.onclick = function() {
    modals.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spans.onclick = function() {
    modals.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modals) {
        modals.style.display = "none";
    }
}
document.getElementById("not").onclick = function(){
	window.location.href = "resume/ng.php" ;
	document.getElementById("not1").onclick = function(){
	window.location.href = "resume/dg.php" ;
}

	</script>
	</div>
</body>
</html>