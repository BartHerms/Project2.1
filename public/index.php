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
    <title>NHL Webshop</title>
    <link rel="stylesheet" href="../assets/css/home.css">
</head>

<body>
    <?php include_once 'header.php' ?>

    <h1> Found Products </h1>

    <?php include_once 'footer.php' ?>
    <?php fetchValues($conn); ?>
</body>

</html>

<?php
function fetchValues($conn)
{
    $sql = "SELECT title, description, category, price FROM products";
    $stmt = mysqli_prepare($conn, $sql) or die(mysqli_error($conn));
    mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
    mysqli_stmt_bind_result($stmt, $prodName, $prodDescription, $prodCategory, $prodPrice);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        while (mysqli_stmt_fetch($stmt)) {
           
            echo '
            <tr>
            <th>' . $prodName . '</th>
            <th>' . $prodDescription . '</th>
            <th>' . $prodCategory . '</th>
            <th>' . $prodPrice . '</th>
            <br> </br>
            </tr>';
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>