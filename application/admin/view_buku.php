<?php
    require "../config/connection.php";
    if(!isset($_SESSION['login'])) {

        header("Location: ./login.php");
        exit;

    }

    if(!isset($_GET['id'])) {
        header("Location: ./admin_kontak.php");
        exit;
    }

    $id = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_GET['id']) ));

    $buku = mysqli_query($conn, "SELECT * FROM pdf WHERE id='$id'");
    if(!$buku) {
        header("Location: ./admin_kontak.php");
        exit;
    }

    $buku_obj = mysqli_fetch_object($buku);

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>KPK Admin</title>
    <!-- favicon  -->
    <link rel="shortcut icon" href="../images/Logo KPK/icon.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <style media="screen">
      body{
        background-color: #f8f9fa;
      }
    </style>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../images/logo.png" alt="KPK Logo" width="150">
        </a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-4">
              <a class="nav-link text-dark" href="admin_kontak.php">Pesan</a>
            </li>
            <li class="nav-item mx-4 ">
              <a class="nav-link text-dark" href="admin_buku.php">Daftar Buku</a>
            </li>
            <li class="nav-item mx-4 ">
              <a class="nav-link text-dark" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Of Navbar -->

    <!-- Nav -->
    <div class="container mt-5">
      <div class="card">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="admin_buku.php"><i class="fas fa-arrow-left"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Nav -->

    <!-- View Message -->
    <div class="container mt-3">
      <div class="card p-5">
        <div class="row">
          <div class="col-md-3">
            <img src="../<?= $buku_obj->pdf_thumb ?>" alt="cover" class="w-100">
          </div>
          <div class="col-md-8">
            <h2><?= $buku_obj->pdf_title ?></h2>
            <p><?= $buku_obj->pdf_desc ?></p>
            <div class="row">
              <div class="col">
                <p>PDF Size : <b><?= $buku_obj->pdf_size ?> MB</b></p>
              </div>
              <div class="col">
                <p>PDF Download : <b><?= $buku_obj->pdf_download_count ?></b></p>
              </div>
              <div class="col">
                <p>PDF Read : <b><?= $buku_obj->pdf_read_count ?></b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End View Message  -->

  </body>
</html>
