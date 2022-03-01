<?php session_start (); 
if(!isset($_SESSION["userEmail"]))

// header("location:index.php");
// echo $_SESSION["login"];
?>
<?php include_once 'dbconnect.php' ?>
<?php include_once 'LoginHelper.php' ?>
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
<h1>Hey ! welcome to main page .</h1>
</body>
</html>

<?php
 
?>

