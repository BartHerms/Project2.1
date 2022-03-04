<?php session_start (); 
if(!isset($_SESSION["userEmail"])) ?>
<?php include_once '../src/db_products.php' ?>
<?php include_once '../src/LoginHelper.php' ?>
<?php include_once 'header.php' ?>

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
<?php
        $prodId=$_GET["id"];
        $prodTitle=$_GET["title"];
        $prodPrice=$_GET["price"];
        $prodDescription=$_GET["description"];
      //  echo "src='productpage.php/$prodId'";
        echo $prodTitle;
        echo "<br>"; 
        echo $prodPrice;
        echo "<br>"; 
        echo $prodId;
        echo "<br>"; 
        echo $prodDescription;
        


    ?>
    <?php include_once 'footer.php' ?>
</body>
</html>