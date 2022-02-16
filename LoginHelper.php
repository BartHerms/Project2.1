<?php session_start (); ?>
<?php include_once 'dbconnect.php' ?>
<?php include_once 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

if(isset($_REQUEST['submit']))
{
$userName = $_REQUEST['email'];
$userPassword = $_REQUEST['password'];

$res = mysqli_query("select* from registration where username='$userName'and userpassword='$userPassword'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:index.php");
}
else	
{
	header("location:login.php?err=1");
	
}
}



?>