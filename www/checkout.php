<?php
    session_start();

    $payment_method = $_POST["paymentMethod"];
    $cart = $_SESSION["CART_ITEMS"];

    $_SESSION["CART_ITEMS"] = [];

    header("Location: ../index.php");
?>
