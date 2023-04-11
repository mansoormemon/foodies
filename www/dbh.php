<?php
    // The following is the code where the connection is made with the database.

    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassowrd = "";
    $dbName = "foodies";

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassowrd, $dbName);
?>