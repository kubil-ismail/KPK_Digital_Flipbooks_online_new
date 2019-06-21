<?php

require "../config/connection.php";
if(!isset($_SESSION['login'])) {
    header("Location: ./login");
    exit;
}
$kategori = query("SELECT * FROM kategori");
$sub_kategori = query("SELECT * FROM sub_kategori");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Buku Antikorupsi | Tambah Buku</title>
  <!-- favicon  -->
  <link rel="shortcut icon" href="../images/Logo KPK/favicon.png">


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
            <a class="collapse-item " href="home">Daftar Buku</a>
            <a class="collapse-item bg-danger text-white" href="tambah_buku">Tambah Buku</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="email">
          <i class="fas fa-fw fa-envelope-open-text"></i>
          <span>Email Masuk</span>
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
          <!-- Nav -->
          <div class="card mb-4 shadow">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-danger" href="home"><i class="fas fa-arrow-left"></i></a>
              </li>
            </ul>
          </div>
          <!-- End Nav -->

          <!-- Progress -->
          <div class="progress mb-3" style="display:none;">
            <div id="progressBar" class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
              <span class="sr-only">0%</span>
            </div>
          </div>
          <div class="msg alert alert-info text-left" style="display:none;"></div>
          <!-- End Progress -->

          <!-- Form Upload -->
          <div class="card p-4 shadow">
            <form class="formUpload" method="post" enctype="multipart/form-data">
              <div class="input-group mb-2">
                <label class="input-group-btn">
                  <span class="btn btn-danger">
                    Upload Cover Buku&hellip; <input type="file" id="media" name="gambar" style="display: none;" required>
                  </span>
                </label>
                <input type="text" class="form-control input-lg" size="40" readonly required>
              </div>
              <div class="input-group">
                <label class="input-group-btn">
                  <span class="btn btn-danger">
                    Upload Buku&hellip; <input type="file" id="media" name="media" style="display: none;" required>
                  </span>
                </label>
                <input type="text" class="form-control input-lg" size="40" readonly required>
              </div>
              <div class="form-group">
        				<label for="title">Judul Buku</label>
        				<input type="text" class="form-control" id="title" required name="pdf_title">
        			</div>
              <div class="form-group">
        				<label for="kategori">Kategori Buku</label>
        				<select class="form-control" id="kategori" name="kategori_id" required>
                  <option disabled selected>-- Kategori Buku --</option>
                  <?php foreach ($kategori as $row): ?>
                  <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                  <?php endforeach; ?>
        				</select>
        			</div>
              <div class="form-group sub_kategori">
        				<label for="kategori">Sub Kategori</label>

        				<select class="form-control" id="kategori" name="sub_kategori_id">
                  <option disabled selected>-- Sub Kategori Buku --</option>
                  <?php foreach ($sub_kategori as $row): ?>
                    <?php if ($row['id'] != 1): ?>
                      <option value="<?= $row['id'] ?>" selected><?= $row['name'] ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
        				</select>
        			</div>
              <div class="form-group">
        				<label for="deskripsi">Deskripsi Buku</label>
        				<textarea class="form-control" id="deskripsi" rows="10" name="pdf_desc" required></textarea>
        			</div>
              <div class="input-group">
    						<input type="submit" class="btn btn-danger w-100" value="Tambah Buku">
    					</div>
            </form>
          </div>
          <!-- End Form Upload -->
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

  <!-- Page level custom scripts -->
  <script src="js/image.js"></script>
  <script src="js/upload.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
      $('.sub_kategori').hide();
    $("#kategori").change(function(){
      if ( $(this).val() == 3 ) {
        $('.sub_kategori').show();
      } else {
        $('.sub_kategori').hide();
      }
    });
  });
  $(function() {
    $(document).on('change', ':file', function() {
    var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
    });

    $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
          log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
          input.val(log);
        } else {
          if( log ) alert(log);
        }

      });
    });

  });
  </script>
</body>

</html>
