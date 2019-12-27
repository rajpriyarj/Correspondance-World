<?php

function month($m)
{
	switch($m)
	{
		case 1: $m = 'January' ;
					break ;
		case 2: $m = 'Febuary' ;
						break ;
		case 3: $m = 'March' ;
						break ;
		case 4: $m = 'April' ;
					break ;
		case 5: $m = 'May' ;
						break ;
		case 6: $m = 'June' ;
						break ;
		case 7: $m = 'July' ;
					break ;
		case 8: $m = 'August' ;
						break ;
		case 9: $m = 'September' ;
						break ;
		case 10: $m = 'October' ;
						break ;
		case 11: $m = 'November' ;
							break ;
		case 12: $m =  'December' ;
							break ;
	}
	return $m ;
}

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_DATABASE','ncw');
define('DB_PASSWORD','');

$db=mysqli_connect(DB_SERVER,DB_DATABASE,DB_PASSWORD,DB_USERNAME);

date_default_time_zone('Asia/Kolkata');
$date=('Y-m-d');
$parts = explode(' ', $date);
$monthnum=$parts[0];
$m=month($monthnum) ;
$pdate= $m .' '. $parts[1];

start_session();
$user=$_SESSION['login-user'];
$sql="SELECT id FROM user WHERE username='$user' ";
$result= mysql_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$r = $row['id'];
$sql="SELECT name, sem, branch, year, rollno, sec  FROM user where id='$r'";
$result=mysql_query($result,MYSQLI_ASSOC);

$name= $row['name'];
$sem= $row['sem'];
$year= $row['year'];
$branch= $row['branch'];
$rollno= $row['rollno'];

?>

<script>
	document.title="Application for 10% cap attendance";
</script>

<?php	
	include 'header.php';
?>

  <div id='main body'>
  	<div id='pbody'>
  		<p>
  		 To<br>The Coordinator<br>KIET Goup of Institution<br>Ghaziabad<br>Date: <?php echo '' .$pdate ;?><br><br> Subject: Regarding providing extra attendance of 10% cap basis.
  		</p>
  		<p class="main body">
  			Sir<br> I am <?php echo'' .$name; ?> student of <?php echo'' .$branch; ?> branch, <?php echo'' .$year ; ?> year. I am writing this to inform you that I will not be able to attend the college from <?php echo $_SESSION['pdfrom']; ?> to <?php echo $_SESSION['pdto'] ; ?> due to <?php echo $_SESSION['reason']; ?>.
  		</p>
  		<p class="main body">
  			<br>I request you to kindly provide me with extra attendance for the above said period.
  		</p>
  		<p class="main body">
  			Thanking You<br>Yours Sincerely<br>
  		</p>
  		<p class="main-body">
			<?php echo $name ; ?><br>
			( <?php echo $branch ; ?> )
			( <?php echo $year ; ?> ) <br>( <?php echo $sec ; ?> )
			( <?php echo $rno ; ?> )
		</p>
	</div>
	<div id="btn btn-default">
		<ul>
			<li><button onClick="printapp('pbody')" class="button">PRINT</li></button>
			<li><a href="/ncw/home.php" class="button">HOME</a></li>
		</ul>
	</div>		
<script>
	function printapp(divName) {
	var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].onclick = function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
		if (panel.style.maxHeight){
			panel.style.maxHeight = null;
		} else {
			panel.style.maxHeight = panel.scrollHeight + "px";
		}
	}
	}
}
</script>




