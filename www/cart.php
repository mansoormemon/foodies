<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Website</title>

    <!------------------------------------------------>
    <!-- !WARNING! Do not change order of ref tags. -->
    <!------------------------------------------------>
    <!-- Bootstrap v6 (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <!-- Bootstrap v6 (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

    <!-- JQuery v3.6 -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
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
} else {
    header("Location: sign_in.php");
}
?>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-block" href="#">
                <img src="../res/images/logo.png" alt="Logo" width="64" height="48">
                <span class="px-2 text-danger"><b>Foodies</b></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="restaurant.php">Restaurants<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fooditems.php">Food Items</a>
                    </li>
                    </li>
                    <li class="nav-item border-bottom border-danger border-2">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 row gx-1">
                    <?php
                    if ($is_logged_in) {
                    ?>
                        <form class="input-group" action="logout.php">
                            <label type="text" class="form-control">
                                <?php echo $record["EMAIL"]; ?>
                            </label>
                            <input class="input-group-text btn btn-success" type="submit" value="Log Out">
                        </form>
                    <?php
                    } else {
                    ?>
                        <li class="col p-1 container-fluid d-flex">
                            <a href="sign_up.php" class="col btn btn-outline-danger m-1" style="min-width: 96px;">Sign
                                Up</a>
                        </li>
                        <li class="col p-1 container-fluid d-flex">
                            <a href="sign_in.php" class="col btn btn-outline-dark m-1" style="min-width: 96px;">Sign In</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="cartbox">
        <h1 class="mt-3 text-center fs-3 fw-bold">Your Cart</h1>
        <p class="text-center"><?php echo count($_SESSION["CART_ITEMS"]); ?> Item(s)</p>

        <div class="ps-4 pe-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total / Item</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_price = 0;
                    $counter = 1;
                    foreach ($_SESSION["CART_ITEMS"] as $food_item_id => $quantity) {
                        $query = "select NAME, ROUND(PRICE, 0) PRICE from fooditem where FOOD_ITEM_ID ='$food_item_id';";
                        $rows = mysqli_query($conn, $query);
                        $food_item = mysqli_fetch_assoc($rows);
                        $partial_total = $food_item["PRICE"] * $quantity;
                        $total_price = $total_price + $partial_total;
                    ?>
                        <tr>
                            <th scope="row"><?php echo $counter ?></th>
                            <td><?php echo $food_item["NAME"] ?></td>
                            <td>Rs. <?php echo $food_item["PRICE"] ?></td>
                            <td><?php echo $quantity ?></td>
                            <td>Rs. <?php echo $partial_total ?></td>
                        </tr>
                    <?php
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <hr>

        <div class="row w-100 checkout d-flex flex-column align-items-end p-2">
            <?php
            $query = "SELECT * FROM loyalcustomer WHERE customer_id = '$cust_id'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
            ?>
                <small>
                    You are a loyal customer - <b>
                        <?php
                        $row = mysqli_fetch_assoc($result);
                        $discount = $row["DISCOUNT"];
                        echo $discount;
                        ?>%</b> discount will be applied.
                </small>
            <?php
            } else {
            ?>
                <small>No discount available - You do not have a loyalty card.</small>
            <?php
            }
            ?>
            <br>
            <div class="total d-flex flex-row col-12 col-lg-6 justify-content-between">
                <h6 class="ms-1 mt-3 fs-5 fw-bold">Net Total:</h6>
                <h6 class="ms-1 mt-3 fs-5 fw-bold">Rs.
                    <?php if (isset($discount)) {
                        echo $total_price *  ((100 - $discount) / 100);
                    } else {
                        echo $total_price;
                    } ?>
                </h6>
            </div>
            <div class="d-flex flex-row justify-content-end mt-4 btnbox w-50">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#checkout">
                    Check Out
                </button>
            </div>
        </div>
    </div>

    <!------------Modal Box--------------------->
    <div class="modal fade" id="checkout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="checkoutDialogLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Check Out</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-5 needs-validation" novalidate action="checkout.php" method="post">
                        <!-- Addresss -->
                        <div class="mb-3">
                            <label for="cartAddress" class="form-label">Adrdress:</label>
                            <input class="form-control" id="cartAddress" name="cartAddress" height="32px" required autofocus>
                        </div>

                        <!-- Payment method -->
                        <select class="form-control" id="paymentMethod" name="paymentMethod" onchange="handleDropdownChange()">
                            <option value="Cash">Cash on delivery</option>
                            <option value="Card">Card</option>
                        </select>

                        <!-- Card details -->
                        <div class="togglebox mt-3" style="display: none;">
                            <div class="mb-3">
                                <label for="creditCardNumber" class="form-label">Enter credit card number:</label>
                                <input class="form-control" id="creditCardNumber" pattern="[0-9]{16}" name="creditCardNumber" height="32px" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="creditCardDate" class="form-label">MM/YY:</label>
                                <input class="form-control" id="creditCardDate" pattern="[0-9]{2}/[0-9]{2}" name="creditCardDate" height="32px" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="creditCardCode" class="form-label">CVC/CVV:</label>
                                <input pattern="[0-9]{3}" class="form-control" id="creditCardCode" name="creditCardCode" height="32px" autofocus>
                            </div>
                        </div>
                        <hr>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-warning" data-bs-dismiss="modal">Check out</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
