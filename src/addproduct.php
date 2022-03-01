<?php
include_once '../src/db_products.php';

// Zorg ervoor dat je hier check wat de gebruiker invoert refereer naar registration van project 2.
// Myflix -> src/registration.php sanitize de input.
$title =  $_POST['Title'];
$description = $_POST['Description'];
$category =  $_POST['Category'];
$price = $_POST['Price'];

$sql = "INSERT INTO products  (title, description, category, price) VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);  

// Check if the bindparam or the execute fails if it does let the program die.
if (!mysqli_stmt_bind_param($stmt, "sssi", $title, $description, $category, $price) ||
!mysqli_stmt_execute($stmt)) {
die("Something went wrong with preparing the statement \n" . mysqli_error($conn));
}
  
// Close connection both stmt and the main connetion.
mysqli_stmt_close($stmt);
mysqli_close($conn);

header("Location:../public/admin.php?addProduct=true")


?>