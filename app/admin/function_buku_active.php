<?php

  require "../../config/connection.php";
  if(!isset($_SESSION['login'])) {

      header("Location: ./login.php");
      exit;

  }

  if(!isset($_GET['id'])) {
      header("Location: ./admin_buku.php");
      exit;
  }

  $id = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_GET['id']) ));

  $active = mysqli_query($conn, "UPDATE `pdf` SET `pdf_status_id` = '1' WHERE `pdf`.`id` = '$id' ");
  header("Location: ./admin_buku.php");
  exit;
