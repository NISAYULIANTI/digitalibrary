<?php 
// koneksi database
include '../koneksi.php';
   
// menangkap data yang di kirim dari form
$id_ulasan = $_POST['id_ulasan'];
$id_user = $_POST['id_user'];
$id_buku = $_POST['id_buku'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];
 
// menginput data ke database
//mysqli_query($koneksi,"update ulasanbuku set id_user='$id_user', id_buku='$id_buku', ulasan='$ulasan', rating='$rating' where id_ulasan='$id_ulasan'");
mysqli_query($koneksi,"UPDATE `ulasanbuku` SET `id_user` = '$id_user', `id_buku` = '$id_buku', `ulasan` = '$ulasan', `rating` = '$rating' WHERE id_ulasan='$id_ulasan'");

// mengalihkan halaman kembali ke kategori.php
header("location:ulasan.php?pesan=update");
 
?>