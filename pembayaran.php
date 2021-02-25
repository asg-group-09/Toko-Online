<?php
session_start();
if (!$_SESSION['username']) {
    header('location:./login/login.php');
}
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




    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
            </div>
            <div class="checkout__form">
                <h4 class="text-center">RINCIAN PEMBAYARAN</h4>
                <?php
                include("koneksi.php");
                $username = $_SESSION['username'];
                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
                while ($data = mysqli_fetch_array($query)) {
                    $email = $data['username'];
                    $namaDepan = $data['nama_depan'];
                    $namaBelakang = $data['nama_belakang'];
                    $alamat_1 = $data['alamat_1'];
                    $alamat_2 = $data['alamat_2'];
                    $alamat_3 = $data['alamat_3'];
                    $phoneNumber = $data['nomer_telepon'];
                    $negara = $data['negara'];
                    $kode_pos = $data['kode_pos'];
                }
                ?>
                <form method="POST" action="selesai.php">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Depan<span>*</span></p>
                                        <input type="text" name="nama_depan" value="<?= $namaDepan ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Belakang<span>*</span></p>
                                        <input type="text" name="nama_belakang" value="<?= $namaBelakang ?>">

                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p style="color: black;">Pilih Alamat :</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alamat" id="exampleRadios1" value="<?= $alamat_1 ?>">
                                    <label class="form-check-label" for="exampleRadios1" id="alamat1">
                                        <?= $alamat_1 ?>
                                    </label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="alamat" id="exampleRadios1" value="<?= $alamat_2 ?>">
                                    <label class="form-check-label" for="exampleRadios1" id="alamat2">
                                        <?= $alamat_2 ?>
                                    </label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="alamat" id="exampleRadios1" value="<?= $alamat_3 ?>">
                                    <label class="form-check-label" for="exampleRadios1" id="alamat3">
                                        <?= $alamat_3 ?>
                                    </label>
                                </div>
                            </div>



                            <div class="row mt-2">
                                <div class="checkout__input col-lg-6 mt-4">
                                    <p>Negara<span>*</span></p>
                                    <input type="text" name="negara" value="<?= $negara ?>">
                                </div>

                                <div class="checkout__input col-lg-6 mt-4 ">
                                    <p>Kode Post<span>*</span></p>
                                    <input type="text" name="kode_post" value="<?= $kode_pos ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>No Tlpn<span>*</span></p>
                                        <input type="text" name="nomer_telepon" value="<?= $phoneNumber ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" value="<?= $email ?>">
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">

                                <h4>Pesanan Anda</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <?php
                                    $subTotal = 0;
                                    foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) {
                                    ?>
                                        <?php
                                        include("koneksi.php");
                                        $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
                                        while ($data = mysqli_fetch_array($query)) {
                                            $subharga = $data["harga"] * $jumlah;
                                            $namaProduk = $data['nama_barang'];
                                            $hargaProduk = $data['harga'];
                                        }
                                        $subTotal += $subharga;
                                        ?>
                                        <li><?php echo $namaProduk ?><span>Rp <?php echo number_format($hargaProduk, 0, ",", "."); ?></span></li>
                                    <?php } ?>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>Rp <?php echo number_format($subTotal, 0, ",", "."); ?></span></div>
                                <div class="checkout__order__total">Total <span>Rp <?php echo number_format($subTotal, 0, ",", "."); ?></span></div>




                                <button class="primary-btn" type="submit">LANJUTKAN KE CHECKOUT</button>


                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->


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