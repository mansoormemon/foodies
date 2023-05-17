
<?php

    include 'dbh.php';

    $username = $_POST['signInUsername'];
    $password = $_POST['signInPassword'];

    $sql = "SELECT PASSWORD FROM customer WHERE EMAIL = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['PASSWORD'];

        if (password_verify("$password", $hashedPassword)) {
            header("Location: session.php");
            exit;
        }

        else {
            header("Location: sign_in.php?error=invalid_credientials");
            exit;
        }
    }

    header("Location: sign_in.php?error=username_not_found");
    exit;

    mysqli_close($conn);

?>

