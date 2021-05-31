<?php
// Include koneksi Database
include './config.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// Menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim','$alamat')");
// Mengembalikan ke halaman awal
header("location:./index.php");