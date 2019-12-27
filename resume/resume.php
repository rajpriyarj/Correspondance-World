
<?php
session_start();
if(!isset($_SESSION['login_user'])){
	header("location:../index.php");
	exit();
}
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ncw');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$usr= $_SESSION['login_user'] ;
$sql = "SELECT id FROM user WHERE username = '$usr' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$r = $row['id'] ;
$sql = "SELECT name, sem, year, rollno, branch, sec FROM user_infos WHERE id = '$r'";
$sql2="SELECT duration,board,percentage,degree FROM edu WHERE id='$r'";
$sql3="SELECT duration,board,percentage,degree FROM edu10 WHERE id='$r'";
$sql4="SELECT duration,board,percentage,degree FROM edu12 WHERE id='$r'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$name = $row['name'] ;
$sem = $row['sem'] ;
$year = $row['year'] ;
$rno = $row['rollno'] ;
$branch = $row['branch'] ;
$sec = $row['sec'] ;

$result2=mysqli_query($db,$sql2);
$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
$board=$row2['board'];
$degree=$row2['degree'];
$per=$row2['percentage'];
$duration=$row2['duration'];

$result3=mysqli_query($db,$sql3);
$row3=mysqli_fetch_array($result3,MYSQLI_ASSOC);
$board2=$row3['board'];
$degree2=$row3['degree'];
$per2=$row3['percentage'];
$duration2=$row3['duration'];

$result4=mysqli_query($db,$sql4);
$row4=mysqli_fetch_array($result4,MYSQLI_ASSOC);
$board3=$row4['board'];
$degree3=$row4['degree'];
$per3=$row4['percentage'];
$duration3=$row4['duration'];
$link = "/ncw/images/". $usr . ".jpg" ;

?>
<html>
<head>

	<title>resume</title>
	<link rel="stylesheet" type="text/css" href="../stylesheets/resume.css">
	<link rel="stylesheet" type="text/css" href="../stylesheets/bootstrap.min.css">
	</head>
