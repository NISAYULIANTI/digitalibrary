<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$id_buku = $_POST['id_buku'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];

// menginput data ke database
//mysqli_query($koneksi,"insert into ulasanbuku values(0,'$id_user' ,'$id_buku', '$ulasan', '$rating')");
mysqli_query($koneksi,"INSERT INTO `ulasanbuku` (`id_ulasan`, `id_user`, `id_buku`, `ulasan`, `rating`) VALUES (NULL,'$id_user' ,'$id_buku', '$ulasan', '$rating')");
 
// mengalihkan halaman kembali ke kategori.php
header("location:ulasan.php?pesan=simpan");
 
?>