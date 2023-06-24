<?php
    session_start();

   include 'dbh.php';

    $email = $_POST['signUpEmail'];
    $password = $_POST['signUpPassword'];
    $contact = $_POST['signUpContact'];

    $hashedPwInDb = password_hash("$password", PASSWORD_DEFAULT);

    $sql = "SELECT EMAIL FROM customer WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: sign_up.php?e=0");
    }
    else {
        $sql = "INSERT INTO customer (EMAIL, PASSWORD, CONTACT) VALUES ('$email', '$hashedPwInDb', '$contact');";

        if (mysqli_query($conn, $sql)){
            $sql_get_cust_id = "SELECT CUSTOMER_ID FROM customer WHERE EMAIL = \"$email\";";
            $result = mysqli_query($conn, $sql_get_cust_id);
            $record = mysqli_fetch_assoc($result);
            $cust_id = $record["CUSTOMER_ID"];
            $_SESSION["CUSTOMER_ID"] = $cust_id;
            
            header("Location: ../index.php");
        }
    }
?>
