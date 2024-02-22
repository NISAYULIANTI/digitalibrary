<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_ulasan = $_GET['id_ulasan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from ulasanbuku where id_ulasan='$id_ulasan'");
 
// mengalihkan halaman kembali ke index.php
header("location:ulasan.php?pesan=hapus");
 
?>