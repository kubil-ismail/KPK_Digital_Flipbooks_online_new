<?php

require_once 'db.php';
session_start();
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

//QUERY FUNCTION
function query($query){
  global $conn;
  $result = mysqli_query($conn,$query);
  $rows = [];

  while ( $row = mysqli_fetch_assoc($result)) {
    $rows[] =$row;
  }

  return $rows;
}

// GET PDF BY KATEGORI
function get_pdf($id){
  global $conn;

  $res = mysqli_query($conn, "SELECT * FROM pdf WHERE kategori_id=$id");
  $pdf = [];

  while($row = mysqli_fetch_assoc($res))
  {
    $pdf[] = $row;
  }

  return $pdf;
}

//GET PDF BY KATEGORI AND LIMIT
function get_pdf_limit($id)
{
  global $conn;

  $res = mysqli_query($conn, "SELECT * FROM pdf WHERE kategori_id=$id ORDER BY pdf_download_count DESC, pdf_read_count DESC LIMIT 0, 8");
  $pdf = [];

  while($row = mysqli_fetch_assoc($res))
  {
    $pdf[] = $row;
  }

  return $pdf;
}

// GET PDF BY group
function get_pdf_sub_f_menengah_dasar($id){
  global $conn;

  $res = mysqli_query($conn, "SELECT * FROM `pdf` WHERE sub_kategori = 'Pendidikan Dasar dan Menengah'");
  $pdf = [];

  while($row = mysqli_fetch_assoc($res))
  {
    $pdf[] = $row;
  }

  return $pdf;
}
function get_pdf_sub_f_tinggi($id){
  global $conn;

  $res = mysqli_query($conn, "SELECT * FROM `pdf` WHERE sub_kategori = 'Pendidikan Tinggi'");
  $pdf = [];

  while($row = mysqli_fetch_assoc($res))
  {
    $pdf[] = $row;
  }

  return $pdf;
}

//VIEW PDF
function view_pdf($id)
{
  global $conn;

  $res = mysqli_query($conn, "SELECT * FROM pdf WHERE id=$id");
  $pdf = [];

  while($row = mysqli_fetch_assoc($res))
  {
    $pdf[] = $row;
  }

  return $pdf;
}

//GET PDF JSON DATA
function get_pdf_json($id)
{
  global $conn;

  $id = $conn->real_escape_string($id);
  $res = mysqli_query($conn, "SELECT * FROM pdf WHERE id='$id'");

  $obj = mysqli_fetch_assoc($res);

  echo json_encode($obj);
}

function search($keyword){
  $query = "SELECT * FROM pdf WHERE pdf_title LIKE '%$keyword%'";
  return query($query);
}

function edit_pdf($data)
{
  global $conn;

  $id = htmlspecialchars($data["id"]);
  $kategori_id = htmlspecialchars($data["kategori_id"]);
  $sub_kategori_id = htmlspecialchars($data["sub_kategori_id"]);
  $pdf_thumb = htmlspecialchars($data["pdf_thumb"]);
  $pdf_title =htmlspecialchars($data["pdf_title"]);
  $pdf_desc = htmlspecialchars($data["pdf_desc"]);
  $pdf_size = htmlspecialchars($data["pdf_size"]);
  $pdf_url = htmlspecialchars($data["pdf_url"]);
  $pdf_modal = htmlspecialchars($data["pdf_modal"]);
  $pdf_read_count = htmlspecialchars($data["pdf_read_count"]);
  $pdf_download_count = htmlspecialchars($data["pdf_download_count"]);
  $pdf_status_id = 1;
  $pdf_name = $pdf_title.".pdf";

  //query insert data
  $query = "UPDATE pdf SET
        kategori_id = '$kategori_id',
        sub_kategori_id = '$sub_kategori_id',
        pdf_thumb = '$pdf_thumb',
        pdf_title = '$pdf_title',
        pdf_desc = '$pdf_desc',
        pdf_size = '$pdf_size',
        pdf_url = '$pdf_url',
        pdf_name = '$pdf_name',
        pdf_modal = '$pdf_modal',
        pdf_read_count = '$pdf_read_count',
        pdf_download_count = '$pdf_download_count',
        pdf_status_id = '$pdf_status_id'

        WHERE id = $id ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
