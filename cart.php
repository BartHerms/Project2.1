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
<h1>cart</h1>
    <table>
            <th>Product name</th>
            <th>Amount</th>
            <th>Price</th>
    </table>
    <?php fetchValues($conn); ?>
</body>
</html>

<?php
function fetchValues($conn)
{
    $sql = "SELECT product_name, product_price, product_amount FROM products";
    $stmt = mysqli_prepare($conn, $sql) or die(mysqli_error($conn));

    mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
    mysqli_stmt_bind_result($stmt, $prodName, $prodPrice, $prodAmount);
    
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        while (mysqli_stmt_fetch($stmt)) {
            echo '
            <tr>
            <th>'.$prodName.'</th>
            <th>'.$prodPrice.'</th>
            <th>'.$prodAmount.'</th>
            <th><a href="editAmount.php?id='.$prodAmount.'"> Link</a></th>
            </tr>';
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>