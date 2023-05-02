<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies - Create a new account</title>

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

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- JS Script -->
    <script src="../js/script.js"></script>
</head>


<body>
    <div class="container m-auto p-5 d-flex align-items-center justify-content-center">
        <div class="container-fluid shadow-lg rounded-3 bg-light">
            <div class="row">
                <div class="col-xl p-0">
                    <div class="container px-auto py-5">
                        <div class="d-flex align-items-center justify-content-center p-3">
                            <img src="../res/images/logo.png" class="img-fluid" width="280vw">
                        </div>
                        <h1 class="display-6 text-warning text-center">Sign in to your account</h1>
                        <form class="p-5">
                            <div class="mb-3">
                                <label for="signUpUsername" class="form-label">Username:</label>
                                <input type="email" class="form-control" id="signUpUsername" height="32px" autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="signUpPassword" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="signUpPassword" height="32px">
                            </div>

                            <div class="mb-3">
                                <p>
                                    <small class="float-end"><a href="#">Forgot password?</a></small>
                                </p>
                            </div>

                            <br> <br>

                            <div class="d-grid gap-2">
                                <button class="btn btn-warning" type="button" id="signUpSubmit">Submit</button>
                            </div>
                            
                            <br>
                            
                            <div>
                                <p class="text-center">
                                    <small>
                                        Don't have an account? <a href="sign_up.php">Sign Up</a>
                                    </small>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl p-0 d-none d-xl-block">
                    <div class="container p-0">
                        <img src="../res/images/sign_in_cover.jpg" class="img-fluid rounded-end-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
