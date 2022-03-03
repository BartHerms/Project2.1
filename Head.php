<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/Style.css"/>
    <title>Searchbar</title>
</head>
    <body>
    <div class="Head">
        <form action="Zoek.php" method="POST">
            <input class="Zoek" type="text" name="Search" placeholder="Search:" value="">
        </form>
    </div>
    </body>

    <?php
        //$itemname= 
        $search = $_POST['Search'];

        $servername = "localhost";
        $itemname = "item";
        $price="$200,-";

        $conn = new mysqli($servername, $itemname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        else{
            Echo "connection complete";
        }
        //        if($search = $itemname){
//    
//         }


    if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
        if(!empty($_POST['Search']))
        {
        
            echo "
            <div class= itembox>
                <div class= item>
                    <img src= /img/phone.png, alt='Phone'>
                    <h1>{$price}</h1>
                </div>
            <div>
            ";
        }
        else echo "Error";
    }
    ?>

</html>