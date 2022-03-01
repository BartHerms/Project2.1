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
    Je bent nu uitgelogd, terug naar de hoofdpagina?
    <ul>
            <li><a href="index.php">NHL WEBSHOP</a></li>
    </ul>
</body>
</html>

<?php
session_start();
   unset($_SESSION["userEmail"]);
//   unset($_SESSION["password"]);
session_destroy();
// header("location:index.php")
?>