<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
</head>
<body>
<div class="container">
        <!-- <?php include "header"; ?> -->
        <div class="sub-container">
            <!-- <?php include "container"; ?> -->

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="product-sort">
            <h2> Found products </h2>
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
        </div>
</body>
</html>