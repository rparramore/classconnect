<!DOCTYPE html>


<html lang="en">

   <head>
      <title>SignUp</title>
   </head>
   <?php
    session_start();
   ?>
   <link rel="stylesheet" type="text/css" href="style.css">
   <body > 
   <center><h1><font size="20">ClassConnect</font></h1>  </center> 
   <h1>Sign Up</h1>
      <form method = "POST" action = "dbSignUp.php">
        <input type="number" name="id" placeholder="idnumber"><br>
        <input type="text" name="user" placeholder="username"><br>
        <input type="password" name="pwd" placeholder="password"><br>
        <button type = "submit">Create</button><br>
     
   </body>
</html>
