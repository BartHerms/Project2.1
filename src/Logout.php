<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/home.css">

</head>

<body>
    <?php include_once '../public/header.php' ?>
    You are logged out now, return to the main page?
    <ul>
        <li><a href="../public/index.php">NHL WEBSHOP</a></li>
    </ul>
    <?php include_once '../public/footer.php' ?>
</body>

</html>

<?php
session_start();
unset($_SESSION["userEmail"]);
//   unset($_SESSION["password"]);
session_destroy();
// header("location:index.php")
?>