<?php
require "../config/connection.php";
if(!isset($_SESSION['login'])) {
    header("Location: ./login.php");
    exit;
}
//memasukkan file config.php
include("../config/config.php");

//mendefinisikan folder upload
define("UPLOAD_DIR", "../output_pdf/New Pdf/");

if (!empty($_FILES["media"])) {
	$media	= $_FILES["media"];
	$ext	= pathinfo($_FILES["media"]["name"], PATHINFO_EXTENSION);
	$size	= $_FILES["media"]["size"];

	if ($media["error"] !== UPLOAD_ERR_OK) {
		echo '<div class="alert alert-warning">Gagal upload file.</div>';
		exit;
	}

	// filename yang aman
	$name = preg_replace("/[^A-Z0-9._-]/i", "_", $media["name"]);

	// mencegah overwrite filename
	$i = 0;
	$parts = pathinfo($name);
	while (file_exists(UPLOAD_DIR . $name)) {
		$i++;
		$name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
	}

	// Upload Image
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah gambar tidak di upload
	if( $error === 4){
		echo "<script>
				alert('Masukan gambar terlebih dahulu');
				</script>";
	}

	//cek apakah yang diupload gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Yang anda masukan bukan gambar');
				</script>";
	}

	//generate nama baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	$kategori_id = mysqli_real_escape_string($conn,htmlspecialchars($_POST['kategori_id']));
	$sub_kategori = mysqli_real_escape_string($conn,htmlspecialchars($_POST['sub_kategori_id']));
	$pdf_thumb = 'output_pdf/New Pdf/'.$namaFileBaru;
	$pdf_title = mysqli_real_escape_string($conn,htmlspecialchars($_POST['pdf_title']));
	$pdf_desc = mysqli_real_escape_string($conn,htmlspecialchars($_POST['pdf_desc']));


	//Conversion
	if ($size >= 1073741824)
  {
      $size = number_format($size / 1073741824, 2);
  }
  elseif ($size >= 1048576)
  {
      $size = number_format($size / 1048576, 2);
  }
  elseif ($size < 1048576)
  {
      $size = number_format($size / 1048576, 1);
  }

	$pdf_size = $size;
	$pdf_url = 'output_pdf/New Pdf/'.$name;
	$pdf_name = $parts["filename"];
	$pdf_modal = 'default';
	$pdf_read_count = 0;
	$pdf_download_count = 0;
	$pdf_status_id = 1;

	if ($ext == 'pdf') {
		$cover_success = move_uploaded_file($tmpName, '../output_pdf/New Pdf/' . $namaFileBaru);
		$success = move_uploaded_file($media["tmp_name"], UPLOAD_DIR . $name);
		if ($cover_success && $success) {
			$in = $conn->query("INSERT INTO pdf VALUES('','$kategori_id', '$sub_kategori', '$pdf_thumb', '$pdf_title', '$pdf_desc', '$pdf_size', '$pdf_url', '$pdf_name', '$pdf_modal', '$pdf_read_count', '$pdf_download_count', '$pdf_status_id')");
			$q = $conn->query("SELECT id FROM pdf ORDER BY id DESC LIMIT 1");
			$rq = $q->fetch_assoc();
			echo $rq['id'];
			exit;
		}
	} else {
		exit;
	}
	chmod(UPLOAD_DIR . $name, 0644);
}
?>
