<!DOCTYPE html>
<html>
<body>

   <head>
      <title>dbDelete</title>
   </head>

<?php
session_start();
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$id = $_POST['id'];

$con = mysqli_connect("localhost","root","pass","classconnect");
if(!$con)
{
    header("Location: login.php"); 
}

$sql = "DELETE FROM accounts WHERE id = $id";

if( $con -> query($sql) == TRUE )
{
  echo "Record successfully deleted";
} 
else
{
  echo "error deleting record";
} 


$_SESSION['user'] = $user;
$_SESSION['pwd'] = $pwd;
header("Location: dbConnect.php");
?>
   
      
</body>
</html>