<?php 
// koneksi database
include '../koneksi.php';
   
// menangkap data yang di kirim dari form
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];
 
// menginput data ke database
mysqli_query($koneksi,"update kategoribuku set nama_kategori='$nama_kategori' where id_kategori='$id_kategori'");
 
// mengalihkan halaman kembali ke kategori.php
header("location:kategori.php?pesan=update");
 
?>