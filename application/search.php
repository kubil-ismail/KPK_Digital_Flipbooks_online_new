<?php
  require "config/connection.php";

  // Check
  if (!isset($_GET['search'])) {
    header("Location: index.php");
  }

  //Get data in page
  $page = 1;
  if(isset($_GET['page']) ){
    $page = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_GET['page']) ));
  } elseif (!isset($_GET['page'])) {
    $_GET['page'] = 1;
  }
  // Get Data search
  $search = "";
  if(isset($_GET['search']) ){
    $search = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_GET['search']) ));
  }
   $tampil = 5;
   $data = mysqli_query($conn, "SELECT * FROM pdf WHERE pdf_title LIKE '%$search%'");
   $jumlah = mysqli_num_rows($data);
   $laman = ceil($jumlah / $tampil);
   $page = ($page-1)*$tampil;
   $query = mysqli_query($conn, "SELECT * FROM pdf WHERE pdf_title LIKE '%$search%' LIMIT $page, $tampil");
   $res_obj = [];
   while($res = mysqli_fetch_object($query)) {
    $res_obj[] = $res;
   }
 ?>
<!DOCTYPE html>
 <html>
   <head>
     <?php if ($_GET['search']==null): ?>
     <title>404 NOT FOUND</title>
     <?php else: ?>
       <?php if ($jumlah<1): ?>
         <title>404 NOT FOUND</title>
         <?php else: ?>
         <title>Buku Antikorupsi | Search</title>
       <?php endif; ?>
     <?php endif; ?>
     <!-- favicon  -->
     <link rel="shortcut icon" href="images/Logo KPK/favicon.png">
     <!-- Flipbook CSS -->
     <link rel="stylesheet" href="css/flipbook.style.css">
     <!--Import Bootstrap.css-->
     <link rel="stylesheet" href="css/bootstrap.css">
     <!-- Global CSS -->
     <link rel="stylesheet" href="css/global.css">
     <link rel="stylesheet" href="css/navbar.css">
     <link rel="stylesheet" href="css/color.css">
     <link rel="stylesheet" href="css/carousel.css">
     <link rel="stylesheet" href="css/modal.css">
     <link rel="stylesheet" href="css/footer.css">
     <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
     <!-- Costume CSS -->
     <style media="screen">
     #readSearch,
     #downloadSearch {
       color: #cb2100;
       background-color: transparent !important;
       border: 3px solid #cb2100;
       border-radius: 13px;
       padding: 3px 5px 3px 5px;
       font-weight: bold;
     }
     #readSearch:hover,
     #downloadSearch:hover {
       background-color: #cb2100 !important;
       border: 3px solid #cb2100;
       color: white;
       transition: 0.2s;
       font-weight: bold;
     }

      .pagination a {
        color: #f65e49;
      }
      .pagination a:hover {
        transition: 0.2s;
        color: #fff;
        background: #cb2100 !important;
        border: 1px solid #cb2100 !important;
      }
     .pagination>li.active>a {
        background: #cb2100 !important;
        border: 1px solid #cb2100 !important;
        color: #fff;
      }
      .pagination>li>a,
      .pagination>li>span {
        border: 1px solid #cb2100;
      }
     </style>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta charset="utf-8">
     <meta name="description" content="Dengan membaca, kamu telah berpartisipasi dalam upaya pemberantasan korupsi. Bagikan semangat antikorupsi di sekitarmu">
     <meta name="author" content="Buku Antikorupsi">
   </head>
   <body>

     <!-- Scroll Top -->
     <a href="#" id="scroll" style="display: none;" class="scroll shadow">
       <i class="fas fa-chevron-up"></i>
     </a>
     <!-- End Of Scroll Top -->

     <!-- Search Fullscreen -->
     <div id="search">
       <button type="button" class="close">×</button>
       <form method="get" action="search.php">
           <input type="text" name="search" placeholder="Cari judul buku..." autocomplete="off" id="keyword">
           <button type="submit" class="btn btn-danger">Cari</button>
       </form>
     </div>
     <!-- End Of Search Fullscreen -->

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="home">
            <img src="images/logo.png" alt="KPK Logo" width="150">
          </a>
          <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler clr-black"></i>
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-4">
                <a class="nav-link clr-black" href="home">Beranda</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link clr-black" href="home#bukuAntikorupsi">Buku Antikorupsi</a>
              </li>
              <li class="nav-item mx-4 dropdown">
                <a class="nav-link clr-black dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kategori
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="kategori/Anak">Anak</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="kategori/DuniaUsaha">Dunia Usaha</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item dropdown-submenu dropdown-toggle clr-red-light" href="#" id="panduanantikorupsiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Panduan Pendidikan <br>Antikorupsi</a>
                  <div class="dropdown-menu sub-dropdown" aria-labelledby="panduanantikorupsiDropdown">
                     <a class="dropdown-item" href="kategori/PendidikanDasarDanMenengah">Pendidikan<br> Dasar dan Menengah</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="kategori/Pendidikantinggi">Pendidikan Tinggi</a>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="kategori/Politik">Politik</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="kategori/Umum">Umum</a>
                </div>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link clr-black" href="petunjuk">Petunjuk</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link clr-black" href="kontak">Kontak</a>
              </li>
              <li class="nav-item mx-4 nav-active bg-red-light">
                <a class="nav-link clr-black" href="#search">
                  <i class="fas fa-search" style="color: white !important;"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     <!-- End Of Navbar -->

     <br><br><br>

    <!-- PDF SEARCH -->
    <?php if (isset($_GET['search']) && !$_GET['search']==null): ?>
      <?php if ($jumlah>1): ?>
      <div class="pdfSearch kategori mt-5" id="pdfSearch">
        <p class="mt-5">Hasil Pencarian</p>
      </div>
      <?php endif; ?>
    <?php endif; ?>
    <?php if ($_GET['search']==null): ?>
      <div class="container mt-5">
        <div class="alert alert-danger text-center" role="alert">
          <h2><b>PDF Not Found</b></h2>
          <p>PDF tidak dapat di temukan. Pastikan nama PDF yang kamu cari benar</p>
        </div>
      </div>
    <?php endif; ?>
    <?php if (isset($_GET['search']) && !$_GET['search']==null): ?>
      <?php if ($jumlah<1): ?>
        <div class="container mt-5">
          <div class="alert alert-danger text-center" role="alert">
            <h2><b>PDF Not Found</b></h2>
            <p>PDF tidak dapat di temukan. Pastikan nama PDF yang kamu cari benar</p>
          </div>
        </div>
      <?php endif; ?>
    <section class="search">
      <div class="container">
        <?php $a = 0; foreach($res_obj as $obj): ?>
        <div class="card shadow-sm mt-5 mb-5 p-3">
          <div class="row">
            <div class="col-md-3">
              <a href="#" data-id="<?= $obj->id; ?>">
                  <img class="img-thumbnail" src="<?= $obj->pdf_thumb; ?>" style="width: 100%; height: auto;">
              </a>
            </div>
            <div class="col-md-9 search-info">
              <p id="headModal" class="text-left"><?= $obj->pdf_title; ?></p>
              <div class="row mb-2 pr-3">
                <div class="col-12">
                  <p class="p-0 m-0">Ukuran File <b><?= $obj->pdf_size; ?> MB</b></p>
                  <p class="p-0 m-0">Unduh : <b><?= $obj->pdf_download_count; ?></b></p>
                  <p class="p-0 m-0">Read : <b><?= $obj->pdf_read_count; ?></b></p>
                </div>
              </div>
              <p id="descModal" class="text-left"><?= $obj->pdf_desc; ?></p>
              <div class="row">
                <div class="col-6">
                  <a id="readSearch" class="btn-modal-pdf btn btn-danger w-100 mb-3" href="viewpdf.php?id=<?= $obj->id ?>" target="_blank">Baca</a>
                </div>
                <div class="col-6">
                  <a id="downloadSearch" class="btn-modal-pdf btn btn-danger w-100 mb-3" href="add_download.php?read=<?= $obj->id ?>">Unduh</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Pagination -->
    <nav aria-label="Page">
      <ul class="pagination justify-content-center">
      <?php if (isset($_GET['page']) && $jumlah>0): ?>
        <!-- First -->
        <?php if ($_GET['page'] > 1): ?>
          <li class="page-item">
            <a class="page-link" href="./search.php?search=<?=$_GET['search'];?>&page=1" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
        <!-- Back -->
          <li class="page-item">
            <a class="page-link" href="./search.php?search=<?=$_GET['search'];?>&page=<?= $_GET['page']-1; ?>">
              <span aria-hidden="true">&lsaquo;</span>
            </a>
          </li>
        <?php endif; ?>
      <?php endif; ?>
      <?php for($a = 1; $a <= $laman; $a++): ?>
        <?php if(isset($_GET['search'])): ?>
          <!-- Numbers -->
          <?php if ($_GET['page'] == $a): ?>
            <li class="page-item active">
          <?php else: ?>
            <li class="page-item">
          <?php endif; ?>
            <a class="page-link" href="./search.php?search=<?=$_GET['search'];?>&page=<?= $a; ?>"><?= $a; ?></a></li>
        <?php endif; ?>
      <?php endfor; ?>
      <?php if (isset($_GET['page']) && $_GET['page'] != $laman): ?>
        <!-- last -->
        <?php if ($_GET['page'] < $laman ): ?>
          <!-- next -->
          <li class="page-item">
            <a class="page-link" href="./search.php?search=<?=$_GET['search'];?>&page=<?= $_GET['page']+1;?>">
              <span aria-hidden="true">&rsaquo;</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="./search.php?search=<?=$_GET['search'];?>&page=<?= $laman ?>" aria-label="Previous">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        <?php endif; ?>
      <?php endif; ?>
      </ul>
    </nav>
    <!-- End Of Pagination -->
    <?php endif; ?>
    <!-- End Of PDF SEARCH -->

    <!-- Footer -->
    <div class="footer">
      <footer class="d-D">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <h4><b>Follow Us</b></h4>
            </div>
          </div>
          <div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
    					<ul class="list-unstyled list-inline social text-center">
    						<li class="list-inline-item"><a href="https://www.facebook.com/KomisiPemberantasanKorupsi"><i class="fab fa-facebook-square"></i></a></li>
    						<li class="list-inline-item"><a href="https://www.instagram.com/official.kpk/"><i class="fab fa-instagram"></i></li>
    						<li class="list-inline-item"><a href="https://twitter.com/kpk_ri"><i class="fab fa-twitter-square"></i></a></li>
    						<li class="list-inline-item"><a href="https://www.youtube.com/user/HUMASKPK"><i class="fab fa-youtube"></i></a></li>
    					</ul>
    				</div>
          </div>
          <div class="row">
  				  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <div class="address">
                <p>GEDUNG MERAH PUTIH KPK</p>
                <p>Jln. Kuningan Persada Kav. 4 Jakarta Selatan 12950</p>
                <p id="telp">Telp : (021) 2557 8300</p>
                <p id="faks">Faks : (021) 2557 8333</p>
                <p>Call Center: 198</p>
                <p>Email : informasi@kpk.go.id</p>
              </div>
              <br>
              <p class="h6 copyright">Hak Cipta © 2019 Komisi Pemberantasan Korupsi. Semua Hak Dilindungi.</p>
  				  </div>
  			  </div>
        </div>
      </footer>
      <footer class="d-T">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <h4><b>Follow Us</b></h4>
            </div>
          </div>
          <div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
    					<ul class="list-unstyled list-inline social text-center">
    						<li class="list-inline-item"><a href="https://www.facebook.com/KomisiPemberantasanKorupsi"><i class="fab fa-facebook-square"></i></a></li>
    						<li class="list-inline-item"><a href="https://www.instagram.com/official.kpk/"><i class="fab fa-instagram"></i></li>
    						<li class="list-inline-item"><a href="https://twitter.com/kpk_ri"><i class="fab fa-twitter-square"></i></a></li>
    						<li class="list-inline-item"><a href="https://www.youtube.com/user/HUMASKPK"><i class="fab fa-youtube"></i></a></li>
    					</ul>
    				</div>
          </div>
          <div class="row">
  				  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <div class="address">
                <p>GEDUNG MERAH PUTIH KPK</p>
                <p>Jln. Kuningan Persada Kav. 4 Jakarta Selatan 12950</p>
                <p id="telp">Telp : (021) 2557 8300</p>
                <p id="faks">Faks : (021) 2557 8333</p>
                <p>Call Center: 198</p>
                <p>Email : informasi@kpk.go.id</p>
              </div>
              <br>
              <p class="h6 copyright">Hak Cipta © 2019 Komisi Pemberantasan Korupsi. Semua Hak Dilindungi.</p>
  				  </div>
  			  </div>
        </div>
      </footer>
      <footer class="d-M">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <h4><b>Follow Us</b></h4>
            </div>
          </div>
          <div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
    					<ul class="list-unstyled list-inline social text-center">
    						<li class="list-inline-item"><a href="https://www.facebook.com/KomisiPemberantasanKorupsi"><i class="fab fa-facebook-square"></i></a></li>
    						<li class="list-inline-item"><a href="https://www.instagram.com/official.kpk/"><i class="fab fa-instagram"></i></li>
    						<li class="list-inline-item"><a href="https://twitter.com/kpk_ri"><i class="fab fa-twitter-square"></i></a></li>
    						<li class="list-inline-item"><a href="https://www.youtube.com/user/HUMASKPK"><i class="fab fa-youtube"></i></a></li>
    					</ul>
    				</div>
          </div>
          <div class="row">
  				  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <div class="address">
                <p>GEDUNG MERAH PUTIH KPK</p>
                <p>Jln. Kuningan Persada Kav. 4 Jakarta Selatan 12950</p>
                <p id="telp">Telp : (021) 2557 8300</p>
                <p id="faks">Faks : (021) 2557 8333</p>
                <p>Call Center: 198</p>
                <p>Email : informasi@kpk.go.id</p>
              </div>
              <br>
              <p class="h6 copyright">Hak Cipta © 2019 Komisi Pemberantasan Korupsi. Semua Hak Dilindungi.</p>
  				  </div>
  			  </div>
        </div>
      </footer>
      <main class="d-D footer-images">
        <img src="images/Footer/footer-01-01-01.png" alt="Footer" class="w-100">
      </main>
      <main class="d-T">
        <img src="images/Footer/footer-01-01-01.png" alt="Footer" class="w-100" style="height: 800px !important;">
      </main>
      <main class="d-M">
        <img src="images/Footer/footer mobile.png" alt="Footer" class="w-100" style="height: 600px !important;">
      </main>
    </div>
    <!-- End Of Footer -->

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/flipbook.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/view.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
    <!-- Optional JS -->
    </body>
  </html>
