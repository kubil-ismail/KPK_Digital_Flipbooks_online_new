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

    $kontak = mysqli_query($conn, "SELECT * FROM contact WHERE id='$id'");
    if(!$kontak) {
        header("Location: ./admin_kontak.php");
        exit;
    }

    $kontak_obj = mysqli_fetch_object($kontak);

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
            <a class="nav-link active" href="admin_kontak.php"><i class="fas fa-arrow-left"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Nav -->

    <!-- View Message -->
    <div class="container mt-3">
      <div class="card p-5">
        <h2><?= $kontak_obj->subject ?></h2>
        <hr>
        <p class="mt-3">From : <b><?= $kontak_obj->email ?> </b> | <b> <?= $kontak_obj->tlpn ?></b></p>
        <pre>Date : <?= $kontak_obj->created_at ?></pre>
        <p><?= $kontak_obj->pesan ?></p>
      </div>
    </div>
    <!-- End View Message  -->

  </body>
</html>
