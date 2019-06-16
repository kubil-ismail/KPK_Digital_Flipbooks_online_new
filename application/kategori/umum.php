<?php
  require "../config/connection.php";
  $umum = get_pdf(5);
?>
<!DOCTYPE html>
 <html>
   <head>
     <title>Buku Antikorupsi | Umum</title>
     <!-- favicon  -->
     <link rel="shortcut icon" href="../images/Logo KPK/favicon.png">
     <!-- Flipbook CSS -->
     <link rel="stylesheet" href="../css/flipbook.style.css">
     <!--Import Bootstrap.css-->
     <link rel="stylesheet" href="../css/bootstrap.css">
     <!-- Global CSS -->
     <link rel="stylesheet" href="../css/global.css">
     <link rel="stylesheet" href="../css/navbar.css">
     <link rel="stylesheet" href="../css/color.css">
     <link rel="stylesheet" href="../css/carousel.css">
     <link rel="stylesheet" href="../css/modal.css">
     <link rel="stylesheet" href="../css/footer.css">
     <link rel="stylesheet" href="css/kategori.css">
     <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta charset="utf-8">
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
      <form method="get" action="../search.php">
          <input type="text" name="search" placeholder="Cari judul buku..." autocomplete="off" id="keyword">
          <button type="submit" class="btn btn-danger">Cari</button>
      </form>
    </div>
    <!-- End Of Search Fullscreen -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent">
       <div class="container">
         <a class="navbar-brand" href="../home">
           <img src="../images/logo.png" alt="KPK Logo" width="150">
         </a>
         <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <i class="fas fa-bars navbar-toggler clr-white"></i>
         </a>
         <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item mx-4">
               <a class="nav-link clr-white beranda" href="../home">Beranda</a>
             </li>
             <li class="nav-item mx-4">
               <a class="nav-link clr-white" href="../home#bukuAntikorupsi">Buku Antikorupsi</a>
             </li>
             <li class="nav-item mx-4 dropdown nav-active bg-red-light">
               <a class="nav-link clr-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white !important;">
                 Kategori
               </a>
               <div class="dropdown-menu bg-red-light" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="Anak">Anak</a>
                 <div class="dropdown-divider" ></div>
                 <a class="dropdown-item" href="DuniaUsaha">Dunia Usaha</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item dropdown-submenu dropdown-toggle clr-red-light" href="#" id="panduanantikorupsiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Panduan Pendidikan <br>Antikorupsi</a>
                 <div class="dropdown-menu sub-dropdown" aria-labelledby="panduanantikorupsiDropdown">
                    <a class="dropdown-item" href="PendidikanDasarDanMenengah">Pendidikan<br> Dasar dan Menengah</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Pendidikantinggi">Pendidikan Tinggi</a>
                 </div>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="Politik">Politik</a>
                 <div class="dropdown-divider"></div>

                 <a class="dropdown-item bg-white clr-red-light item-active d-D" href="#" style="color:#f65e49 !important;">Umum</a>
                 <a class="dropdown-item bg-white clr-red-light item-active d-T" href="#" data-toggle="collapse" data-target="#navbarNav" style="color:#f65e49 !important;">Umum</a>
                 <a class="dropdown-item bg-white clr-red-light item-active d-M" href="#" data-toggle="collapse" data-target="#navbarNav" style="color:#f65e49 !important;">Umum</a>
               </div>
             </li>
             <li class="nav-item mx-4">
               <a class="nav-link clr-white" href="../petunjuk">Petunjuk</a>
             </li>
             <li class="nav-item mx-4">
               <a class="nav-link clr-white" href="../kontak">Kontak</a>
             </li>
             <li class="nav-item mx-4">
               <a class="nav-link clr-white" href="#search">
                 <i class="fas fa-search"></i>
               </a>
             </li>
           </ul>
         </div>
       </div>
     </nav>
    <!-- End Of Navbar -->

    <!-- DesktopCarousel -->
    <div id="DesktopCarousel" class="carousel slide DesktopCarousel d-D" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption umum-carousel-caption-3 text-right">
            <div class="block float-right text-center">
              <h3 style="color: white !important; font-size:30px;">BUKU ANTIKORUPSI</h3>
              <h2 style="color: white !important; font-size:65px;"><b>Umum</b></h2>
            </div>
          </div>
          <img src="../images/Slider/banner umum.png" class="d-block w-100" alt="Banner Kategori Dunia Usaha">
        </div>
      </div>
    </div>
    <!-- End Of DesktopCarousel -->

    <!-- TabletCarousel -->
    <div id="TabletCarousel" class="carousel slide TabletCarousel d-T" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption umum-carousel-caption-2 text-right">
            <div class="block float-right text-center">
              <h3 style="color: white !important; font-size:20px;">BUKU ANTIKORUPSI</h3>
              <h2 style="color: white !important; font-size:35px;"><b>Umum</b></h2>
            </div>
          </div>
          <img src="../images/Slider/banner umum.png" class="d-block w-100" alt="Banner Kategori Dunia Usaha">
        </div>
      </div>
    </div>
    <!-- End Of TabletCarousel -->

    <!-- MobileCarousel -->
    <div id="MobileCarousel" class="carousel slide MobileCarousel d-M" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption umum-carousel-caption-3 text-center">
            <h3 style="color: #c71a00 !important; font-size:15px;">BUKU ANTIKORUPSI</h3>
            <h2 style="color: #c71a00 !important; font-size:30px;"><b>Umum</b></h2>
          </div>
          <img src="../images/Slider/banner umum mobile.png" class="d-block w-100" alt="Banner Kategori Dunia Usaha">
        </div>
      </div>
    </div>
    <!-- End Of MobileCarousel -->

    <!-- Panduan Umum PDF -->
    <br><br><br>
    <!-- DESKTOP -->
    <section id="D-anak" class="d-D">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf">
              <div class="covers">
              <?php $a = 0; foreach($umum as $an): ?>
                <div class="thumb book-1">
                  <a href="#" data-toggle="modal" data-id="<?= $an['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                    <img class="img-thumbnail" src="../<?= $an['pdf_thumb'] ?>">
                  </a>
                </div>
                  <?php if(++$a % 4 == 0 || $a == count($umum)): ?>
                    <img class="shelf-img" src="../images/rak.png" style="margin-top: 0;">
                  <?php endif; ?>
                <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TABLET -->
    <section id="T-anak" class="d-T">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf">
              <div class="covers">
              <?php $a = 0; foreach($umum as $an): ?>
                <div class="thumb book-1">
                  <a href="#" data-toggle="modal" data-id="<?= $an['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                    <img class="img-thumbnail" src="../<?= $an['pdf_thumb'] ?>">
                  </a>
                </div>
                  <?php if(++$a % 3 == 0 || $a == count($umum)): ?>
                    <img class="shelf-img" src="../images/rak.png" style="margin-top: 0;">
                  <?php endif; ?>
                <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- MOBILE -->
    <section id="M-anak" class="d-M">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf">
              <div class="covers">
              <?php $a = 0; foreach($umum as $an): ?>
                <div class="thumb book-1 mb-5">
                  <a href="#" data-toggle="modal" data-id="<?= $an['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                    <img class="img-thumbnail" src="../<?= $an['pdf_thumb'] ?>">
                  </a>
                </div>
                <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of Panduan Umum PDF -->



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
        <img src="../images/Footer/footer-01-01-01.png" alt="Footer" class="w-100">
      </main>
      <main class="d-T">
        <img src="../images/Footer/footer-01-01-01.png" alt="Footer" class="w-100" style="height: 800px !important;">
      </main>
      <main class="d-M">
        <img src="../images/Footer/footer mobile.png" alt="Footer" class="w-100" style="height: 600px !important;">
      </main>
    </div>
    <!-- End Of Footer -->


    <!-- MODAL -->
    <div class="modal fade" id="modalPdf" tabindex="-1" role="dialog" aria-labelledby="PdfModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="row justify-content-md-center modal-row">
              <div class="col-sm-12 col-md-5 thumb-img">
                <button type="button" class="close float-left d-D" data-dismiss="modal" aria-label="Close" style="top: 0 !important; margin-top: -20px; margin-right:-20px;">
                  <span aria-hidden="true">&times;</span>
                </button>
                <button type="button" class="close float-left d-T" data-dismiss="modal" aria-label="Close" style="top: 0 !important; margin-top: -20px; margin-right:-20px;">
                  <span aria-hidden="true">&times;</span>
                </button>
                <button type="button" class="close float-right d-M" data-dismiss="modal" aria-label="Close" style="top: 0 !important; margin-top: -20px; margin-right:-20px;">
                  <span aria-hidden="true">&times;</span>
                </button>
                <br>
                <img class="img-thumbnail" alt="pdf thumbnail" id="img-modal" style="width:100%; height: auto;">
                <div class="row d-T text-white">
                  <div class="col-6">
                    <p class="p-0 m-0" id="T-unduh"></p>
                    <p class="p-0 m-0" id="T-baca"></p>
                  </div>
                  <div class="col-6"><p id="T-pdfSize" class="text-right"></p></div>
                </div>
                <div class="row d-M text-white">
                  <div class="col-7">
                    <p class="p-0 m-0" id="M-unduh"></p>
                    <p class="p-0 m-0" id="M-baca"></p>
                  </div>
                  <div class="col-5"><p id="M-pdfSize" class="text-right"></p></div>
                </div>
              </div>
              <div class="col-sm-12 col-md-7 pdf-info">
                <div class="info-modal">
                  <br>
                  <div class="row d-D text-dark">
                    <div class="col-6">
                      <p class="p-0 m-0" id="D-unduh"></p>
                      <p class="p-0 m-0" id="D-baca"></p>
                    </div>
                    <div class="col-6"><p id="D-pdfSize" class="text-right"></p></div>
                  </div>
                  <p id="headModal"></p>
                  <p id="descModal"></p>
                  <div class="row">
                    <div class="col-6">
                      <a id="read" class="btn-modal-pdf btn btn-danger w-100 mb-3">Baca</a>
                    </div>
                    <div class="col-6">
                      <a id="downloadPdf" href="" class="btn-modal-pdf btn btn-danger w-100 mb-3" download>Unduh</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
     <script type="text/javascript" src="../js/jquery-ui.js"></script>
     <script type="text/javascript" src="../js/flipbook.min.js"></script>
     <script type="text/javascript" src="../js/bootstrap.min.js"></script>
     <script type="text/javascript" src="../js/viewKategori.js"></script>
     <script type="text/javascript" src="../js/search.js"></script>
     <script type="text/javascript" src="../js/global.js"></script>
     <script type="text/javascript" src="../js/navbar.js"></script>
     <!-- Optional JS -->
   </body>
 </html>
