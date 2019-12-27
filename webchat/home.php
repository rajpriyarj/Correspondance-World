<?php
error_reporting(1);
session_start();
include("dbh.php");
if(isset($_POST["sum"]))
{   
    $_SESSION['u']=$_POST['cwn'];
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="ho.css">

    <style>

        *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
body{
    background-image: url(chatimg.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    
    
}
.chatbox{
    border: 1px solid red;
    width: 500px;
    min-width: 390px;
    background-image: url(chatBB.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 25px;
    margin: 20px  auto;
    box-shadow: 0 3px #ccc;
    
}
.chatlogs {
    padding: 10px;
    width: 100%;
    height: 450px;
    overflow-x: hidden;
    overflow-y: scroll;
    
}
.chatlogs:: -webkit-sacrollbar {
    width: 10px;
}
.chatlogs:: -webkit-scrollbar-thumb{
    border-radius: 5px;
    background: rgba(0,0,0,.1);
}
.chat{
    display: flex;
    flex-flow: row wrap;
    align-items: flex-start;
    margin-bottom: 10px;
    
}
.chat .user-photo{
    width: 60px;
    height: 60px;
    background: #ccc;
    border-radius: 50%;
    
}
.chat .chat-message{
    width: 80%;
    padding: 15px;
    margin: 5px 10px 0;
    border-radius: 10px;
    font-size: 20px;   
}
.friend .chat-message{
    background: #1adda4;
    
}
.self .chat-message{
    background: #E2FFCA;
    order: -1;
    
}
.chat-form{
margin-top: 20px;
    display: flex;
    align-items: flex-start;
}
.chat-form textarea{
    background:#fbfbfb;
    width: 75%;
    height: 50px;
    border: 2px solid #eee;
    border-radius: 3px;
    resize: none;
    padding: 10px;
    font-size: 18px;
    color: #333;
    
}
.chat-form textarea:focus{
    background: #fff;
}

.chat-form textarea:: -webkit-sacrollbar {
    width: 10px;
}
.chat-form textarea:: -webkit-scrollbar-thumb{
    border-radius: 5px;
    background: rgba(0,0,0,.1);
}

input[type="submit"]{
    background: #283142;
    padding: 5px 15px;
    font-size: 30px;
    color: #fff;
    border: none;
    margin: 0 10px;
    border-radius: 3px;
    box-shadow: 0 3px 0 #283142;
    cursor: pointer;
    -webkit-transition:background .2s ease;
    -moz-transition: background .2 ease;
    -o-transition: background .2ease;
}
input[type="submit"]:hover{
    background: #13c8d9;
}

    </style>
</head>

<body>
    <div class="chatbox">
        <div class="chatlogs">
            <?php $sql = "SELECT * from posts WHERE name=\"".$_SESSION['u']."\" OR name=\"".$_SESSION['login_user']. "\"";
           $result = $conn->query($sql);
           if($result->num_rows >0 )
           {//output data of each row
               while($row = $result->fetch_assoc()){
                   
                    if($_SESSION['login_user']== $row["name"])
                   {
                    echo "<div class=\"chat self\">";
                    echo "<div class=\"user-photo\"></div>";
                    echo "<p class=\"chat-message\" >" . $row["msg"]."-".$row["date"]. "</p>";
                   
                     echo "</div>";
                   }
                   else{
                       echo "<div class=\"chat friend\">";
                       echo "<div class=\"user-photo\"></div>";
                       echo "<p class=\"chat-message\">" . $row["msg"]."--".$row["date"]. "</p>";
                       echo "</div>";
                       
                   }
               }               
}        else{
               echo " 0 results";
           }
           
           ?>
        </div>
        <form method="post" action="/ncw/webchat/send.php">
            <div class="chat-form">
                <textarea name="msg" id="" cols="30" rows="10" required></textarea>
                <input type="submit" value="Send">
            </div>
        </form>
        <br>
        <button><a href="/ncw/home.php">Back</a></button>


    </div>


</body>

</html>
