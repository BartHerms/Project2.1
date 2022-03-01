<?php

// // $sql = "INSERT INTO `products` (`title`, `description`, `category`, `price`, `id`) VALUES ('iPhone 14', 'de iPhone', 'Phones', '1999', NULL);";
  
// if ($conn->query($sql) === TRUE) {
//     echo "record inserted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


$title =  $_REQUEST['Title'];
$description = $_REQUEST['Description'];
$category =  $_REQUEST['Category'];
$price = $_REQUEST['Price'];
  
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO 'products'  (`title`, `description`, `category`, `price`, `id`) VALUES ('$title', '$description', '$category', '$price', NULL);";
  
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
// Close connection
mysqli_close($conn);


?>