<?php 
// koneksi database
include '../koneksi.php';
   
// menangkap data yang di kirim dari form
$id_kategoribuku = $_POST['id_kategoribuku'];
$id_buku = $_POST['id_buku'];
$id_kategori = $_POST['id_kategori'];
 
// menginput data ke database
mysqli_query($koneksi,"update kategoribuku_relasi set id_buku='$id_buku', id_kategori='$id_kategori' where id_kategoribuku='$id_kategoribuku'");
 
// mengalihkan halaman kembali ke kategori.php
header("location:koleksi.php?pesan=update");
 
?>