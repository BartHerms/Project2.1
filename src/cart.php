<?php session_start();
if (!isset($_SESSION["userEmail"]))

    // header("location:index.php");
    // echo $_SESSION["login"];
?>
<?php include_once '../src/db_products.php' ?>
<?php include_once '../src/LoginHelper.php' ?>

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
    <h1>Cart</h1>
    <table>
        <th>Product name</th>
       <!-- <th>Amount</th> -->
        <th>Price</th>
    </table>
    <?php include_once '../public/footer.php' ?>
    <?php fetchValues($conn); ?>
    
</body>

</html>


<?php

// kart geeft voor nu alle producten weer, niet degene die aan users gekoppeld zijn

function fetchValues($conn)
{
    $sql = "SELECT title, price FROM products";
    $stmt = mysqli_prepare($conn, $sql) or die(mysqli_error($conn));
    mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
    mysqli_stmt_bind_result($stmt, $prodName, $prodPrice);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        while (mysqli_stmt_fetch($stmt)) {
           
            echo '
            <tr>
            <th>' . $prodName . '</th>
            <th>' . $prodPrice . '</th>
            <br> </br>
            </tr>';
        }
    }
    // echo $prodTotal;
   // mysqli_stmt_close($stmt);
   // mysqli_close($conn);
}

{
    $sql2 = "SELECT sum(price) FROM products";
    $stmt = mysqli_prepare($conn, $sql2) or die(mysqli_error($conn));
    mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
    mysqli_stmt_bind_result($stmt, $prodTotal);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        while (mysqli_stmt_fetch($stmt)) {
           
            echo '
            <tr>
            <th> total </th>
            <th>' . $prodTotal . '</th>
            <br> </br>
            </tr>';
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


?>

<!-- <th>' . $prodAmount . '</th>
    <th><a href="editAmount.php?id=' . $prodAmount . '"> Link</a></th> -->

    