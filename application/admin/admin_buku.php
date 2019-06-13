<?php
    require "../config/connection.php";
    if(!isset($_SESSION['login'])) {
        header("Location: ./login.php");
        exit;
    }
    $res = mysqli_query($conn, "SELECT * FROM pdf");
    $count = ceil(mysqli_num_rows($res) / 10);


    if(isset($_GET['page'])) {

      if(!is_numeric( $_GET['page'] )) {
        header("Location: ./admin_kontak.php");
        exit;
      }

      $page = (int)$_GET['page']-1;
      if($page >= $count) {
        header("Location: ./admin_kontak.php");
        exit;
      }
    } else {
      $_GET['page'] = 1;
      $page = 0;
    }
    $laman = $page * 10;
    $res = mysqli_query($conn, "SELECT * FROM pdf  LIMIT $laman, 10 ");
    $jumlah = mysqli_num_rows($res);
    if (isset($_GET['submit'])) {
      $keyword = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_GET['keyword']) ));
      $res = mysqli_query($conn, "SELECT * FROM pdf  WHERE pdf_title LIKE '%$keyword%'");
    }
    while($data = mysqli_fetch_object($res)) {
        $res_obj[] = $data;
    }



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Buku Antikorupsi | List Buku</title>
    <!-- favicon  -->
    <link rel="shortcut icon" href="../images/Logo KPK/favicon.png">

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
      <div class="card p-2">
        <form class="form-inline" method="get">
          <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search" style="width:74%;">
          <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit" style="width:25%;">Search</button>
        </form>
      </div>
    </div>
    <!-- End Nav -->


    <!-- List Buku -->
    <?php if (!isset($res_obj)): ?>
    <div class="container mt-5">
      <div class="alert alert-danger text-center" role="alert">
        <h2><b>404 Not Found</b></h2>
        <p>PDF tidak dapat di temukan. Pastikan nama PDF yang kamu cari benar</p>
      </div>
    </div>
    <?php endif; ?>

    <?php if (isset($res_obj)): ?>
    <div class="container table-responsive mt-5 ">
      <table class="table shadow-sm" border="1">
          <thead class="thead-dark">
              <tr>
                  <th>No.</th>
                  <th>Cover</th>
                  <th>Judul Buku</th>
                  <th>Kategori</th>
                  <th>Sub Kategori</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody class="bg-white">
            <?php $a=$page*10; foreach($res_obj as $res): ?>
              <tr>
                <td><?= ++$a ?></td>
                <td><img src="../<?= $res->pdf_thumb ?>" width="50"></td>
                <td><?= $res->pdf_title ?></td>
                <!-- Kategori -->
                <?php if ($res->kategori_id == 1): ?>
                  <td>Anak</td>
                <?php endif; ?>
                <?php if ($res->kategori_id == 2): ?>
                  <td>Dunia Usaha</td>
                <?php endif; ?>
                <?php if ($res->kategori_id == 3): ?>
                  <td>Panduan pendidikanAntiKorupsi</td>
                <?php endif; ?>
                <?php if ($res->kategori_id == 4): ?>
                  <td>Politik</td>
                <?php endif; ?>
                <?php if ($res->kategori_id == 5): ?>
                  <td>Umum</td>
                <?php endif; ?>
                <!-- End Of Kategori -->
                <td><?= $res->sub_kategori ?></td>
                <!-- Status -->
                <?php if ($res->pdf_status_id == 1): ?>
                <td>Ada</td>
                <?php endif; ?>
                <?php if ($res->pdf_status_id == 0): ?>
                <td>Tidak Ada</td>
                <?php endif; ?>
                <!-- End Of Status -->
                <td>
                  <a href="view_buku.php?id=<?= $res->id ?>" class="badge badge-info"> view </a>
                  <a href="function_buku_active.php?id=<?= $res->id ?>" class="badge badge-success"> activated </a>
                  <a href="function_buku_nonactive.php?id=<?= $res->id ?>" class="badge badge-danger"> nonactivated </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
      </table>
    <?php endif; ?>

      <?php if (!isset($_GET['keyword'])): ?>
      <nav aria-label="Page">
        <ul class="pagination justify-content-center">
          <?php if (isset($_GET['page']) && $jumlah>0): ?>
            <!-- Back -->
            <?php if ($_GET['page'] > 1): ?>
              <li class="page-item">
                <a class="page-link" href="admin_buku.php?page=1" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="admin_buku.php?page=<?= $_GET['page']-1; ?>">
                  <span aria-hidden="true">&lsaquo;</span>
                </a>
              </li>
            <?php endif; ?>
          <?php endif; ?>
          <?php for($a = 1; $a <= $count; $a++): ?>
            <?php if ($_GET['page'] == $a): ?>
            <li class="page-item active">
            <?php else: ?>
            <li class="page-item">
            <?php endif; ?>
              <a class="page-link" href="admin_buku.php?page=<?= $a ?>"><?= $a ?></a>
            </li>
          <?php endfor; ?>
          <?php if (isset($_GET['page']) && $jumlah>0): ?>
            <!-- Next -->
            <?php if ($_GET['page'] <= $jumlah): ?>
              <li class="page-item">
                <a class="page-link" href="admin_buku.php?page=<?= $_GET['page']+1;?>">
                  <span aria-hidden="true">&rsaquo;</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="admin_buku.php?page=<?= $count; ?>" aria-label="Previous">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            <?php endif; ?>
          <?php endif; ?>
        </ul>
      </nav>
      <?php endif; ?>
    <!-- End Of List Buku -->
    <br>
    <br><br>
  </body>
</html>
