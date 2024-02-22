<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_buku = $_POST['id_buku'];
$id_kategori = $_POST['id_kategori'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into kategoribuku_relasi values(0,'$id_buku' ,'$id_kategori')");
 
// mengalihkan halaman kembali ke kategori.php
header("location:koleksi.php?pesan=simpan");
 
?>