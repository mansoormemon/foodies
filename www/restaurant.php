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
    <!-- Navigation Bar -->
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
                        <a class="nav-link" href="#">Restaurants<span class="sr-only">(current)</span></a>
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

    <!-- Jumbotron section -->
    <section class="j5 jumbotron text-center">
        <div class="container-fluid p-4">
            <h1 class="jumbotron-heading p-4">The best and fastest food delivery experience</h1>
            <p class="lead p-1"><b>Feeling Starvy?</b></p>
            <div class="p-2">
                <a href="#" class="btn btn-warning my-2 mx-1">Order now</a>
                <a href="#" class="btn btn-outline-dark my-2 mx-1">Learn more</a>
            </div>
        </div>
    </section>

   <!-- Restaurant Section -->
<div class="parent container-fluid section p-4">
    <h1 class="text-center">We offer the best Restaurants countrywide.</h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php
            include 'dbh.php';
            $query = "SELECT COUNT(*) as total_rows FROM restaurant";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $totalRows = $row['total_rows'];

            for ($i = 0; $i < $totalRows; $i++) {
                $cardQuery = "SELECT * FROM restaurant LIMIT $i, 1";
                $cardResult = mysqli_query($conn, $cardQuery);
                $cardRow = mysqli_fetch_assoc($cardResult);
            ?>

                <div class="card m-5" style="width: 18rem;" id="<?php echo $cardRow['RESTAURANT_ID']; ?>">
                    <img src="../res/images/restpic1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $cardRow['NAME']; ?></h5>
                        <p class="card-text text-center"><?php echo $cardRow['ADDRESS']; ?></p>
                        <div class="d-grid">
                            <a data-bs-target="#Menu<?php echo $cardRow['RESTAURANT_ID']; ?>" data-bs-toggle="modal" href="#" class="btn btn-success w-full">Menu</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php
            // Fetch and store all the food items grouped by restaurant
            $foodItemsQuery = "SELECT r.RESTAURANT_ID, r.NAME AS RESTAURANT_NAME, f.FOOD_ITEM_ID, f.NAME, f.PRICE, f.DESCRIPTION
                                       FROM restaurantitem ri
                                       INNER JOIN fooditem f ON ri.FOOD_ITEM_ID = f.FOOD_ITEM_ID
                                       INNER JOIN restaurant r ON ri.RESTAURANT_ID = r.RESTAURANT_ID
                                       ORDER BY r.RESTAURANT_ID";
            $foodItemsResult = mysqli_query($conn, $foodItemsQuery);

            // Create an array to store the food items by restaurant ID
            $restaurantFoodItems = array();
            while ($row = mysqli_fetch_assoc($foodItemsResult)) {
                $restaurantID = $row['RESTAURANT_ID'];
                if (!isset($restaurantFoodItems[$restaurantID])) {
                    $restaurantFoodItems[$restaurantID] = array(
                        'RESTAURANT_NAME' => $row['RESTAURANT_NAME'],
                        'FOOD_ITEMS' => array()
                    );
                }

                $foodItem = array(
                    'FOOD_ITEM_ID' => $row['FOOD_ITEM_ID'],
                    'NAME' => $row['NAME'],
                    'PRICE' => $row['PRICE'],
                    'DESCRIPTION' => $row['DESCRIPTION']
                );
                $restaurantFoodItems[$restaurantID]['FOOD_ITEMS'][] = $foodItem;
            }

            // Generate the menu modals for each restaurant
            foreach ($restaurantFoodItems as $restaurantID => $restaurant) {
            ?>
                <div class="modal fade" id="Menu<?php echo $restaurantID; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signUpTermsDialogLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1><?php echo $restaurant['RESTAURANT_NAME']; ?> Menu</h1>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <?php
                                    $foodItems = $restaurant['FOOD_ITEMS'];
                                    foreach ($foodItems as $foodItem) {
                                    ?><div class="card mb-3"><div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $foodItem['NAME']; ?></h5>
                                                <p class="card-text"><?php echo $foodItem['DESCRIPTION']; ?></p>
                                                <p class="card-text">Price: Rs. <?php echo $foodItem['PRICE']; ?></p>
                                                <p class="card-text"><a href="fooditems.php#<?php echo $foodItem['FOOD_ITEM_ID']; ?>">See more</a></p>
                                            </div>
                                        </div></div>
                                        
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
