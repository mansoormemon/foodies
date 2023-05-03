<?php

    include 'dbh.php';

    

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'"
    $result = mysqli_query($conn, $sql);



?>