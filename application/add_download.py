<?php
  require "config/connection.php";
  use voku\helper\AntiXSS;
  require_once __DIR__ . '/vendor/autoload.php';
  $antiXss = new AntiXSS();

  if(isset($_GET['read']))
  {
    if (filter_var($_GET['read'], FILTER_VALIDATE_INT) === false) {
      header("Location: home");
      exit;
    }
    $id = mysqli_real_escape_string($conn, stripslashes(htmlspecialchars( $_GET['read'] ) ) );
    $id = $antiXss->xss_clean($id);

    $valid = mysqli_query($conn, "SELECT * FROM pdf WHERE id='$id'");
    $jumlah = mysqli_num_rows($valid);

    if ($jumlah<1) {
      header("Location: home");
      exit;
    }

    $count = (view_pdf($id)[0]['pdf_download_count'])+1;
    $query = mysqli_query($conn, "UPDATE pdf SET pdf_download_count='$count' WHERE id='$id'");

    if($query) {
      $query = mysqli_query($conn, "SELECT * FROM pdf WHERE id='$id'");
      if($query) {
        $data = mysqli_fetch_object($query);

        $file_url = $data->pdf_url;
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
        readfile($file_url); // do the double-download-dance (dirty but worky)
        exit;
      } else {
        header("Location: home");
        exit;
      }
    }
  } else {
    header("Location: home");
    exit;
  }
?>
