<?php
session_start();
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi Karyawan - Home</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Hero Section =================-->
  <section class="hero-banner d-flex align-items-center justify-content-center" style="height: 100vh; background: linear-gradient(to right,rgb(37, 63, 81),rgb(36, 104, 187));">
    <div class="container text-white text-center">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="img/logokaryawan.png" alt="Logo Karyawan" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h1 style="font-family:initial">Sistem Informasi dan Absensi Karyawan</h1>
          <p class="mt-3">Kelola data karyawan dan absensi dengan mudah dan efisien.</p>
          <div class="d-flex justify-content-center mt-4">
            <a href="login.php" class="btn btn-warning btn-lg mx-2">Login Admin</a>
            <a href="karyawan/login_karyawan.php" class="btn btn-primary btn-lg mx-2">Login Karyawan</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Hero Section =================-->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
