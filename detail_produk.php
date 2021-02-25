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

            <form class="form-inline ml-auto mr-auto" method="get" action="">
                <input class="form-control mr-sm-2 ml-auto" type="text" placeholder="Search" aria-label="Search" name="cari">
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



    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <?php
                include("koneksi.php");
                $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$_GET[kd]'");
                while ($data = mysqli_fetch_array($query)) {
                ?>

                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large" src="img/barang/makanan/<?php echo $data['img']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <h3><?php echo $data['nama_barang'] ?></h3>
                            <div class="product__details__price">Rp <?php echo number_format($data['harga'], 2, ",", "."); ?></div>
                            <ul>
                                <li><b>Stok Tersisa</b> <span><?php echo $data['stok'] ?></span></li>
                                <li><b>Satuan</b> <span><?php echo $data['satuan'] ?></span></li>
                                <li><b>Berat</b> <span><?php echo $data['berat'] ?></span></li>
                                <li><b>Bagikan</b>
                                    <div class="share">
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsharingbuttons.io" target="_blank">
                                            <i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <a href="proseskeranjang.php?act=plus&barang_id=<?php echo $data['id_barang']; ?>&ref=keranjang.php" class="primary-btn mt-3"><i class="fas fa-cart-plus"></i></a>


                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Keterangan</h6>
                                        <p><?php echo $data['keterangan'] ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        <?php } ?>
        </div>
    </section>
    <!-- Product Details Section End -->




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