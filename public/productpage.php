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
        echo " <b>Product name</b> <th>"; 
        echo $prodTitle;
        echo " <br><b>Product price</b> <th>"; 
        echo $prodPrice;
      //  echo "<br>"; 
      //  echo $prodId;
        echo "<br> <b>Description</b> <th>"; 
        echo $prodDescription;
        
        if (isset($_POST['submit'])) {
            storeValues($conn, $prodId, $prodTitle, $prodPrice);
  }

  function storeValues($conn, string $prodId, string $prodTitle, string $prodPrice)
  {
    $query = "INSERT INTO cart (product_id, product_title, product_price) VALUES (
            ?,?,?
        );";

    $stmt = mysqli_prepare($conn, $query) or die(mysqli_error($conn));
    mysqli_stmt_bind_param($stmt, 'iss', $prodId, $prodTitle, $prodPrice);

    mysqli_stmt_execute($stmt) or die(mysqli_error($conn));

    mysqli_stmt_execute($stmt) or die(mysqli_error($conn));

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    echo "Product added! <br>";
  }

  ?>

    <form action="<?= htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <input type="submit" name="add to cart" value="add to cart">
    </form>

    <?php include_once 'footer.php' ?>
</body>
</html>