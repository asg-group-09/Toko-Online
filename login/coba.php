<?php
session_start();
include("../koneksi.php");

    // menangkap data yang dikirim dari form login
    $user = $_POST['username'];
    $pass = $_POST['password'];


    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `username`='$user' and `password`='$pass'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);

    // cek apakah username dan password di temukan pada database
    if ($cek > 0) {

      $data = mysqli_fetch_assoc($login);

      // cek jika user login sebagai admin
      if ($data['level'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $user;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:../admin/admin.php");

        // cek jika user login sebagai user
      } else if ($data['level'] == "user") {
        // buat session login dan username
        $_SESSION['username'] = $user;
        $_SESSION['level'] = "user";
        // alihkan ke halaman dashboard user
        header("location:../index.php");
      } else {

        header("location:./login.php?msg=1");
      }
    } else {
      header("location:./login.php?msg=2");
    }