<body>
<button><a href="#" onclick="HTMLtoPDF()"><img src="download.png"></a></button>
	
			<div id="HTMLtoPDF">
				<div class="col-lg-12 col-sm-1 text-center" id="right">

				<div id="page" class="droid">

					<div class="row" style="margin-bottom:10px;">
						<div class="ar">
							<div style="display:inline-block;" id="image_box">
								<img src="<?php echo $link?>" height="80" width="80">
							</div>
							<div id="info" style="display:inline-block;">
								<h2 id="contentName">Student Name:<?php echo ''.$name; ?></h2>
								<h5 id="contentRoll">Roll Number :<?php echo ''.$rno;?></h5>
								<h5 id="contentCourse">B.Tech -  Engineering</h5>
								<h5><?php echo ''.$branch;?> Engineering</h5>
								<h5 id="contentCollege">K.I.E.T GROUP OF INSTITUTIONS</h5>
							</div>
							
						</div>
					</div>


					<div class="section" id="sectionEducation">
						<div class="section-title ruled rule-above">
							<hr class="hr-above">
							<h4><strong>Education</strong></h4>
							<hr class="hr-below">
						</div>
						<ul class="nobullet">
							<li>
								<table class="table customBordered" id="educationTable">
									<tr>
										<td class="header"><strong>Year</strong></td>
										<td class="header"><strong>Degree / Certificate</strong></td>
										<td class="header"><strong>Institute / Board</strong></td>
										<td class="header"><strong>CGPA/Percentage</strong></td>
									</tr>
									<tr>
										<td><?php echo''.$duration;?></td>
										<td><?php echo ''.$degree;?></td>
										<td><?php echo ''.$board;?></td>
										<td><?php echo ''.$per;?></td>
									</tr>
									<tr>
										<td><?php echo''.$duration3;?></td>
										<td><?php echo ''.$degree3;?></td>
										<td><?php echo ''.$board3;?></td>
										<td><?php echo ''.$per3;?></td>
									</tr>
									<tr>
										<td><?php echo''.$duration2;?></td>
										<td><?php echo ''.$degree2;?></td>
										<td><?php echo ''.$board2;?></td>
										<td><?php echo ''.$per2;?></td>
									</tr>
								</table>
							</li>
						</ul>
					</div>





					<div class="section" id="sectionProjects">
						<div class="section-title ruled rule-above">
							<hr class="hr-above">
							<h4><strong>Projects</strong></h4>
							<hr class="hr-below">
						</div>
						<ul>
							<li>
								<div>
									<div class="title">Project title</div>
									<div class="time right">Ongoing</div>
								</div>
								<div>
									<div class="mentor tab">Project Mentor</div>
								</div>
								<div>
									<div class="text">Graphical interface to share files over institute's network.</div>
								</div>
							</li>
							<li>
								<div>
									<div class="title">Project title</div>
									<div class="time right">Apr 2016</div>
								</div>
								<div>
									<div class="mentor tab">project mentor</div>
									<div class="link right">goo.gl/link</div>
								</div>
								<div>
									<div class="text">Graphical interface to share files over institute's network.</div>
								</div>
							</li>
							<li>
								<div>
									<div class="title">Project title</div>
									<div class="time right">Jan 2016 - Mar 2016</div>
								</div>
								<div>
									<div class="mentor tab">Mentor name</div>
									<div class="link right">www.xyz.in</div>
								</div>
								<div>
									<div class="text">Graphical interface to share files over institute's network.</div>
								</div>
							</li>
							<li>
								<div>
									<div class="title">Project title</div>
									<div class="time right">Feb 2016</div>
								</div>
								<div>
									<div class="link right">goo.gl/link</div>
								</div>
								<div>
									<div class="text">Graphical interface to share files over institute's network.</div>
								</div>
							</li>
							<li>
								<div>
									<div class="title">Project title</div>
									<div class="time right">Nov 2015</div>
								</div>
								<div>
									<div class="mentor tab">Mentor name</div>
									<div class="link right">github.com/link</div>
								</div>
								<div>
									<div class="text">Graphical interface to share files over institute's network.</div>
								</div>
							</li>
							<li>
								<div>
									<div class="title">Project title</div>
									<div class="time right">Aug 2015 - Sep 2015</div>
								</div>
								<div>
									<div class="text">Graphical interface to share files over institute's network.</div>
								</div>
							</li>
						</ul>
					</div>


					<div class="section" id="sectionSkills">
						<div class="section-title ruled rule-above">
							<hr class="hr-above">
							<h4><strong>Technical skills</strong></h4>
							<hr class="hr-below">
						</div>
						<ul>
							<li>
								<strong><span class="skillCategory">Programming languages</span> :</strong> C++, Python, Java *
							</li>
							<li>
								<strong><span class="skillCategory">Web technologies</span> :</strong> HTML, CSS, Javascript
							</li>
							<li>
								<strong><span class="skillCategory">Database management</span> :</strong> mySQL
							</li>
							<li>
								<strong><span class="skillCategory">Miscellaneous</span> :</strong> Android programming *
							</li>
							<li>
								<strong><span class="skillCategory">Operating system</span> :</strong> Windows, Linux
							</li>
							
						</ul>
					</div>


					<div class="section" id="sectionResponsibility">
						<div class="section-title ruled rule-above">
							<hr class="hr-above">
							<h4><strong>Positions of Responsibility</strong></h4>
							<hr class="hr-below">
						</div>
						<ul>
							<li>XYZ Head, ABC 2018</li>
							<li>school prefect 2016</li>
						</ul>
					</div>


					<div class="section" id="sectionAchievements">
						<div class="section-title ruled rule-above">
							<hr class="hr-above">
							<h4><strong>Achievements</strong></h4>
							<hr class="hr-below">
						</div>
						<ul>
							<li>
								<span class="title">ABC contest 2016 : </span>
								<span class="text">Secured 1st position in the National level contest.</span>
							</li>
							<li>
								<span class="title">ABC contest : </span>
								<span class="text">Secured All India Rank 1 among 0.15 million candidates appearing for the test.</span>
							</li>
							<li>
								<span class="title">KVPY 2013-14 : </span>
								<span class="text">Obtained the National research fellowship scholarship by securing a position in top 1%.</span>
							</li>
							<li>
								<span class="title">ABC Olympiad 2014 : </span>
								<span class="text">Qualified for the international stage by securing top position in following stages :</span>
								<ul class="decimal">
									<li>Qualifiers stage : Bagged 20th position among 5000 candidates.</li>
									<li>National level : Bagged 7th position among 250 candidates.</li>
								</ul>
							</li>
						</ul>
					</div>


					<div class="section" id="sectionCourses">
						<div class="section-title ruled rule-above">
							<hr class="hr-above">
							<h4><strong>Key courses taken</strong></h4>
							<hr class="hr-below">
						</div>
						<ul>
							<div class="row">
								<div class="col-sm-6">
									<li>Computer lab</li>
									<li>Process design</li>
									<li>Statistics *</li>
								</div>
								<div class="col-sm-6">
									<li>Advanced calculus</li>
									<li>XYZ architecture *</li>
									<li>ABC lab *</li>
								</div>
							</div>
					
						</ul>
					</div>


					<div class="section" id="sectionCurricular">
						<div class="section-title ruled rule-above">
							<hr class="hr-above">
							<h4><strong>Extracurriculars</strong></h4>
							<hr class="hr-below">
						</div>
						<ul>
							<li>
								<span class="title">ABC workshop : </span>
								<span class="text">Attended a 3-day workshop on Image sensing satellute development.</span>
							</li>
							<li>
								<span class="title">ABC contest 2016 : </span>
								<span class="text">Secured 1st position in the National level contest.</span>
							</li>
						</ul>
					</div>


					<div class="section" id="sectionInterest">
						<div class="section-title ruled rule-above">
							<hr class="hr-above">
							<h4><strong>Fields of interest (OR Research interests)</strong></h4>
							<hr class="hr-below">
						</div>
						<ul>
							<div class="row">
								<div class="col-sm-6">
									<li>Advanced XYZ</li>
									<li>ABC design</li>
								</div>
								<div class="col-sm-6">
									<li>XYZ processing</li>
									<li>Robotics</li>
								</div>
							</div>
						</ul>
					</div>
					</div>
					
	



					<script type="text/javascript" src="../scripts/jquery.min.js"></script>
	<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	<script src="jspdf.js">
					</script>
					<script src="pdfFromHTML.js"></script>
	<script>
		
			document.querySelector('#sectionProjects').contentEditable = true;	
		document.querySelector('#sectionResponsibility').contentEditable=true;
		document.querySelector('#sectionAchievements').contentEditable = true;	
		document.querySelector('#sectionCourses').contentEditable = true;	
		document.querySelector('#sectionCurricular').contentEditable = true;	
		document.querySelector('#sectionInterest').contentEditable = true;	
		document.querySelector('#sectionSkills').contentEditable = true;
		
	//	document.querySelector('#sectionEducation').contentEditable=true;
					</script>


				</div>

			</div>

	
	</body>
</html>