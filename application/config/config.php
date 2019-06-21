<?php
require_once 'db.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();

//melakukan koneksi ke database
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
?>
