<?php
session_start();
include '../koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/bootstrap-responsive.css">

  <title>Login Toko Tegal Rotan</title>
</head>

<body>


  <div class="container">

    <a href="../index.php"><img src="../img/logo.png" alt=""></a>
    <h4 class="text-center">Masuk</h4>
    <hr>
    <?php
    if (@($_GET['msg'] == 1)) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat.!!</strong> Anda Berhasil Logout.!
      </div>
    <?php
    } elseif (@($_GET['msg'] == 2)) {
    ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Danger.!</strong> Data Tidak Ada.!
      </div>

    <?php
    } elseif (@($_GET['msg'] == 3)) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat.!</strong> Data Berhasil Disimpan.!
      </div>

   
    <?php
    }
    ?>
    <form id="formku" action="./coba.php" method="POST">

      <div class="form-grup">
        <label>Usename</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda" minlength="5" required>
        </div>
      </div>

      <div class="form-grup">
        <label class="mt-2">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-key"></i></div>
          </div>
          <input type="Password" name="password" class="form-control" placeholder="Masukan Password Anda" minlength="5" required>
        </div>
      </div>

      <button type="submit" name="login" class=" mt-2 btn btn-success">submit</button>
      <a href="registrasi.php">
        <button type="button" class=" mt-2 btn btn-danger">Daftar</button>
      </a>
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