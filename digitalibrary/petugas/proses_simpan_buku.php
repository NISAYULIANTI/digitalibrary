<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into buku values(0,'$judul','$penulis','$penerbit','$tahun_terbit','$stok')");
 
// mengalihkan halaman kembali ke kategori.php
header("location:buku.php?pesan=simpan");
 
?>