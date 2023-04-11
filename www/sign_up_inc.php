<?php

    include 'dbh.php';
    
    // The following code is taking the email, password, contact information from the signup page.

    $email = $_POST['signUpEmail'];
    $password = $_POST['signUpPassword'];
    $contact = $_POST['signUpContact'];

    // The following code is hashing the password.

    $hashedPwInDb = password_hash("$password", PASSWORD_DEFAULT);

    // The following code is checking if there are duplicates emails in the database and the result is stored
    // in result variable.

    $sql = "SELECT EMAIL FROM customer WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $sql);

    // The following code is checking if the returned value is greater than zero. If yes then print Email is 
    // already taken.

    if (mysqli_num_rows($result) > 0){
        echo "Email is already in use";
    } // Else insert the values into the database.
    else{
        $sql = "INSERT INTO customer (EMAIL, PASSWORD, CONTACT) VALUES ('$email', '$hashedPwInDb', '$contact');";

        if (mysqli_query($conn, $sql)){
            echo "New customer has been added";
        }
    }
    // The connection is being closed at the end.
    mysqli_close($conn);
    
?>