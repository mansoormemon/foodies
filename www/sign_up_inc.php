<?php
    session_start();

   include 'dbh.php';

    $email = $_POST['signUpEmail'];
    $password = $_POST['signUpPassword'];
    $contact = $_POST['signUpContact'];

    $sql = "SELECT EMAIL FROM customer WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: sign_up.php?e=0");
    }
    else {
        $sql = "INSERT INTO customer (EMAIL, PASSCODE) VALUES ('$email', '$password');";
        
        if (mysqli_query($conn, $sql)){
            $sql_get_cust_id = "SELECT CUSTOMER_ID FROM customer WHERE EMAIL = \"$email\";";
            $result = mysqli_query($conn, $sql_get_cust_id);
            $record = mysqli_fetch_assoc($result);
            $cust_id = $record["CUSTOMER_ID"];
            $sql1 = "INSERT INTO customerphone (CUSTOMER_ID, PHONE_NO) VALUES ('$cust_id', '$contact');";
            $result1 = mysqli_query($conn, $sql1);
            $_SESSION["CUSTOMER_ID"] = $cust_id;
            
            header("Location: ../index.php");
        }
    }
?>


