<?php
  require "config/connection.php";
  $anak = get_pdf_limit(1);
  $dunia_usaha = get_pdf_limit(2);
  $pendidikan_anti_korupsi = get_pdf_limit(3);
  $politik = get_pdf_limit(4);
  $umum = get_pdf_limit(5);
?>
<!DOCTYPE html>
 <html>
   <head>
     <title>KPK Digital Flipbook | Home</title>
     <!-- favicon  -->
     <link rel="shortcut icon" href="images/Logo KPK/icon.png">
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
     <link rel="stylesheet" href="css/slider-carousel-pdf.css">
     <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
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
      <form method="get" action="search.php">
          <input type="text" name="search" placeholder="Cari buku..." autocomplete="off" id="keyword">
          <button type="submit" class="btn btn-danger">Search</button>
      </form>
    </div>
    <!-- End Of Search Fullscreen -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent">
       <div class="container">
         <a class="navbar-brand" href="index.php">
           <img src="images/logo.png" alt="KPK Logo" width="150">
         </a>
         <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <i class="fas fa-bars navbar-toggler clr-white"></i>
         </a>
         <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item mx-4 nav-active bg-red-light">
               <a class="nav-link clr-white beranda" href="#" style="color: white !important;">Beranda</a>
             </li>
             <li class="nav-item mx-4">
               <a class="nav-link clr-white D-Ba" href="#">Buku Antikorupsi</a>
             </li>
             <li class="nav-item mx-4 dropdown">
               <a class="nav-link clr-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Kategori
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="kategori/Anak">Anak</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="kategori/DuniaUsaha">Dunia Usaha</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="kategori/PendidikanAntiKorupsi">Panduan Pendidikan <br>Antikorupsi</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="kategori/Politik">Politik</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="kategori/Umum">Umum</a>
               </div>
             </li>
             <li class="nav-item mx-4">
               <a class="nav-link clr-white" href="petunjuk">Petunjuk</a>
             </li>
             <li class="nav-item mx-4">
               <a class="nav-link clr-white" href="kontak">Kontak</a>
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
      <ol class="carousel-indicators">
        <li data-target="#DesktopCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#DesktopCarousel" data-slide-to="1"></li>
        <li data-target="#DesktopCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption carousel-caption-1 text-right">
            <h1><b>Selamat Datang</b></h1>
            <p>Di portal ini kamu bisa dapatkan <br>
               berbagai jenis buku antikorupsi</p>
            <a href="#" class="btn btn-danger btn-carousel-1" id="D-selanjutnya-1">Selanjutnya</a>
          </div>
          <img src="images/Slider/Welcome banner.png" class="d-block w-100" alt="Banner Welcome">
        </div>
        <div class="carousel-item carousel-item-2">
          <div class="carousel-caption carousel-caption-2 text-left">
            <div class="block float-left">
              <h1><b>Baca, Unduh <br> dan Bagikan</b></h1>
              <center>
              <p>Dengan membaca, kamu telah <br>
                 berpartisipasi dalam upaya <br>
                 pemberantasan korupsi. Bagikan <br>
                 semangat antikorupsi di <br>
                 sekitarmu
              </p>
              <a href="#" class="btn btn-danger btn-carousel-2" id="D-selanjutnya-2">Selanjutnya</a>
              </center>
            </div>
          </div>
          <img src="images/Slider/deskripsi banner.png" class="d-block w-100" alt="Banner Deskripsi">
        </div>
        <div class="carousel-item carousel-item-3">
          <div class="carousel-caption carousel-caption-3 text-left">
            <h1><b>Buku <br> Antikorupsi</b></h1>
            <p>Silahkan pilih buku antikorupsi <br>
               sesuai dengan kategori <br>
               yang kamu inginkan
            </p>
            <a href="#" class="btn btn-danger btn-carousel-2" id="D-selanjutnya-3">Selanjutnya</a>
          </div>
          <img src="images/Slider/tujuan banner.png" class="d-block w-100" alt="Baner Tujuan">
        </div>
      </div>
    </div>
    <!-- End Of DesktopCarousel -->

    <!-- TabletCarousel -->
    <div id="TabletCarousel" class="carousel slide TabletCarousel d-T" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#TabletCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#TabletCarousel" data-slide-to="1"></li>
        <li data-target="#TabletCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption carousel-caption-1 text-right">
            <h1><b>Selamat Datang</b></h1>
            <p>Di portal ini kamu bisa dapatkan <br>
               berbagai jenis buku antikorupsi</p>
            <a href="#" class="btn btn-danger btn-carousel-1" id="T-selanjutnya-1">Selanjutnya</a>
          </div>
          <img src="images/Slider/Welcome banner.png" class="d-block w-100" alt="Banner Welcome">
        </div>
        <div class="carousel-item carousel-item-2">
          <div class="carousel-caption carousel-caption-2 text-left">
            <div class="block float-left">
              <h1><b>Baca, Unduh <br> dan Bagikan</b></h1>
              <center>
              <p>Dengan membaca, kamu telah <br>
                 berpartisipasi dalam upaya <br>
                 pemberantasan korupsi. Bagikan <br>
                 semangat antikorupsi di <br>
                 sekitarmu
              </p>
              <a href="#" class="btn btn-danger btn-carousel-2" id="T-selanjutnya-2">Selanjutnya</a>
              </center>
            </div>
          </div>
          <img src="images/Slider/deskripsi banner.png" class="d-block w-100" alt="Banner Deskripsi">
        </div>
        <div class="carousel-item carousel-item-3">
          <div class="carousel-caption carousel-caption-3 text-left">
            <div class="block float-left">
              <h1><b>Buku <br> Antikorupsi</b></h1>
              <p>Silahkan pilih buku antikorupsi <br>
                 sesuai dengan kategori <br>
                 yang kamu inginkan
              </p>
                <a href="#" class="btn btn-danger btn-carousel-2" id="T-selanjutnya-3">Selanjutnya</a>
              </center>
            </div>
          </div>
          <img src="images/Slider/tujuan banner.png" class="d-block w-100" alt="Baner Tujuan">
        </div>
      </div>
    </div>
    <!-- End Of TabletCarousel -->

    <!-- MobileCarousel -->
    <div id="MobileCarousel" class="carousel slide MobileCarousel d-M" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#MobileCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#MobileCarousel" data-slide-to="1"></li>
        <li data-target="#MobileCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption carousel-caption-1 text-right">
            <h1><b>Selamat Datang</b></h1>
            <p>Di portal ini kamu bisa dapatkan <br>
               berbagai jenis buku antikorupsi</p>
            <a href="#" class="btn btn-danger btn-carousel-1" id="M-selanjutnya-1">Selanjutnya</a>
          </div>
          <img src="images/Slider/welcome banner mobile.png" class="d-block w-100" alt="Banner Welcome">
        </div>
        <div class="carousel-item carousel-item-2">
          <div class="carousel-caption carousel-caption-2 text-center">
            <h1><b>Baca, Unduh <br> dan Bagikan</b></h1>
            <center>
            <p>Dengan membaca, kamu telah <br>
               berpartisipasi dalam upaya <br>
               pemberantasan korupsi. Bagikan <br>
               semangat antikorupsi di sekitarmu
            </p>
            <a href="#" class="btn btn-danger btn-carousel-2" id="M-selanjutnya-2">Selanjutnya</a>
            </center>
          </div>
          <img src="images/Slider/deskripsi banner mobile.png" class="d-block w-100" alt="Banner Deskripsi">
        </div>
        <div class="carousel-item carousel-item-3">
          <div class="carousel-caption carousel-caption-3 text-center">
            <h1><b>Buku <br> Antikorupsi</b></h1>
            <p>Silahkan pilih buku antikorupsi <br>
               sesuai dengan kategori <br>
               yang kamu inginkan
            </p>
            <a href="#" class="btn btn-danger btn-carousel-2" id="M-selanjutnya-3">Selanjutnya</a>
          </div>
          <img src="images/Slider/tujuan banner mobile.png" class="d-block w-100" alt="Baner Tujuan">
        </div>
      </div>
    </div>
    <!-- End Of MobileCarousel -->

    <!-- BUKU ANTIKORUPSI -->
    <div id="bukuAntikorupsi" class="bukuAntikorupsi">
      <p>BUKU ANTIKORUPSI</p>
    </div>
    <!-- BUKU ANTIKORUPSI -->

    <!-- ANAK PDF -->
    <div class="pdfAnak kategori mt-5" id="pdfAnak">
      <a href="kategori/Anak" class="mt-5 kategori">
        <p>Anak</p>
      </a>
    </div>
    <!-- DESKTOP -->
    <section id="D-anak" class="d-D">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="desktopAnak" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($anak); $a++): ?>
                      <?php if($a % 4 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %4 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $anak[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $anak[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 4 == 3): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                        <a href="kategori/Anak" class="btn btn-outline-danger btn-lg D-moreInfo-1">
                          <i class="fas fa-child fa-3x"></i>
                          <br>
                          Kategori Anak
                        </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#desktopAnak" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#desktopAnak" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
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
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="tabletAnak" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($anak); $a++): ?>
                      <?php if($a % 2 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %2 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $anak[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $anak[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 2 == 1): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/Anak" class="btn btn-outline-danger btn-lg T-moreInfo-1">
                            <i class="fas fa-child fa-3x"></i>
                            <br>
                            Kategori Anak
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#tabletAnak" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#tabletAnak" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
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
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="mobileAnak" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($anak); $a++): ?>
                      <?php if($a%1 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a%1 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $anak[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $anak[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 1 == 0): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                        <a href="kategori/Anak" class="btn btn-outline-danger btn-lg M-moreInfo-1">
                          <i class="fas fa-child fa-3x"></i>
                          <br>
                          Kategori Anak
                        </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#mobileAnak" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#mobileAnak" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of ANAK PDF -->


    <!-- DUNIA USAHA PDF -->
    <div class="pdfDuniaUsaha kategori mt-5" id="pdfDuniaUsaha">
      <a href="kategori/DuniaUsaha" class="mt-5 kategori">
        <p>Dunia Usaha</p>
      </a>
    </div>
    <!-- DESKTOP -->
    <section id="D-DuniaUSaha" class="d-D">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="desktopDuniaUsaha" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($dunia_usaha); $a++): ?>
                      <?php if($a % 4 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %4 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $dunia_usaha[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $dunia_usaha[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 4 == 3): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/DuniaUsaha" class="btn btn-outline-danger btn-lg D-moreInfo-2">
                            <i class="fas fa-briefcase fa-3x"></i>
                            <br>
                            Kategori Dunia Usaha
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#desktopDuniaUsaha" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#desktopDuniaUsaha" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TABLET -->
    <section id="T-DuniaUSaha" class="d-T">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="tabletDuniaUsaha" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($dunia_usaha); $a++): ?>
                      <?php if($a % 2 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %2 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $dunia_usaha[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $dunia_usaha[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 2 == 1): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/DuniaUsaha" class="btn btn-outline-danger btn-lg T-moreInfo-2">
                            <i class="fas fa-briefcase fa-3x"></i>
                            <br>
                            Kategori Dunia Usaha
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#tabletDuniaUsaha" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#tabletDuniaUsaha" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- MOBILE -->
    <section id="T-DuniaUSaha" class="d-M">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="mobileDuniaUsaha" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($dunia_usaha); $a++): ?>
                      <?php if($a%1 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a%1 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $dunia_usaha[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $dunia_usaha[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 1 == 0): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/DuniaUsaha" class="btn btn-outline-danger btn-lg M-moreInfo-2">
                            <i class="fas fa-briefcase fa-3x"></i>
                            <br>
                            Kategori Dunia Usaha
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#mobileDuniaUsaha" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#mobileDuniaUsaha" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of DUNIA USAHA PDF -->


    <!-- PanduanPendidikanAntikorupsi PDF -->
    <div class="pdfPanduanPendidikanAntikorupsi kategori mt-5" id="pdfPanduanPendidikanAntikorupsi">
      <a href="kategori/PendidikanAntiKorupsi" class="mt-5 kategori">
        <p>Panduan Pendidikan Antikorupsi</p>
      </a>
    </div>
    <!-- DESKTOP -->
    <section id="D-PanduanPendidikanAntikorupsi" class="d-D">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="desktopPanduanPendidikanAntikorupsi" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($pendidikan_anti_korupsi); $a++): ?>
                      <?php if($a % 4 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %4 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $pendidikan_anti_korupsi[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $pendidikan_anti_korupsi[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 4 == 3): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/PendidikanAntiKorupsi" class="btn btn-outline-danger btn-lg D-moreInfo-3">
                            <i class="fas fa-graduation-cap fa-3x"></i>
                            <br>
                            Kategori Panduan Pendidikan Antikorupsi
                          </a><!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#desktopPanduanPendidikanAntikorupsi" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#desktopPanduanPendidikanAntikorupsi" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TABLET -->
    <section id="T-PanduanPendidikanAntikorupsi" class="d-T">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="tabletPanduanPendidikanAntikorupsi" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($pendidikan_anti_korupsi); $a++): ?>
                      <?php if($a % 2 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %2 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $pendidikan_anti_korupsi[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $pendidikan_anti_korupsi[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 2 == 1): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/PendidikanAntiKorupsi" class="btn btn-outline-danger btn-lg T-moreInfo-3">
                            <i class="fas fa-graduation-cap fa-3x"></i>
                            <br>
                            Kategori Panduan Pendidikan Antikorupsi
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#tabletPanduanPendidikanAntikorupsi" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#tabletPanduanPendidikanAntikorupsi" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- MOBILE -->
    <section id="T-PanduanPendidikanAntikorupsi" class="d-M">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="mobilePanduanPendidikanAntikorupsi" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($pendidikan_anti_korupsi); $a++): ?>
                      <?php if($a%1 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a%1 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $pendidikan_anti_korupsi[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $pendidikan_anti_korupsi[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 1 == 0): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/PendidikanAntiKorupsi" class="btn btn-outline-danger btn-lg M-moreInfo-3">
                            <i class="fas fa-graduation-cap fa-3x"></i>
                            <br>
                            Kategori Panduan Pendidikan Antikorupsi
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#mobilePanduanPendidikanAntikorupsi" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#mobilePanduanPendidikanAntikorupsi" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of PanduanPendidikanAntikorupsi PDF -->


    <!-- Politik PDF -->
    <div class="pdfPolitik kategori mt-5" id="pdfPolitik">
      <a href="kategori/Politik" class="mt-5 kategori">
        <p>Politik</p>
      </a>
    </div>
    <!-- DESKTOP -->
    <section id="D-Politik" class="d-D">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="desktopPolitik" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($politik); $a++): ?>
                      <?php if($a % 4 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %4 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $politik[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $politik[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 4 == 3): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/Politik" class="btn btn-outline-danger btn-lg D-moreInfo-4">
                            <i class="fas fa-vote-yea fa-3x"></i>
                            <br>
                            Kategori Politik
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#desktopPolitik" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#desktopPolitik" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TABLET -->
    <section id="T-Politik" class="d-T">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="tabletPolitik" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($politik); $a++): ?>
                      <?php if($a % 2 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %2 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $politik[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $politik[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 2 == 1): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/Politik" class="btn btn-outline-danger btn-lg T-moreInfo-4">
                            <i class="fas fa-vote-yea fa-3x"></i>
                            <br>
                            Kategori Politik
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#tabletPolitik" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#tabletPolitik" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- MOBILE -->
    <section id="T-Politik" class="d-M">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="mobilePolitik" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($politik); $a++): ?>
                      <?php if($a%1 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a%1 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $politik[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $politik[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 1 == 0): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/Politik" class="btn btn-outline-danger btn-lg M-moreInfo-4">
                            <i class="fas fa-vote-yea fa-3x"></i>
                            <br>
                            Kategori Politik
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#mobilePolitik" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#mobilePolitik" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of Politik PDF -->


    <!-- Umum PDF -->
    <div class="pdfUmum kategori mt-5" id="pdfUmum">
      <a href="kategori/Umum" class="mt-5 kategori">
        <p>Umum</p>
      </a>
    </div>
    <!-- DESKTOP -->
    <section id="D-Umum" class="d-D">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="desktopUmum" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($umum); $a++): ?>
                      <?php if($a % 4 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %4 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $umum[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $umum[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 4 == 3): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/Umum" class="btn btn-outline-danger btn-lg D-moreInfo-5">
                            <i class="fas fa-users fa-3x"></i>
                            <br>
                            Kategori Umum
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#desktopUmum" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#desktopUmum" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TABLET -->
    <section id="T-Umum" class="d-T">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="tabletUmum" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($umum); $a++): ?>
                      <?php if($a % 2 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a %2 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $umum[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $umum[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 2 == 1): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/Umum" class="btn btn-outline-danger btn-lg T-moreInfo-5">
                            <i class="fas fa-users fa-3x"></i>
                            <br>
                            Kategori Umum
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#tabletUmum" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#tabletUmum" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- MOBILE -->
    <section id="T-Umum" class="d-M">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="bookshelf mt-3">
              <div class="covers">
                <div id="mobileUmum" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php for($a = 0; $a < count($umum); $a++): ?>
                      <?php if($a%1 == 0 && $a == 0): ?>
                      <div class="carousel-item active">
                      <?php elseif($a%1 == 0): ?>
                      <div class="carousel-item">
                      <?php endif; ?>
                        <div class="thumb book-1">
                          <a href="#" data-toggle="modal" data-id="<?= $umum[$a]['id'] ?>" data-target="#modalPdf" class="PdfModalClick">
                            <img class="img-thumbnail" src="<?= $umum[$a]['pdf_thumb'] ?>">
                          </a>
                        </div>
                      <?php if($a % 1 == 0): ?>
                      </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col m-auto">
                          <a href="kategori/Umum" class="btn btn-outline-danger btn-lg M-moreInfo-5">
                            <i class="fas fa-users fa-3x"></i>
                            <br>
                            Kategori Umum
                          </a> <!-- tinggal copas ke bagian lainnya -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-next" href="#mobileUmum" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#mobileUmum" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </div>
              </div>
              <img class="shelf-img" src="images/rak.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of Umum PDF -->


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
              <p class="h6 copyright">Hak Cipta © 2017 Komisi Pemberantasan Korupsi. Semua Hak Dilindungi.</p>
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
              <p class="h6 copyright">Hak Cipta © 2017 Komisi Pemberantasan Korupsi. Semua Hak Dilindungi.</p>
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
              <p class="h6 copyright">Hak Cipta © 2017 Komisi Pemberantasan Korupsi. Semua Hak Dilindungi.</p>
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
                      <a id="downloadPdf" href="" class="btn-modal-pdf btn btn-danger w-100 mb-3" download>Download</a>
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
     <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
     <script type="text/javascript" src="js/jquery-ui.js"></script>
     <script type="text/javascript" src="js/flipbook.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/view.js"></script>
     <script type="text/javascript" src="js/search.js"></script>
     <script type="text/javascript" src="js/global.js"></script>
     <script type="text/javascript" src="js/navbar.js"></script>
   </body>
 </html>
