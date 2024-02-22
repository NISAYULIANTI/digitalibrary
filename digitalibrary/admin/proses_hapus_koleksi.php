<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_kategoribuku = $_GET['id_kategoribuku'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from kategoribuku_relasi where id_kategoribuku='$id_kategoribuku'");
 
// mengalihkan halaman kembali ke index.php
header("location:koleksi.php?pesan=hapus");
 
?>