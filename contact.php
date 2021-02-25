<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- FoR CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Toko Tegal Rotan</title>
</head>

<body>
    <!-- nav -->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo2.png" width="170" height="50" alt="" loading="lazy">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="form-inline ml-auto mr-auto">
                <input class="form-control mr-sm-2 ml-auto" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <ul class="navbar-nav ml-auto mr-4 ">
                <li class="nav-item active ">
                    <a class="nav-link" href="index.php">Home</a>

                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="produk.php">Produk</a>

                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact</a>

                </li>

                <?php
                if (isset($_SESSION['username'])) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: black;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Akun Saya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a href="logout.php">
                                <p class="text-left ml-4" style="color: black;">Logout <i class="fas fa-sign-out-alt ml-1 " data-toggle="tooltip" title="Logout"></i></p>
                            </a>

                        </div>
                    </li>
            </ul>

        <?php
                } else {
        ?>
            <p class="mt-2 ml-2"><a href="login/login.php"> Masuk</a> |<a href="login/registrasi.php"> Daftar</a></p>

        <?php
                }
        ?>

        <div class="icon mt-2">
            <a href="keranjang.php">
                <h5><i class="fas fa-shopping-cart ml-3 mr-2" style="color: #63D8A3;">
            </a></i></h5>
        </div>


        </div>
    </nav>
    <!-- end nav -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <h2>
                            <i class="fas fa-phone" style="color: #63D8A3;"></i>
                        </h2>
                        <h4>Phone</h4>
                        <p>085155123714</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <h2>
                            <i class="fas fa-map-marker-alt" style="color: #63D8A3;"></i>
                        </h2>
                        <h4>Address</h4>
                        <p class="text-left"> Jl. Tegal Rotan Raya No.28,Banten</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <h2>
                            <i class="far fa-clock" style="color: #63D8A3;"></i>
                        </h2>
                        <h4>Open time</h4>
                        <p>07:00 am to 20:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <h2>
                            <i class="fas fa-envelope" style="color: #63D8A3;"></i>
                        </h2>
                        <h4>Email</h4>
                        <p>tegalrotan@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.856585862648!2d106.72298381435114!3d-6.282576563244427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f10f829aaa5f%3A0xc59b5f6db60b0dfe!2sToko%20Tegal%20Rotan!5e0!3m2!1sid!2sid!4v1598178609261!5m2!1sid!2sid" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Message</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Your message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->




    <footer class="" style="background-color: #63D8A3;">
        <div class="copyright text-center text-white mt-2 p-2">
            <p>copyright 2020</p>

        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>