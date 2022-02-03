<?php
    $dbServername = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "webshop";

    $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName) OR DIE("Could not connect to the database.");
?>