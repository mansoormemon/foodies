<?php
    session_start();

    $data = json_decode(file_get_contents('php://input'), true);

    $_SESSION["CART_ITEMS"] = $_SESSION['CART_ITEMS'] + array($data["item"] => $data["quantity"]);
?>
