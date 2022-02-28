<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searchbar</title>
</head>
    <body>
    <form action="Zoek.php" method="POST">
        <input type="text" name="Search" placeholder="Search:" value="">
    </form>
    </body>

    <?php
        //$itemname= 
        $search = $_POST['Search'];

//        if($search = $itemname){
//    
//         }


    if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
        if(!empty($_POST['Search']))
        {
        
        echo "$search";
        }
        else {echo"";}
    }
    ?>

</html>