<?php include_once '../src/db_products.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHL Webshop Account</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <h1>Add Product</h1>

    <form action="../src/addproduct.php" method="post">
        <p>
            <label for="Title">Title:</label>
            <input type="text" name="Title" id="Title">
        </p>
        <p>
            <label for="Description">Description:</label>
            <input type="text" name="Description" id="Description">
        </p>
        <p>
            <label for="Category">Category:</label>
            <input type="text" name="Category" id="Category">
        </p>
        <p>
            <label for="Price">Price:</label>
            <input type="text" name="Price" id="Price">
        </p>
        <input type="submit" value="Submit">


        <?php include_once 'footer.php' ?>
</body>

</html>