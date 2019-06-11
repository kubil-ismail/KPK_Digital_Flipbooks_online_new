<!DOCTYPE html>
 <html>
   <head>
     <title>KPK Digital Flipbook | Petunjuk Penggunaan</title>
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
     <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta charset="utf-8">
     <!-- Costume CSS -->
     <style media="screen">
       .Title a{
         text-decoration: none;
         color: #c62100;
         font-weight: bold;
         display: block;
         margin: 20px 20px;
         font-size: 25px;
       }
     </style>
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
             <li class="nav-item mx-4">
               <a class="nav-link clr-white beranda" href="home">Beranda</a>
             </li>
             <li class="nav-item mx-4">
               <a class="nav-link clr-white" href="home#bukuAntikorupsi">Buku Antikorupsi</a>
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
             <li class="nav-item mx-4 nav-active bg-red-light">
               <a class="nav-link clr-white" href="#" style="color: white !important;">Petunjuk</a>
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
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption carousel-caption-1 text-left" style="left:5%; margin-bottom:10%;">
            <div class="block float-left text-center">
            <h1 style="color:#c71a00;"><b>PETUNJUK <br> PENGGUNAAN</b></h1>
            </div>
          </div>
          <img src="images/Slider/banner petunjuk penggunaan.png" class="d-block w-100" alt="Banner Peunjuk Penggunaan">
        </div>
      </div>
    </div>
    <!-- End Of DesktopCarousel -->

    <!-- TabletCarousel -->
    <div id="TabletCarousel" class="carousel slide TabletCarousel d-T" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption carousel-caption-1 text-left" style="left:5%; margin-bottom:10%;">
            <div class="block float-left text-center">
            <h1 style="color:#c71a00; font-size: 35px;"><b>PETUNJUK <br> PENGGUNAAN</b></h1>
            </div>
          </div>
          <img src="images/Slider/banner petunjuk penggunaan.png" class="d-block w-100" alt="Banner Peunjuk Penggunaan">
        </div>
      </div>
    </div>
    <!-- End Of TabletCarousel -->

    <!-- MobileCarousel -->
    <div id="MobileCarousel" class="carousel slide MobileCarousel d-M" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption text-center" style="top:20%;">
            <h1 style="color:white; font-size: 25px;"><b>PETUNJUK <br> PENGGUNAAN</b></h1>
          </div>
          <img src="images/Slider/banner petunjuk penggunaan mobile.png" class="d-block w-100" alt="Banner Peunjuk Penggunaan">
        </div>
      </div>
    </div>
    <!-- End Of MobileCarousel -->

    <!-- Head 1 -->
    <section id="head1" class="head1 mt-5">
      <div class="container text-center">
        <h3 class="mb-5" style="margin-top: 50px;">Pilih Buku Antikorupsi yang ingin di baca</h3>
        <img src="images/petunjuk pengunaan/Group 86.png" alt="Rak Buku" style="width:85%; margin-top: 50px;">
      </div>
    </section>
    <!-- End Of Head 1 -->

    <!-- Head 2 -->
    <section id="head2" class="head2 mt-5">
      <div class="container text-center">
        <h3 class="mb-5" style="margin-top: 50px;">
          Atau, kamu dapat menekan tombol kategori yang <br>
          akan otomatis mengarahkan kamu pada halaman Kategori
        </h3>
        <div class="Title">
          <a href="kategori/Anak" id="title1">Anak</a>
          <a href="kategori/DuniaUsaha" id="title2">Dunia Usaha</a>
          <a href="kategori/PendidikanAntiKorupsi" id="title3">Panduan Pendidikan Antikorupsi</a>
          <a href="kategori/Politik" id="title4">Politik</a>
          <a href="kategori/Umum" id="title5">Umum</a>
        </div>
      </div>
    </section>
    <!-- End Of Head 2 -->

    <!-- Head 3 -->
    <section id="head3" class="head3 mt-5">
      <div class="container text-center">
        <h3 class="mb-5" style="margin-top: 50px;">
          Tampilan mode baca akan muncul setelah kamu <br>
          memilih Buku Antikorupsi
        </h3>
        <img src="images/petunjuk pengunaan/Group 85.jpg" alt="Tampilan Baca" style="width:85%; margin-top: 0px;">
      </div>
    </section>
    <!-- End Of Head 3 -->

    <!-- Head 4 -->
    <section id="head4" class="head4 mt-5">
      <div class="container text-center justify-content-md-center">
        <h3 class="mb-5" style="margin-top: 50px;">Fungsi-fungsi pada tampilan mode baca</h3>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/Group 76.png" alt="Jumlah Halaman" style="width:50px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Menampilkan jumlah halaman pada Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/kanan.png" alt="Kiri" style="width:30px;">
            <img class="float-md-right" src="images/petunjuk pengunaan/kiri.png" alt="Kiri" style="width:30px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol previous dan next halaman Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/zoom.png" alt="Zoom" style="width:45px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol untuk memperbesar tampilan Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/perkecil.png" alt="Perkecil" style="width:45px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol untuk memperkecil tampilan Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/fullscreen.png" alt="fullscreen" style="width:45px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol untuk mode Fullscreen pada Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/play.png" alt="play" style="width:45px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol untuk mode Slideshow pada Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/list.png" alt="list" style="width:45px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol untuk menampilkan isi pada Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/halaman.png" alt="halaman" style="width:45px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol untuk menampilkan Halaman pada Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/share.png" alt="halaman" style="width:45px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol mode berbagi pada Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/volume.png" alt="volume" style="width:50px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol Play atau Mute audio Flipbook pada Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/unduh.png" alt="unduh" style="width:45px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol unduh Buku Antikorupsi</h4>
          </div>
        </div>

        <div class="row pl-md-5 pr-md-5 mb-5">
          <div class="col-md-3 col-sm-12">
            <img class="float-md-right" src="images/petunjuk pengunaan/simpan.png" alt="simpan" style="width:40px;">
          </div>
          <div class="col-md-9 col-sm-12">
            <h4 class="float-md-left">Tombol menyimpan Halaman Buku Antikorupsi</h4>
          </div>
        </div>

      </div>
    </section>
    <!-- End Of Head 4 -->

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
              </div>
              <div class="col-sm-12 col-md-7 pdf-info">
                <div class="info-modal">
                  <br>
                  <div class="row d-D">
                    <div class="col-6">
                      <p class="p-0 m-0" id="unduh"></p>
                      <p class="p-0 m-0" id="baca"></p>
                    </div>
                    <div class="col-6"><p id="pdfSize" class="text-right"></p></div>
                  </div>
                  <div class="row d-T">
                    <div class="col-6">
                      <p class="p-0 m-0" id="unduh"></p>
                      <p class="p-0 m-0" id="baca"></p>
                    </div>
                    <div class="col-6"><p id="pdfSize" class="text-right"></p></div>
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
     <!-- Optional JS -->
   </body>
 </html>
