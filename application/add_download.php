<?php
  require "config/connection.php";
  if(isset($_GET['read']))
  {
    $id = mysqli_real_escape_string($conn, stripslashes(htmlspecialchars( $_GET['read'] ) ) );
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
        header("Location: index.php");
        exit;
      }
    } else {
        header("Location: index.php");
        exit;
    }
  }
?>
