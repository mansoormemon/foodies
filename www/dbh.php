<?php
    // The following is the code where the connection is made with the database.

    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassowrd = "toor";
    $dbName = "foodies";

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassowrd, $dbName);
?>
