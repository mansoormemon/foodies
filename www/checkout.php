<?php
session_start();
include "dbh.php";

$is_logged_in = isset($_SESSION["CUSTOMER_ID"]);

if ($is_logged_in) {
    $cust_id = $_SESSION['CUSTOMER_ID'];

    // Get the customer details
    $sql = "SELECT * FROM customer WHERE CUSTOMER_ID = $cust_id;";
    $result = mysqli_query($conn, $sql);
    $customer = mysqli_fetch_assoc($result);

    // Get the cart items
    $cart_items = $_SESSION["CART_ITEMS"];

    // Insert data into salesorder table
    $insert_order_query = "INSERT INTO salesorder (CUSTOMER_ID) VALUES ('$cust_id')";
    mysqli_query($conn, $insert_order_query);
    $sales_order_id = mysqli_insert_id($conn);

    // Insert data into ordereditem table
    foreach ($cart_items as $food_item_id => $quantity) {
        $insert_item_query = "INSERT INTO ordereditem (SALES_ORDER_ID, FOOD_ITEM_ID, QUANTITY) VALUES ('$sales_order_id', '$food_item_id', '$quantity')";
        mysqli_query($conn, $insert_item_query);
    }

    // Retrieve payment method ID from the form submission
    $payment_method = $_POST["paymentMethod"];
    if ($payment_method=='Card'){
        $payment_method=2;
    }else{
        $payment_method=1;
    }

    // Insert data into payment table
    $insert_payment_query = "INSERT INTO payment (SALES_ORDER_ID, PAYMENT_METHOD_ID) VALUES ('$sales_order_id', '$payment_method')";
    mysqli_query($conn, $insert_payment_query);

    // Clear the cart
    $_SESSION["CART_ITEMS"] = [];

    // Redirect to success page or display a success message
    header("Location: ../index.php");
} 
?>
