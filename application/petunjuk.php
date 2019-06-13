<!DOCTYPE html>
 <html>
   <head>
     <title>Buku Antikorupsi | Petunjuk Penggunaan</title>
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
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta charset="utf-8">
     <!-- Costume CSS -->
     <style media="screen">
       .Title a{
         text-decoration: none;
         color: white;
         font-weight: bold;
         display: block;
         margin: 20px 20px;
         font-size: 25px;
       }
       .dropdown-petunjuk {
         background-color: #f65e49;
         padding: 10px 40px;
       }
       @media (min-width: 801px){
         .dropdown-petunjuk {
           width: 400px;
           margin-left: auto;
           margin-right: auto;
         }
         .fungsi {
           padding: 0 150px !important;
         }
       }
       @media (max-width: 599px){
         .head1 h4,
         .head2 h4,
         .head3 h4,
         .head4 h4{
           font-size: 20px;
         }
         .fungsi h5 {
           font-size: 17px;
           margin-top: 10px;
         }
         .fungsi img {
           margin-top: 20px;
         }
         .head1 h4 {
           margin-bottom: -20px !important;
         }
         .dropdown-petunjuk {
           padding: 5px 10px; !important;
           margin-left: auto;
           margin-right: auto;
         }
         .dropdown-petunjuk a {
           font-size: 20px;
         }
       }

       .fungsi {
         padding: 0 30px;
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
          <input type="text" name="search" placeholder="Cari judul buku..." autocomplete="off" id="keyword">
          <button type="submit" class="btn btn-danger">Cari</button>
      </form>
    </div>
    <!-- End Of Search Fullscreen -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent">
       <div class="container">
         <a class="navbar-brand" href="home">
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
             <li class="nav-item mx-4 nav-active bg-red-light">
               <a class="nav-link clr-white d-D" href="#" style="color: white !important;">Kontak</a>
               <a class="nav-link clr-white d-T" href="#" style="color: white !important;" data-toggle="collapse" data-target="#navbarNav">Kontak</a>
               <a class="nav-link clr-white d-M" href="#" style="color: white !important;" data-toggle="collapse" data-target="#navbarNav">Kontak</a>
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
        <h4 class="mb-5" style="margin-top: 50px;">Pilih Buku Antikorupsi yang ingin di baca</h4>
        <img src="images/petunjuk pengunaan/Group 86.png" alt="Rak Buku" style="width:85%; margin-top: 50px;">
      </div>
    </section>
    <!-- End Of Head 1 -->

    <!-- Head 2 -->
    <section id="head2" class="head2 mt-5">
      <div class="container text-center">
        <h4 class="mb-5" style="margin-top: 50px;">
          Atau, kamu dapat menekan tombol kategori yang <br>
          akan otomatis mengarahkan kamu pada halaman Kategori
        </h4>
        <div class="Title dropdown-petunjuk">
          <a href="kategori/Anak" id="title1">Anak</a>
          <div class="dropdown-divider"></div>
          <a href="kategori/DuniaUsaha" id="title2">Dunia Usaha</a>
          <div class="dropdown-divider"></div>
          <a href="kategori/PendidikanAntiKorupsi" id="title3">Panduan Pendidikan Antikorupsi</a>
          <div class="dropdown-divider"></div>
          <a href="kategori/Politik" id="title4">Politik</a>
          <div class="dropdown-divider"></div>
          <a href="kategori/Umum" id="title5">Umum</a>
        </div>
      </div>
    </section>
    <!-- End Of Head 2 -->

    <!-- Head 3 -->
    <section id="head3" class="head3 mt-5">
      <div class="container text-center">
        <h4 class="mb-5" style="margin-top: 50px;">
          Tampilan mode baca akan muncul setelah kamu <br>
          memilih Buku Antikorupsi
        </h4>
        <img class="img-thumbnail" src="images/petunjuk pengunaan/Group 85.jpg" alt="Tampilan Baca" style="width:85%; margin-top: 0px;">
      </div>
    </section>
    <!-- End Of Head 3 -->

    <!-- Head 4 -->
    <section id="head4" class="head4 mt-5">
      <div class="container text-center justify-content-md-center">
        <h4 class="mb-5" style="margin-top: 50px;">Fungsi-fungsi pada tampilan mode baca</h4>

        <ul class="list-group pl-md-5 pr-md-5 fungsi">
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">1</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/Group 76.png" alt="Jumlah Halaman" style="width:50px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Menampilkan jumlah halaman pada Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill ">2</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left d-D" src="images/petunjuk pengunaan/kiri.png" alt="Kiri" style="width:30px;">
                <img class="float-md-left d-D" src="images/petunjuk pengunaan/kanan.png" alt="Kiri" style="width:30px;">
                <img class="float-right d-T" src="images/petunjuk pengunaan/kanan.png" alt="Kiri" style="width:30px;">
                <img class="float-right d-T" src="images/petunjuk pengunaan/kiri.png" alt="Kiri" style="width:30px;">
                <img class="d-M" src="images/petunjuk pengunaan/kiri.png" alt="Kiri" style="width:30px;">
                <img class="d-M" src="images/petunjuk pengunaan/kanan.png" alt="Kiri" style="width:30px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol previous dan next halaman Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">3</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/zoom.png" alt="Zoom" style="width:35px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol untuk memperbesar tampilan Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">4</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/perkecil.png" alt="Perkecil" style="width:35px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol untuk memperkecil tampilan Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">5</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/fullscreen.png" alt="fullscreen" style="width:35px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol untuk mode Fullscreen pada Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">6</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/play.png" alt="play" style="width:35px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol untuk mode Slideshow pada Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">7</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/list.png" alt="list" style="width:35px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol untuk menampilkan isi pada Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">8</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/halaman.png" alt="halaman" style="width:35px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol untuk menampilkan Halaman pada Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">9</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/share.png" alt="halaman" style="width:35px;">
              </div>
              <div class="col-md-8 col-sm-12">
                <h5 class="float-md-left">Tombol mode berbagi pada Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">10</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/volume.png" alt="volume" style="width:35px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol Play atau Mute audio Flipbook pada Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">11</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/unduh.png" alt="unduh" style="width:35px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol unduh Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
          <li class="list-group-item mb-4">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <span class="badge badge-danger badge-pill">12</span>
              </div>
              <div class="col-md-2 col-sm-12">
                <img class="float-md-left" src="images/petunjuk pengunaan/simpan.png" alt="simpan" style="width:30px;">
              </div>
              <div class="col-md-9 col-sm-12">
                <h5 class="float-md-left">Tombol menyimpan Halaman Buku Antikorupsi</h5>
              </div>
            </div>
          </li>
        </ul>
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
     <script type="text/javascript" src="js/navbar.js"></script>
     <!-- Optional JS -->
   </body>
 </html>
