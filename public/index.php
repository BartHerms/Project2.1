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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="product-sorting">
        <h2>Select one of the following products:</h2>
        <ul for="catagory" class="cata" name="cata">
            <li> <a value="Phones" href="index.php"> Phones</a> - </li> 
            <li> <a value="Computers">Computers</a> - </li>
            <li> <a value="Components">Components</a> - </li> 
            <li> <a value="Smart Watches">Smart Watches</a> - </li>
            <li> <a value="Smart Home">Smart Home</a> - </li>  
        </ul>
        <br></br>
        <h1> Found products </h1>
                <label for="sort">Sorteer producten</label>
                    <select name="sort" id="sort">
                        <option value="all" <?php echo (!isset($_POST['sort']) == 'none') ? "selected" : ""; ?>>No sort</option>
                        <option value="Nop" <?php echo (isset($_POST['sort']) == 'Nop') ? "selected" : ""; ?>>Naam Oplopend</option>
                        <option value="Naf" <?php echo (isset($_POST['sort']) == 'Naf') ? "selected" : ""; ?>>Naam Aflopend</option>
                        <option value="Pop" <?php echo (isset($_POST['sort']) == 'Pop') ? "selected" : ""; ?>>Prijs Oplopend</option>
                        <option value="Paf" <?php echo (isset($_POST['sort']) == 'Paf') ? "selected" : ""; ?>>Prijs Aflopend</option>
                    </select>
                <input type="submit" style='padding:0px; background-color: none; border:0px;' value="&#9989" name="submit">
            </form>

            <table>
            <tr>
            <th><b>product name: </b></th>
            <th><b>product price: </b></th>
            <th><b>product category: </b></th>
            </tr>

            <?php 

            if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
                if(isset($_POST['submit'])){ 

                    if(!empty($_POST['sort']) == 'none'){
                        
                        $sql = "SELECT title, price, description, category, id FROM products";
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
                    else{echo "Could not sort a product.";}

                    if(!empty($_POST['sort']) == 'Nop'){
                        $sql = "SELECT title, price, description, category, id FROM products ORDER BY title ASC"; //alfabetisch-Oplopende volgorde
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
                    else{echo "Could not sort a product.";}
                    
                    if(!empty($_POST['sort']) == 'Naf'){
                        $sql = "SELECT title, price, description, category, id FROM products ORDER BY title DESC"; //alfabetisch-Aflopende volgorde
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
                    else {echo "Could not sort a product.";} 

                    if(!empty($_POST['sort']) == 'Pop'){
                        $sql = "SELECT title, price, description, category, id FROM products ORDER BY price ASC"; //Prijs-Oplopende volgorde
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
                    else {echo "Could not sort a product.";} 

                    if(!empty($_POST['sort']) == 'Paf'){
                        $sql = "SELECT title, price, description, category, id FROM products ORDER BY prijs DESC";
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
                    else {echo "Could not sort a product.";} 
                }  
            else {
                $sql = "SELECT title, price, description, category, id FROM products";
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

    </div>
 

<!--    <table>
        <tr>
        <th><b>product name</b></th>
        <th><b>product price</b></th>
        <th><b>product category</b></th>
        </tr>

        <?php
/*
        $sql = "SELECT title, price, description, category, id FROM products";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
        mysqli_stmt_bind_result($stmt, $prodTitle, $prodPrice, $prodDescription, $prodCategory, $prodId);
        mysqli_stmt_store_result($stmt);
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
  */ 
  ?> 
  
  </table>
    -->

    <?php include_once 'footer.php' ?>
</body>

</html>

