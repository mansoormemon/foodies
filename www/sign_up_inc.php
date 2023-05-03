<?php
    session_start();
?>
<?php
    
   include 'dbh.php';

    $email = $_POST['signUpEmail'];
    $password = $_POST['signUpPassword'];
    $contact = $_POST['signUpContact'];

    $hashedPwInDb = password_hash("$password", PASSWORD_DEFAULT);

    $sql = "SELECT EMAIL FROM customer WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        header("Location: /Foodies.com/foodies/www/sign_up.php?error=username_taken");
        exit;
    }
   
    else{
        $sql = "INSERT INTO customer (EMAIL, PASSWORD, CONTACT) VALUES ('$email', '$hashedPwInDb', '$contact');";

        if (mysqli_query($conn, $sql)){
            header("Location: /Foodies.com/foodies/www/session.php");
            exit;
        }
    }

    mysqli_close($conn);
    
?>