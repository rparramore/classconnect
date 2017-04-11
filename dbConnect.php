<!DOCTYPE html>
<html>
<body>

   <head>
      <title>dbConnect</title>
   </head>

<?php
session_start();
$user = $_POST['user'];
$pwd = $_POST['pwd'];

$con = mysqli_connect("localhost",$user,$pwd,"classconnect");
if(!$con)
{
    header("Location: login.php"); 
}
else
{
  echo "Welcome back: $user"."<br>";
  
}

$sql = "SELECT accountId, username, password From accounts";
$result = $con-> query($sql);

//printing all accounts in database
if($result -> num_rows > 0)
  while($row = $result -> fetch_assoc())
  {
    echo "id: " . $row["accountId"]. " - Name: ". $row["username"]. " - password:"." ". $row["password"]. "<br>";
  }
else
{
 echo "0 results";
}

$_SESSION['user'] = $user;
$_SESSION['pwd'] = $pwd;

?>
   <link rel="stylesheet" type="text/css" href="style.css">
   <body > 
      
      <form action = "logout.php">
        
        <button>LOG OUT</button>
    
      </form action >

      <br><br>

      <center><h2>This is a test for classConnect</h2>  </center> 
      
      <h3>Delete account by ID</h3>
      <form method = "POST" action = "dbDelete.php">
        <input type="number" name="id" placeholder="idnumber"><br>
        <button type = "submit">delete</button><br>

      
</body>
</html>