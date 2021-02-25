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

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Produk Kami</h2>


                    </div>
                </div>
            </div>


            <div class="row featured__filter">
                <?php
                include("koneksi.php");
                if (isset($_GET['cari'])) {
                    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_barang LIKE '%" .
                        $_GET['cari'] . "%'");
                } else if (isset($_GET['kategori'])) {
                    $kategori = $_GET['kategori'];
                    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_kategori = '$kategori' ORDER BY id_barang");
                } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_barang");
                }

                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">

                            <div class="featured__item__pic set-bg"><img src="img/barang/makanan/<?php echo $data['img']; ?>" alt="">
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#"><?php echo $data['nama_barang'] ?></a></h6>
                                <h5>Rp <?php echo number_format($data['harga'], 2, ",", "."); ?></h5>


                                <a href="detail_produk.php?kd=<?php echo $data['id_barang']; ?>" class="primary-btn btn-btn mt-2">Detail</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>



            </div>

        </div>
    </section>
    <!-- Featured Section End -->

    </div>


    </div>

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