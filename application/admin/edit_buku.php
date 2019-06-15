<?php
    require "../config/connection.php";
    if(!isset($_SESSION['login'])) {

        header("Location: ./login.php");
        exit;

    }

    if(!isset($_GET['id'])) {
        header("Location: ./admin_buku.php");
        exit;
    }

    $id = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_GET['id']) ));

    $buku = mysqli_query($conn, "SELECT * FROM pdf WHERE id='$id'");
    if(!$buku) {
        header("Location: ./admin_buku.php");
        exit;
    }

    $buku_obj = mysqli_fetch_object($buku);

    $kategori = mysqli_query($conn, "SELECT * FROM kategori");
    $sub = mysqli_query($conn, "SELECT * FROM sub_kategori");

    if (isset($_POST["edit"])) {
    	if(edit_pdf($_POST)>0){
    		echo "
    			<script>
    				alert('Data berhasil diubah');
    				document.location.href='index.php';
    			</script>
    		";
    	} else{
    		echo "
    			<script>
    				alert('Data gagal diubah');
    			</script>
    		";
    	}
    }

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Buku Antikorupsi | Edit Buku</title>
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
        <form class="" action="" method="post">
          <div class="form-group">
            <label for="title">Judul Buku</label>
            <input type="text" class="form-control" id="title" value="<?= $buku_obj->pdf_title; ?>" required name="pdf_title">
          </div>
          <div class="form-group">

            <input type="hidden" name="id" value="<?= $buku_obj->id; ?>">
            <input type="hidden" name="pdf_thumb" value="<?= $buku_obj->pdf_thumb; ?>">
            <input type="hidden" name="pdf_url" value="<?= $buku_obj->pdf_url; ?>">
            <input type="hidden" name="pdf_size" value="<?= $buku_obj->pdf_size; ?>">
            <input type="hidden" name="pdf_url" value="<?= $buku_obj->pdf_url; ?>">
            <input type="hidden" name="pdf_modal" value="<?= $buku_obj->pdf_modal; ?>">
            <input type="hidden" name="pdf_read_count" value="<?= $buku_obj->pdf_read_count; ?>">
            <input type="hidden" name="pdf_download_count" value="<?= $buku_obj->pdf_download_count; ?>">

            <label for="kategori">Kategori Buku</label>
            <select class="form-control" id="kategori" name="kategori_id">
              <?php if ($buku_obj->kategori_id == 1): ?>
                <option class="active" value="1">Anak</option>
              <?php endif; ?>
              <?php if ($buku_obj->kategori_id == 2): ?>
                <option class="active" value="2">Dunia Usaha</option>
              <?php endif; ?>
              <?php if ($buku_obj->kategori_id == 3): ?>
                <option class="active" value="3">Panduan Pendidikan AntiKorupsi</option>
              <?php endif; ?>
              <?php if ($buku_obj->kategori_id == 4): ?>
                <option class="active" value="4">Politik</option>
              <?php endif; ?>
              <?php if ($buku_obj->kategori_id == 5): ?>
                <option class="active" value="5">Umum</option>
              <?php endif; ?>

              <?php foreach ($kategori as $row): ?>
                <?php if ($buku_obj->kategori_id != $row['id']): ?>
                  <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                <?php endif; ?>
              <?php endforeach; ?>

            </select>
          </div>
          <div class="form-group">
            <label for="kategori">Sub Kategori</label>
            <select class="form-control" id="kategori" name="sub_kategori_id">
              <?php if ($buku_obj->sub_kategori == NULL): ?>
                <option value="<?= $buku_obj->sub_kategori; ?>"> - </option>
                <?php else: ?>
                <option value="<?= $buku_obj->sub_kategori; ?>"><?= $buku_obj->sub_kategori; ?></option>
              <?php endif; ?>

              <?php foreach ($sub as $row): ?>
                <?php if ($row['name'] != $buku_obj->sub_kategori): ?>
                  <?php if ($row['name'] == NULL): ?>
                    <option value="<?= NULL ?>"> - </option>
                    <?php else: ?>
                    <option value="<?= $row['name']; ?>"><?= $row['name']; ?></option>
                  <?php endif; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="deskripsi">Example textarea</label>
            <textarea class="form-control" id="deskripsi" rows="10" name="pdf_desc" value="<?= $buku_obj->pdf_desc; ?>"><?= $buku_obj->pdf_desc; ?></textarea>
          </div>
          <button type="submit" name="edit" class="btn btn-danger w-100">Ubah Data Buku</button>
        </form>
      </div>
    </div>
    <!-- End View Message  -->

  </body>
</html>
