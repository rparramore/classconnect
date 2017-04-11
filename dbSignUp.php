<?php
session_start();
$id = $_POST['id'];
$username = $_POST['user'];
$password = $_POST['pwd'];

echo "user id: $id"."<br>";
echo "username: $username"."<br>";
echo "password: $password"."<br>";

$con = mysqli_connect("localhost","root","pass","classconnect");

if ($con->connect_error)
{
  die("Connection failed: ".$con->connect_error);
}

$sql = "INSERT INTO accounts (accountId, username , password)
VALUES ($id,'$username','$password')";

if($con->query($sql) == TRUE)
{
  echo "New account successfully created";
}
else
{
  echo "Error: ".$sql. "<br>" . $con-> error;
}

?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <title>dbConnect</title>
   </head>
   <link rel="stylesheet" type="text/css" href="style.css">
   <body > 
      
      <form action = "dbConnect.php">
        
        <button>MAIN PAGE</button>
    
      </form action >

   </body>
</html>
