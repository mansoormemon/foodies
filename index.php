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
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <!-- Bootstrap v6 (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i"
        crossorigin="anonymous"></script>

    <!-- JQuery v3.6 -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!-- Font Awesome v6.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alkatra:wght@600&family=Dancing+Script:wght@700&family=Lato&family=Manrope:wght@800&family=Raleway&family=Roboto+Condensed:wght@700&family=Roboto:wght@700;900&family=Signika:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anuphan:wght@500&family=Heebo&family=Josefin+Sans:wght@700&display=swap');

    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-block" href="#">
                <img src="res/images/logo.png" alt="Logo" width="64" height="48">
                <span class="px-2 text-danger"><b>Foodies</b></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Deals</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bonus</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trending</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 row gx-1">
                    <li class="col p-1 container-fluid d-flex">
                        <a href="www/sign_up.php" class="col btn btn-outline-danger m-1">Sign Up</a>
                    </li>
                    <li class="col p-1 container-fluid d-flex"> 
                        <a href="www/sign_up.php" class="col btn btn-outline-dark m-1">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron section -->
    <section class="jumbotron text-center">
        <div class="container-fluid p-4">
            <h1 class="jumbotron-heading p-4">The best and fastest food delivery experience</h1>
            <p class="lead p-1"><b>Feeling Starvy?</b></p>
            <div class="p-2">
                <a href="#" class="btn btn-warning my-2 mx-1">Order now</a>
                <a href="#" class="btn btn-outline-dark my-2 mx-1">Learn more</a>
            </div>
            <div class="container-sm p-3">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </div>
        </div>
    </section>

    <br>

    <!-- Carousel -->
    <div class="container-sm px-5">
        <h2 class="text-center mb-4">Deals</h2>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="res/images/pic1.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="res/images/pic2.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="res/images/pic3 (2).png" class="d-block w-100">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <br>

    <!-- Featured products section -->
    <div class="container-lg px-5">
        <h2 class="text-center mb-4">Trending Now</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="res/images/burger.jpg" alt="Product" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Hot Zinger Fried</h5>
                        <p class="card-text">
                            A hot fried vege coated zinger with loafy bread and the combination of
                            lettuce, salad and beef patty inside.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-danger">Add to cart</button>
                                <button type="button" class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$10.99</small>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="res/images/broast.jpg" alt="Product" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Cripy Chicken Wings</h5>
                        <p class="card-text">
                            Crispy and juicy wing peices which offers subtle taste and smell of
                            chicken. Made purely form organic and fresh chicken.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-danger">Add to cart</button>
                                <button type="button" class="btn btn-sm btn-outline-danger">View details</button>
                            </div>
                            <small class="text-muted">$8.99</small>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="res/images/pizza.jpg" alt="Product" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Alfredo Pizzario</h5>
                        <p class="card-text">
                            Quickly baked in oven the alfredo flavour with loaded cheese, olives,
                            tomatoe and breadcrumps gives extraordinary taste.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-danger">Add to cart</button>
                                <button type="button" class="btn btn-sm btn-outline-danger">View
                                    details</button>
                            </div>

                            <small class="text-muted">$12.99</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials section -->
    <div class="container-lg px-5">
        <h2 class="text-center mb-4">What our customers are saying</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"Great food and fast delivery! I'll definitely be ordering from
                            here again."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-info">View more</button>
                            </div>
                            <small class="text-muted">John Smith</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"The food was delicious and arrived right on time. Highly
                            recommend!"</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-info">View more</button>
                            </div>
                            <small class="text-muted">Jane Doe</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"This is my go-to place for delivery. The food is always hot and
                            fresh!"</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-info">View more</button>
                            </div>
                            <small class="text-muted">Mark Johnson</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="p-3 container-fluid bg-light g-3 d-flex justify-content-around">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <p class="card-text">+92 3343174037</p>
                <a href=".." class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        <h2>Did you like our service?</h2>
        <span><a class="px-5 display-4 text-secondary"><i class="fas fa-smile"></i></a></span>
        <span><a class="px-5 display-4 text-secondary"><i class="fas fa-frown"></i></a></span>
    </div>

    <div class="container-fluid p-3 text-center">
        <span class="text-muted"><small>Copyright © 2023</small></span>
    </div>
</body>

</html>
