<?php
error_reporting(1);
session_start();
include("dbh.php");
if(isset($_POST["sum"]))
{   
    $u=$_POST['cwn'];
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div id="main">
        <h1 style="background-color: #6495ed;color: white;">
            <?php echo $_SESSION['login_user'];  ?> -online</h1>
        <!--<form action="home.php" method="post">
            <input id="chat_user" type="text" placeholder="Chat With" name="cwn">
            <input type="submit" value="Submit" name="sum">            
        </form>-->
        <div id="msg_out" class="output">
            <?php $sql = "SELECT * from posts WHERE name=\"".$u."\" OR name=\"".$_SESSION['login_user']. "\"";
           $result = $conn->query($sql);
           if($result->num_rows >0 )
           {//output data of each row
               while($row = $result->fetch_assoc()){
                   echo "" . $row["name"]." ".":: " . $row["msg"]."--".$row["date"]. "<br>";
                   echo "<br>";
               }               
}else {
               echo " 0 results";
           }
           
           ?>
        </div>
        <form method="post" action="/ncw/webchat/send.php">
            <textarea name="msg" placeholder="Type to send message....." class="form-control"></textarea><br>
            <input type="submit" value="Send">
        </form>

        <br>
        <button><a href="/ncw/scripts/logout.php">Logout</a></button>


    </div>


</body>

</html>
