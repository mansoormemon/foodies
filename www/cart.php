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

<script>
    function CardMaking() {
        var cardContainer = document.createElement("div");
        cardContainer.className = "card";

        var row = document.createElement("div");
        row.className = "row g-0";

        var colImage = document.createElement("div");
        colImage.className = "col-md-4";

        var cardImage = document.createElement("img");
        cardImage.src = "your-image.jpg";
        cardImage.className = "card-img";
        cardImage.alt = "Image";

        colImage.appendChild(cardImage);

        var colBody = document.createElement("div");
        colBody.className = "col-md-8";

        var cardBody = document.createElement("div");
        cardBody.className = "card-body d-flex flex-column align-items-end";

        var cardTitle = document.createElement("h5");
        cardTitle.className = "card-title upside-down-text";
        cardTitle.innerText = "Upside Down Title";

        var cardDescription = document.createElement("p");
        cardDescription.className = "card-text upside-down-text";
        cardDescription.innerText = "Upside Down Description";

        cardBody.appendChild(cardTitle);
        cardBody.appendChild(cardDescription);

        colBody.appendChild(cardBody);

        row.appendChild(colImage);
        row.appendChild(colBody);
        cardContainer.appendChild(row);
        return cardContainer;
    }

    function Selected() {
        var d1 = document.getElementsByClassName("c1");
        d1[0].innerHTML = " ";
        for (let i = 1; i <= 5; i++) {
            d1[0].appendChild(CardMaking());
        }

    }

    function Clear() {
        var d1 = document.getElementsByClassName("c1");
        d1[0].innerHTML = " ";
    }
</script>

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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 row gx-1">
                    <?php
                    if ($is_logged_in) {
                    ?>
                        <form class="input-group" action="logout.php">
                            <label type="text" class="form-control"><?php echo $record["EMAIL"]; ?></label>
                            <input class="input-group-text btn btn-success" type="submit" value="Log Out">
                        </form>
                    <?php
                    } else {
                    ?>
                        <li class="col p-1 container-fluid d-flex">
                            <a href="sign_up.php" class="col btn btn-outline-danger m-1" style="min-width: 96px;">Sign Up</a>
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
    <div style="height:100vh" class="d-flex flex-column align-items-center justify-content-center cart container-fluid">
        <div class="img-box">
            <img class="img-fluid" src="../res/images/cart.png" alt="cart">
        </div>
        <button data-bs-toggle="modal" onclick="Selected()" data-bs-target="#Cart" class="cart-btn btn">Cart</button>
    </div>



    <div class="modal fade" id="Cart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signUpTermsDialogLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Cart</h1>
                </div>
                <div class="modal-body">
                    <div class="c1 container-fluid"></div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="Clear()" class="btn btn-secondary">Clear Cart</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
