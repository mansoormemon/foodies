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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <!-- Bootstrap v6 (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i"
        crossorigin="anonymous"></script>

    <!-- JQuery v3.6 -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
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
}
?>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-block" href="#">
                <img src="../res/images/logo.png" alt="Logo" width="64" height="48">
                <span class="px-2 text-danger"><b>Foodies</b></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                    <li class="nav-item">
                        <a class="nav-link" href="cart1.php">Cart</a>
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
        <h1 class="mt-3 text-center fs-3 fw-bold">Your Cart (--items)</h1>
        <div class="container-fluid border border-top-2 border-bottom-2 border-primary">
            <div class="row">
                <div class="items col-6">
                    <h6 class="fw-bold ">Item</h5>
                </div>
                <div class="price col-3">
                    <h6 class="fw-bold">Price</h5>
                </div>
                <div class="total col-3">
                    <h6 class="fw-bold">Total</h5>
                </div>
            </div>
        </div>
        <div class="row w-100 checkout d-flex flex-column align-items-end">
            <div class="total d-flex border-bottom border-start flex-row col-12 col-lg-6 justify-content-between"
                style="height:10vh;border-color:grey;">
                <h6 class="ms-1 mt-3 fs-5 fw-bold">Grand total:</h6>
                <h6 class="ms-1 mt-3 fs-5 fw-bold">$1,019.98</h6>
            </div>
            <div style="height:30vh;" class="d-flex flex-row justify-content-end mt-4 btnbox w-50">
                <button class="btn h-25 fw-bold"
                    style="--tw-bg-opacity: 1;background-color: rgb(253 224 71 / var(--tw-bg-opacity));color:white;"
                    data-bs-toggle="modal" data-bs-target="#checkout">Check
                    out</button>
            </div>
        </div>
    </div>


    <!------------Moda Box--------------------->
    <div class="modal fade" id="checkout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signUpTermsDialogLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <form class="p-5 needs-validation" novalidate action=sign_up_inc.php method="post">
                        <!-- Addresss -->
                        <div class="mb-3">
                            <label for="signUpEmail" class="form-label">Adrdress:</label>
                            <input type="email" class="form-control" id="signUpEmail" name="signUpEmail" height="32px"
                                required autofocus>
                        </div>


                        <!-- Payment method -->
                        <select class="form-control" id="dropdown" onchange="handleDropdownChange()">
                            <option value="">-- Select --</option>
                            <option value="Cash">Cash</option>
                            <option value="Card">Card</option>
                        </select>


                        <!-----Card details--->
                        <div class="togglebox mt-3" style="display:none;">
                            <div class="mb-3">
                                <label for="signUpEmail" class="form-label">Enter credit card number:</label>
                                <input type="email" class="form-control" id="signUpEmail" name="signUpEmail"
                                    height="32px" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="signUpEmail" class="form-label">MM/YY:</label>
                                <input type="email" class="form-control" id="signUpEmail" name="signUpEmail"
                                    height="32px" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="signUpEmail" class="form-label">CVC/CVV:</label>
                                <input type="email" class="form-control" id="signUpEmail" name="signUpEmail"
                                    height="32px" required autofocus>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        style="--tw-bg-opacity: 1;background-color: rgb(253 224 71 / var(--tw-bg-opacity));border:1px solid rgb(253 224 71"
                        class="btn btn-secondary" data-bs-dismiss="modal">Check out</button>
                </div>
            </div>
        </div>
</body>

</html>