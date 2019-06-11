<?php
    require "../../config/connection.php";
    if(!isset($_SESSION['login'])) {

        header("Location: ./login.php");
        exit;

    }

    $res = mysqli_query($conn, "SELECT * FROM contact");
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
    $res = mysqli_query($conn, "SELECT * FROM contact ORDER BY created_at DESC LIMIT $laman, 10 ");
    $jumlah = mysqli_num_rows($res);
    while($data = mysqli_fetch_object($res)) {
        $res_obj[] = $data;
    }
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

    <!-- Kontak -->
    <div class="container table-responsive mt-5 ">
      <table class="table shadow-sm">
          <thead class="thead-dark">
              <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No. Telepon</th>
                  <th>Subject</th>
                  <th>Date</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <?php if (isset($res_obj)): ?>
          <tbody class="bg-white">
              <?php $a=$page*10; foreach($res_obj as $res): ?>
                  <tr>
                      <td><?= ++$a ?></td>
                      <td><?= $res->nama ?></td>
                      <td><?= $res->email ?></td>
                      <td><?= $res->tlpn ?></td>
                      <td><?= $res->subject ?></td>
                      <td><?= $res->created_at ?></td>
                      <td>
                          <a href="view_kontak.php?id=<?= $res->id ?>" class="badge badge-info"> view </a>
                          <a href="delete_kontak.php?id=<?= $res->id ?>" class="badge badge-danger" onclick="confirm('Yakin Ingin Menghapus?');"> delete </a>
                      </td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
          <?php endif; ?>
      </table>


      <nav aria-label="Page">
        <ul class="pagination justify-content-center">
          <?php if (isset($_GET['page']) && $jumlah>0): ?>
            <!-- Back -->
            <?php if ($_GET['page'] > 1): ?>
              <li class="page-item">
                <a class="page-link" href="admin_kontak.php?page=1" aria-label="Previous">
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
              <a class="page-link" href="admin_kontak.php?page=<?= $a ?>"><?= $a ?></a>
            </li>
          <?php endfor; ?>
          <?php if (isset($_GET['page']) && $jumlah>0): ?>
            <!-- Back -->
            <?php if ($_GET['page'] <= $jumlah): ?>
              <li class="page-item">
                <a class="page-link" href="admin_kontak.php?page=<?= $_GET['page']+1;?>">
                  <span aria-hidden="true">&rsaquo;</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="admin_kontak.php?page=<?= $count; ?>" aria-label="Previous">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            <?php endif; ?>
          <?php endif; ?>
        </ul>
      </nav>


    </div>
    <!-- End Kontak -->

  </body>
</html>
