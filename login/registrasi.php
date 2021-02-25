<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/registrasi.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">

    <title>Registrasi Toko Tegal Rotan</title>
</head>

<body>


    <div class="container">
        <a href="../index.php"><img src="../img/logo.png" alt=""></a>
        <h4 class="text-center">Daftar</h4>
        <hr>

        <form id="formku" action="proses.php" method="post">

            <div class="form-row">
                <div class="form-grup col-md-6 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Email Anda" minlength="6" required>
                    </div>
                </div>

                <div class="form-grup col-md-6 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="Password" name="password" class="form-control" placeholder="Masukan Password Anda" minlength="6" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-grup col-md-6 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" name="nama_depan" class="form-control" placeholder="Masukan Nama Depan" required>
                    </div>
                </div>


                <div class="form-grup col md-6 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" name="nama_belakang" class="form-control" placeholder="Masukan Nama Belakang" required>
                    </div>
                </div>
            </div>

            <div class="form-grup mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-home"></i></div>
                    </div>
                    <input type="text" name="alamat_1" class="form-control" placeholder="Alamat 1" required>
                </div>
            </div>
            <div class="form-grup mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-briefcase"></i></div>
                        </div>
                    </div>
                    <input type="text" name="alamat_2" class="form-control" placeholder="Alamat 2" required>
                </div>
            </div>
            <div class="form-grup mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-building"></i></div>
                        </div>
                    </div>
                    <input type="text" name="alamat_3" class="form-control" placeholder="Alamat 3" required>
                </div>
            </div>

            <div class="form-row">

                <div class="form-grup col-md-6 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-map-pin"></i></div>
                            </div>
                        </div>
                        <input type="number" name="kode_pos" class="form-control" placeholder="Kode Pos" minlength="5" required>
                    </div>
                </div>


                <div class="form-grup col-md-6 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-globe-americas"></i></div>
                        </div>
                        <input type="text" name="negara" class="form-control" placeholder="Negara" required>
                    </div>
                </div>

                <div class="form-grup col-md-12 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-address-book"></i></div>
                        </div>
                        <input type="number" name="nomer_telepon" class="form-control" placeholder="Nomer Telepon" minlength="13" required>
                    </div>
                </div>
            </div>



            <input type="hidden" name="level" value="user">

            <button type="submit" name="submit" class=" mt-3 btn btn-success">submit</button>

        </form>

    </div>


</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="jquery.validate.js"></script>
<script>
    $(document).ready(function() {
        $("#formku").validate();
    });
</script>

<style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;

    }
</style>

</body>

</html>