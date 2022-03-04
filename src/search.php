<?php session_start (); 
if(!isset($_SESSION["userEmail"])) ?>
<?php include_once '../src/db_products.php' ?>
<?php include_once '../src/LoginHelper.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'index.php' ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
    if(isset($_POST['search'])){
        $searched = $_POST['search'];
        if (empty($searched))
        
        echo"<table>
       <tr>
       <th><b>product name</b></th>
       <th><b>product price</b></th>
       <th><b>product category</b></th>
       </tr>";
        
        $sql = "SELECT title, price, description, category, id FROM products WHERE title = $searched"; // only select the one theat is being searched
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
        mysqli_stmt_bind_result($stmt, $prodTitle, $prodPrice, $prodDescription, $prodCategory, $prodId);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            while (mysqli_stmt_fetch($stmt)) {
                echo "<tr> 
                <th> $prodTitle</th>
                <th> $prodPrice</th>
                <th> $prodCategory</th>
                <th> <a href ='productpage.php?id=$prodId&title=$prodTitle&price=$prodPrice&description=$prodDescription'> meer info </a></th> 
                </tr>";
            }
        }
        

    } 
}

?>
</body>
</html>