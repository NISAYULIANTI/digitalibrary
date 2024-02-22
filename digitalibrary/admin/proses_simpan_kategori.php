<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_kategori = $_POST['nama_kategori'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into kategoribuku values(0,'$nama_kategori')");
 
// mengalihkan halaman kembali ke kategori.php
header("location:kategori.php?pesan=simpan");
 
?>