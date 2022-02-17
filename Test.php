<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>

<a href="../Basiswiskunde/opdr1 BMI.php?var=test">Klik hier!</a>
    
</body>
</html>

<?php
if(isset($_GET['var'])) {
   if($_GET["var"] == "test") {
      echo "Hier de tekst die je wilt.";
   }
}
else {
    echo"error";
}
?>