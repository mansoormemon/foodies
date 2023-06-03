<?php
    session_start();

    include 'dbh.php';

    $email = $_POST['signInEmail'];
    $password = $_POST['signInPassword'];

    $sql = "SELECT PASSWORD FROM customer WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['PASSWORD'];

        if (password_verify("$password", $hashedPassword)) {
            $sql_get_cust_id = "SELECT CUSTOMER_ID FROM customer WHERE EMAIL = \"$email\";";
            $result = mysqli_query($conn, $sql_get_cust_id);
            $record = mysqli_fetch_assoc($result);
            $cust_id = $record["CUSTOMER_ID"];
            $_SESSION["CUSTOMER_ID"] = $cust_id;
            header("Location: ../index.php");
        }
        else {
            header("Location: sign_in.php?e=0");
        }
    } else {
        header("Location: sign_in.php?e=1");
    }
?>
