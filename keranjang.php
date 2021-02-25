<?php
error_reporting(0);
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




    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Opsi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $subTotal = 0;
                                foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) {
                                ?>
                                    <?php
                                    include("koneksi.php");
                                    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
                                    while ($data = mysqli_fetch_array($query)) {
                                        $subharga = $data["harga"] * $jumlah;
                                        $gambarProduk = $data['img'];
                                        $namaProduk = $data['nama_barang'];
                                        $hargaProduk = $data['harga'];
                                    }
                                    $subTotal += $subharga;
                                    ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="img/barang/makanan/<?php echo $gambarProduk; ?>" alt="" width="150">
                                            <h5><?php echo $namaProduk ?></h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            Rp <?php echo number_format($hargaProduk, 0, ",", "."); ?>
                                        </td>

                                        <td class="shoping__cart__total">
                                            <input class="col-9" type="number" value="<?php echo $jumlah; ?>">
                                        </td>


                                        <td>
                                            <center><a href="proseskeranjang.php?act=plus&barang_id=<?php echo $id_barang; ?>&ref=keranjang.php" class="btn btn-xs btn-success">Tambah</a>
                                                <a href="proseskeranjang.php?act=min&barang_id=<?php echo $id_barang; ?>&ref=keranjang.php" class="btn btn-xs btn-warning">Kurang</a>
                                                <a href="proseskeranjang.php?act=del&barang_id=<?php echo $id_barang; ?>&ref=keranjang.php" class="btn btn-xs btn-danger">Hapus</a></center>
                                        </td>
                                    <?php } ?>


                                    </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="produk.php" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            LANJUTKAN BELANJA</a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="shoping__checkout">
                        <h5>Total Keranjang</h5>
                        <ul>
                            <li>Subtotal <span>Rp <?php echo number_format($subTotal, 0, ",", "."); ?></span></li>
                            <li>Total <span>Rp <?php echo number_format($subTotal, 0, ",", "."); ?></span></li>
                        </ul>
                        <a href="pembayaran.php" class="primary-btn">LANJUTKAN KE PEMBAYARAN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->



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