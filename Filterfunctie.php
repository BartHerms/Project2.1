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
        <?php include ".."; ?>
        <div class="sub-container">
            <?php include ".."; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="product-sort">
                <label for="sort">Sorteer producten</label>
                <select name="sort" id="sort">
                    <option value="Nop" <?php echo (isset($_POST['submit']) == 'Nop') ? "selected" : ""; ?>>Naam Oplopend</option>
                    <option value="Naf" <?php echo (isset($_POST['submit']) == 'Naf') ? "selected" : ""; ?>>Naam Aflopend</option>
                    <option value="Pop" <?php echo (isset($_POST['submit']) == 'Pop') ? "selected" : ""; ?>>Prijs Oplopend</option>
                    <option value="Paf" <?php echo (isset($_POST['submit']) == 'Paf') ? "selected" : ""; ?>>Prijs Aflopend</option>
                </select>
                <input type="submit" style='padding:0px; background-color: none; border:0px;' value="&#9989" name="submit">
            </form>
        </div>
</body>
</html>