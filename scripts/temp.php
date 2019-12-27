<?php

define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'ncw');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) ;

$sql="INSERT INTO edu (id,duration,board,percentage,degree) VALUES (11,  '2017-2021', 'kiet', '87') ";

mysqli_query($db,$sql);
				
?>				