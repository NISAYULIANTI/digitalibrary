<?php 
// koneksi database
include 'koneksi.php';
  
// menangkap data yang di kirim dari form

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values(0,'$username','$password','$email','$nama_lengkap','$alamat','3')");
 //Level 3 untuk peminjam buku

// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=info_daftar");
 
?>