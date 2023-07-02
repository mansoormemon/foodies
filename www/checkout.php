<?php
    session_start();

    $payment_method = $_POST["paymentMethod"];
    $cart = $_SESSION["CART_ITEMS"];
?>
