<?php

  require "config/connection.php";

  if(!isset($_GET['id'])) {
    header("Location: ./index.php");
    exit;
  }

  $id = mysqli_real_escape_string($conn, stripslashes(htmlspecialchars( $_GET['id'] ) ) );

    if(!is_numeric( $id )) {
      header("Location: ./index.php");
      exit;
    }

    $data = mysqli_query($conn, "SELECT * FROM pdf WHERE id='$id'");
    if(mysqli_num_rows($data) != 1) {
      header("Location: index.php");
      exit;
    }

  $data = view_pdf($id)[0];

  $count = $data['pdf_read_count']+1;
  $query = mysqli_query($conn, "UPDATE pdf SET pdf_read_count='$count' WHERE id='$id'");

  if(!$query) {
    echo "<script>alert('pdf tidak ada');document.location.href='index.php';</script>";
    exit;
  }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <title><?= $data['pdf_url'] ?></title>
     <!-- favicon  -->
     <link rel="shortcut icon" href="images/Logo KPK/favicon.png">
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/flipbook.style.css">
     <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
     <meta name="description" content="Dengan membaca, kamu telah berpartisipasi dalam upaya pemberantasan korupsi. Bagikan semangat antikorupsi di sekitarmu">
     <meta name="author" content="Buku Antikorupsi">
   </head>
   <body>
     <input type="hidden" name="" id="data" value="<?= $data['pdf_modal'] ?>">
     <input type="hidden" name="" id="url_hosting" value="<?= BASEURL; ?>">
     <input type="hidden" name="" id="pdf_url" value="<?= $data['pdf_url'] ?>">
      <div id="page">

      </div>

      <script src="js/jquery-3.4.1.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/flipbook.min.js"></script>
      <script src="js/configPdf.js"></script>
      <script type="text/javascript">

        $("#page").flipBook(data[$('#data').val()]);
      </script>
   </body>
 </html>
