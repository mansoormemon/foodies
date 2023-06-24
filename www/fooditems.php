<?php
$_SESSION['username'] = 'haroon';
echo $_SESSION['username'];
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
                        <a class="nav-link" href="#">Food Items</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trending</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 row gx-1">
                    <li class="col p-1 container-fluid d-flex">
                        <a href="sign_up.php" style="width:6rem;" class="col btn btn-outline-danger m-1">Sign Up</a>
                    </li>
                    <li class="col p-1 container-fluid d-flex">
                        <a href="sign_in.php" style="width:6rem;" class="col btn btn-outline-dark m-1">Sign In</a>
                    </li>
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



    <!-- //Food item Section -->

    <!-- Restaurant Section -->

    <div class="parent container-fluid section mt-5">
        <h1 class="text-center">Savory comfort foods that satisfy your tastebuds.</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="card mt-5" style="width: 18rem;margin-left:8rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$7.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$7.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$7.99</small>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="card mt-5" style="width: 18rem;margin-left:8rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$7.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$7.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">Add to cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$7.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$7.99</small>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card mt-5" style="width: 18rem;margin-left:8rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="card mt-5" style="width: 18rem;margin-left:8rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/sign_up_cover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food Item</h5>
                        <p class="card-text">"Irresistibly flavorful and spicy, the Zinger Mighty Burger combines a
                            crispy zinger chicken patty with fresh toppings."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="CartAdd()" data-bs-toggle="modal"
                                    data-bs-target="#Cartlist" class="btn btn-sm btn-outline-danger">Add to
                                    cart</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ItemDescription"
                                    class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Cartlist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signUpTermsDialogLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Cart List</h1>
                </div>
                <div class="modal-body">

                    <div class="c1 container-fluid"></div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary" onclick="Clear()">Clear Cart</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="ItemDescription" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signUpTermsDialogLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Item Description</h1>
                </div>
                <div class="modal-body">
                    <p>Deluxe Cheeseburger: Sink your teeth into our Deluxe Cheeseburger, a true fast food classic. We
                        start with a juicy, flame-grilled beef patty cooked to perfection and top it with a slice of
                        melted cheddar cheese. Nestled between fresh, toasted sesame seed buns, this burger is dressed
                        with crisp lettuce, ripe tomatoes, tangy pickles, and our signature secret sauce, adding just
                        the right amount of tang and creaminess. Every bite delivers a satisfying combination of flavors
                        and textures that will leave you craving more. Perfectly accompanied by our golden, crispy
                        fries, it's a meal that satisfies your fast food cravings in the best way possible ~</p>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <br>
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
            cardTitle.innerText = "Food Item";

            var cardDescription = document.createElement("p");
            cardDescription.className = "card-text upside-down-text";
            cardDescription.innerText = "Price";

            cardBody.appendChild(cardTitle);
            cardBody.appendChild(cardDescription);

            colBody.appendChild(cardBody);

            row.appendChild(colImage);
            row.appendChild(colBody);
            cardContainer.appendChild(row);
            return cardContainer;
        }

        function CartAdd() {
            var j1 = document.getElementsByClassName("c1");
            j1[0].appendChild(CardMaking());
        }

        function Clear() {
            var j1 = document.getElementsByClassName("c1");
            j1[0].innerHTML = " ";
        }

    </script>
</body>

</html>