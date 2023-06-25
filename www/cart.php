<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Website</title>

    <!------------------------------------------------>
    <!-- !WARNING! Do not change order of ref tags. -->
    <!------------------------------------------------>

    <!-- Bootstrap v6 (CSS) -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> -->

    <!-- Popper JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->

    <!-- Bootstrap v6 (JS) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i"
        crossorigin="anonymous"></script> -->

    <!-- JQuery v3.6 -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> -->

    <!-- Font Awesome v6.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alkatra:wght@600&family=Dancing+Script:wght@700&family=Lato&family=Manrope:wght@800&family=Raleway&family=Roboto+Condensed:wght@700&family=Roboto:wght@700;900&family=Signika:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anuphan:wght@500&family=Heebo&family=Josefin+Sans:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Heebo&family=Inter:wght@400;700;800&family=Roboto:wght@700&display=swap');
    </style>
</head>

<?php
include "dbh.php";

$is_logged_in = isset($_SESSION["CUSTOMER_ID"]);

if ($is_logged_in) {
    $cust_id = $_SESSION['CUSTOMER_ID'];
    $sql = "SELECT * FROM customer where CUSTOMER_ID = $cust_id;";
    $result = mysqli_query($conn, $sql);
    $record = mysqli_fetch_assoc($result);
}
?>

<body>
    <div class="cartbox">
        <h1 class="text-3xl font-bold text-center mt-5">Your Cart (--items)</h1>
        <hr>
        <div class="grid grid-cols-8 ms-3 mt-4">
            <div class="grid grid-cols-5 col-span-7 gap-4 ms-3">
                <h3 class="font-bold col-span-2">Item</h3>
                <div class="price">
                    <h3 class="font-bold">Price</h3>
                </div>
                <div class="quantity">
                    <h3 class="font-bold">Quantiy</h3>
                    <div class="qt-btn mt-5 flex flex-row">
                        <div class="adder w-8 h-7 border-2 border-black rounded-l-lg">
                            <p class="text-center font-bold text-2xl -mt-2">+</p>
                        </div>
                        <div class="qty w-20 h-7 border-2 border-black"></div>
                        <div class="subtractor w-8 h-7 border-2 border-black rounded-r-lg">
                            <p class="text-center font-bold text-2xl -mt-2">-</p>
                        </div>
                    </div>
                    <div class="qt-btn mt-5 flex flex-row">
                        <div class="adder w-8 h-7 border-2 border-black rounded-l-lg">
                            <p class="text-center font-bold text-2xl -mt-2">+</p>
                        </div>
                        <div class="qty w-20 h-7 border-2 border-black"></div>
                        <div class="subtractor w-8 h-7 border-2 border-black rounded-r-lg">
                            <p class="text-center font-bold text-2xl -mt-2">-</p>
                        </div>
                    </div>
                    <div class="qt-btn mt-5 flex flex-row">
                        <div class="adder w-8 h-7 border-2 border-black rounded-l-lg">
                            <p class="text-center font-bold text-2xl -mt-2">+</p>
                        </div>
                        <div class="qty w-20 h-7 border-2 border-black"></div>
                        <div class="subtractor w-8 h-7 border-2 border-black rounded-r-lg">
                            <p class="text-center font-bold text-2xl -mt-2">-</p>
                        </div>
                    </div>
                    <div class="qt-btn mt-5 flex flex-row">
                        <div class="adder w-8 h-7 border-2 border-black rounded-l-lg">
                            <p class="text-center font-bold text-2xl -mt-2">+</p>
                        </div>
                        <div class="qty w-20 h-7 border-2 border-black"></div>
                        <div class="subtractor w-8 h-7 border-2 border-black rounded-r-lg">
                            <p class="text-center font-bold text-2xl -mt-2">-</p>
                        </div>
                    </div>
                </div>
                <div class="total">
                    <h3 class="font-bold">Total</h3>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <div class="checkout w-1/2">
                <div class="r1 flex flex-row justify-around border-b-2 border-r-2 border-grey h-16 items-center">
                    <h2 class="font-bold">Subtotal</h2>
                    <h2 class="">$1,019.98</h2>
                </div>
                <div class="r1 flex flex-row justify-around border-b-2 border-r-2 border-grey h-16 items-center">
                    <h2 class="font-bold">Sales Tax</h2>
                    <h2 class="">$102.98</h2>
                </div>
                <div class="r1 flex flex-row justify-around border-b-2 border-r-2 border-grey h-16 items-center">
                    <h2 class="font-bold">Add Voucher:</h2>
                    <h2 class="underline">Add Voucher</h2>
                </div>
                <div class="r1 flex flex-row justify-around border-b-2 border-r-2 border-grey h-16 items-center">
                    <h2 class="font-bold">Grand total:</h2>
                    <h2 class="">$1,121.98</h2>
                </div>
                <button class="rounded-md bg-yellow-300 text-center w-1/4 h-14 text-white font-bold mt-4">Check out</button>
            </div>
        </div>
    </div>
</body>

</html>