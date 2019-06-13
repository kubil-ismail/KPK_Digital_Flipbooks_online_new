<?php
  require "config/connection.php";

  if(isset($_POST['button'])) {

    $nama = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['nama']) ));
    $email = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['email']) ));
    $tlpn = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['tlpn']) ));
    $subject = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['subject']) ));
    $pesan = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['message']) ));

    $final_pesan  = "Email info from KPK flipbook Website \n \n";
    $final_pesan .= "Nama : $nama \n";
    $final_pesan .= "Email : $email \n";
    $final_pesan .= "No Tlpn : $tlpn \n";

    // Time Zone
    date_default_timezone_set("Asia/Jakarta");
    $final_pesan .= "Waktu : ".date("H:i")." WIB\n\n";
    $final_pesan .= "Pesan : \n".$pesan."\n \n";

    $final_pesan .= "GEDUNG MERAH PUTIH KPK Jln. Kuningan Persada Kav. 4 Jakarta Selatan 12950 \n";
    $final_pesan .= "Telp : (021) 2557 8300 \n";
    $final_pesan .= "Faks : (021) 2557 8333 \n";
    $final_pesan .= "Call Center: 198 \n";
    $final_pesan .= "Email : informasi@kpk.go.id";

    $query = mysqli_query($conn, "INSERT INTO contact SET nama='$nama', email='$email', tlpn='$tlpn', subject='$subject', pesan='$pesan', created_at=now()");

    if(!$query) {
      $error = true;
    } else {
      if (mail($Config_Email, $subject , $final_pesan)) {
        $error = false;
      } else {
        $error = true;
      }
    }

  }

?>
<!DOCTYPE html>
 <html>
   <head>
     <title>Buku Antikorupsi | Kontak</title>
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
     <link rel="stylesheet" href="css/kontak.css">
     <link rel="stylesheet" href="css/footer.css">
     <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
     <style media="screen">
         @media (min-width: 801px){
           .form-container {
             padding: 0 180px;
           }
         }
     </style>
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
             <li class="nav-item mx-4">
               <a class="nav-link clr-white" href="petunjuk">Petunjuk</a>
             </li>
             <li class="nav-item mx-4 nav-active bg-red-light">
               <a class="nav-link clr-white d-D" href="#" style="color: white !important;">Kontak</a>
               <a class="nav-link clr-white d-T" href="#" style="color: white !important;" data-toggle="collapse" data-target="#navbarNav">Kontak</a>
               <a class="nav-link clr-white d-M" href="#" style="color: white !important;" data-toggle="collapse" data-target="#navbarNav">Kontak</a>
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
          <div class="carousel-caption carousel-caption-1 text-right">
            <div class="block float-right">
            <h1><b>Kontak Kami</b></h1>
            </div>
          </div>
          <img src="images/Slider/Group 124.png" class="d-block w-100" alt="Banner Peunjuk Penggunaan">
        </div>
      </div>
    </div>
    <!-- End Of DesktopCarousel -->

    <!-- TabletCarousel -->
    <div id="TabletCarousel" class="carousel slide TabletCarousel d-T" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-caption carousel-caption-1 text-right">
            <div class="block float-right">
            <h1><b>Kontak Kami</b></h1>
            </div>
          </div>
          <img src="images/Slider/Group 124.png" class="d-block w-100" alt="Banner Peunjuk Penggunaan">
        </div>
      </div>
    </div>
    <!-- End Of TabletCarousel -->

    <!-- MobileCarousel -->
    <div id="MobileCarousel" class="carousel slide MobileCarousel d-M" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-3 active">
          <div class="carousel-caption text-center">
            <h1 style="color:#c71a00; font-size: 25px;"><b>Kontak Kami</b></h1>
          </div>
          <img src="images/Slider/Group 125.png" class="d-block w-100" alt="Banner Peunjuk Penggunaan">
        </div>
      </div>
    </div>
    <!-- End Of MobileCarousel -->

    <!-- Kontak -->
    <div class="petunjuk mt-5" id="petunjuk">
      <p>Tulis saran dan pertanyaan kamu di sini</p>
      <!-- notif -->
      <div class="container">
      <?php if (isset($error)): ?>
        <?php if ($error == true): ?>
        <div class="mt-2 alert alert-danger">
          <b>Pesan Gagal Terkirim</b> <br>
          Pastikan bahwa semua form di bawah telah terisi dengan benar
        </div>
        <?php else: ?>
        <div class="mt-2 alert alert-success">
          <b>Pesan Berhasil Terkirim</b> <br>
          Terimakasih atas tanggapan anda
        </div>
        <?php endif; ?>
      <?php endif; ?>
      </div>
    </div>
    <!-- End Of Kontak -->

    <!-- Form -->
    <div class="form ">
      <div class="container form-container">
        <form method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap...." class="validate" required>
          </div>
          <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Alamat Email...." class="validate">
          </div>
          <div class="form-group">
            <label for="tlpn">Nomor Telepon</label>
            <input type="text" name="tlpn" class="form-control" id="tlpn" placeholder="Nomor Telepon....">
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject...." required>
          </div>
          <div class="form-group">
            <label for="pesan">Pesan Anda</label>
            <textarea class="form-control" name="message" id="pesan" rows="7"  placeholder="Pesan Anda...." required></textarea>
          </div>
          <div class="form-group text-center send">
            <button class="btn btn-danger shadow-sm" type="submit" name="button">Kirim</button>
          </div>
        </form>
      </div>
    </div>
    <!-- End Of Form -->

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
