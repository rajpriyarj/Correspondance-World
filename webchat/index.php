<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Chat</title>
    <link rel="styleshee" href="stylesheet.css">
</head>
<body>
   <div id="main">
       <div id="info">
           <h2>Login here</h2>
           <form action="login.php" method="post">
            <label><b>Username</b></label>
            <input type="text" name="uname" placeholder="user name"><br><br>
            <label><b>Password</b></label>
            <input type="password"  name="pass" placeholder="Password">
            <br><br>
            <button style="background-color: #6495ed; color: white;" type="submit"><b>Login</b></button> 
           </form>
           
           
           <form action="signup.php" method="post">
            <h2>Dont have account sign up here</h2>
              <label>Username:</label>
              <input type="text" name="uname" placeholder="Username"><br>
              <br>
              <label>Email Add:</label>
              <input type="text" name="Email" placeholder="Email"><br><br>
              <label>Password:</label>
              <input type="text" name="Password" placeholder="Password">
              <br><br>
              <button style="background-color: #6495ed; color: white;" type="submit"><b>Signup</b></button>              
           </form>
       </div>
   </div>    
</body>
<?php
    
    ?>
</html>