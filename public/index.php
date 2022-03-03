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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="product-sort">
            <h1> Found products </h1>
                <label for="sort">Sorteer producten</label>
                <select name="sort" id="sort">
                    <option value="all" <?php echo (!isset($_POST['sort']) == 'all') ? "selected" : ""; ?>>Alle Producten</option>
                    <option value="Nop" <?php echo (isset($_POST['sort']) == 'Nop') ? "selected" : ""; ?>>Naam Oplopend</option>
                    <option value="Naf" <?php echo (isset($_POST['sort']) == 'Naf') ? "selected" : ""; ?>>Naam Aflopend</option>
                    <option value="Pop" <?php echo (isset($_POST['sort']) == 'Pop') ? "selected" : ""; ?>>Prijs Oplopend</option>
                    <option value="Paf" <?php echo (isset($_POST['sort']) == 'Paf') ? "selected" : ""; ?>>Prijs Aflopend</option>
                </select>
                <input type="submit" style='padding:0px; background-color: none; border:0px;' value="&#9989" name="submit">
            </form>

            <?php 

            if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
                if(!empty($_POST['sort'])){

                    if(!empty($_POST['sort']) == 'all'){
                    echo"Alle producten ";
                    }
                    else{echo "test";}

                    if(!empty($_POST['sort']) == 'Nop'){
                        echo"alfabetisch-Oplopende volgorde ";
                    }
                    else{echo "";}
                    
                    if(!empty($_POST['sort']) == 'Naf'){
                        echo"alfabetisch-Aflopende volgorde ";
                    }
                    else {echo "";} 

                    if(!empty($_POST['sort']) == 'Pop'){
                        echo"Prijs-Oplopende volgorde ";
                    }
                    else {echo "";} 

                    if(!empty($_POST['sort']) == 'Paf'){
                        echo"Prijs-aflopende volgorde ";
                    }
                    else {echo "";} 
                }
                else
                { 
                echo "ALLE";
                } 
            }
            else {echo "No post done yet";}
            ?>
        </div>
        <?php /*if (mysqli_stmt_num_rows($statement) > 0): */?>
    </div>


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