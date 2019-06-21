<?php

require "../config/connection.php";
if(!isset($_SESSION['login'])) {
    header("Location: ./login");
    exit;
}
$res = mysqli_query($conn, "SELECT * FROM pdf");

while($data = mysqli_fetch_object($res)) {
    $res_obj[] = $data;
}

$emails = mysqli_query($conn, "SELECT * FROM contact WHERE status = 0");
$jumlah = mysqli_num_rows($emails);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Buku Antikorupsi | Daftar Buku</title>
  <!-- favicon  -->
  <link rel="shortcut icon" href="../images/Logo KPK/favicon.png">


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style media="screen">
    .active .page-link{
      background-color: #e74a3b !important;
      border-color: #e74a3b !important;
      color: white !important;
    }
    .page-link {
      color: #e74a3b;
    }
    .page-link:hover {
      background-color: #f0f1f5;
      color: #e74a3b;
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="../images/Logo KPK/favicon.png" alt="Logo" width="50">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Admin Panel
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-book"></i>
          <span>Buku Antikorupsi</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Buku Antikorupsi</h6>
            <a class="collapse-item bg-danger text-white" href="home">Daftar Buku</a>
            <a class="collapse-item" href="tambah_buku">Tambah Buku</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="email">
          <i class="fas fa-fw fa-envelope-open-text"></i>
          <span>Email Masuk</span> <span class="badge badge-light"><?= $jumlah; ?></span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin KPK</span>
                <img class="img-profile rounded-circle" src="img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="ubah_password">
                  <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ubah Password
                </a>
                <hr class="px-2">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Buku Anti Korupsi</h1>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Cover</th>
                      <th>Judul Buku</th>
                      <th>Kategori</th>
                      <th>Sub Kategori</th>
                      <th>Jumlah Unduh</th>
                      <th>Jumlah Baca</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($res_obj as $res): ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><img src="../<?= $res->pdf_thumb ?>" width="50"></td>
                      <td><?= $res->pdf_title; ?></td>
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
                      <!-- Sub Kategori -->
                      <?php if ($res->sub_kategori == 'Pendidikan Dasar dan Menengah'): ?>
                      <td>Pendidikan Dasar dan Menengah</td>
                      <?php endif; ?>
                      <?php if ($res->sub_kategori == 'Pendidikan Tinggi'): ?>
                      <td>Pendidikan Tinggi</td>
                      <?php endif; ?>
                      <?php if ($res->sub_kategori != 'Pendidikan Tinggi' && $res->sub_kategori != 'Pendidikan Dasar dan Menengah'): ?>
                      <td>-</td>
                      <?php endif; ?>
                      <td><?= $res->pdf_read_count; ?></td>
                      <td><?= $res->pdf_download_count; ?></td>
                      <td>
                        <a href="view_buku.php?id=<?= $res->id ?>" class="badge badge-info p-2"> View <i class="fas fa-fw fa-eye"></i></a>
                        <a href="edit_buku.php?id=<?= $res->id ?>" class="badge badge-warning pdf_edit p-2 my-1"> Edit <i class="fas fa-fw fa-edit"></i></a>
                        <a class="badge badge-danger p-2" href="#" data-toggle="modal" data-target="#deleteModal<?= $res->id ?>">Delete  <i class="fas fa-fw fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <!-- Delete Modal-->
                    <div class="modal fade" id="deleteModal<?= $res->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menghapus Buku ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">Menghapus buku akan menghapus seluruh data pada buku tersebut secara permanent</div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="delete_buku.php?id=<?= $res->id ?>">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Hak Cipta © 2019 Komisi Pemberantasan Korupsi. Semua Hak Dilindungi.</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout">Logout</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
