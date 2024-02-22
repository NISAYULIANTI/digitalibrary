<?php 
// koneksi database
include '../koneksi.php';
  
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values(0,'$username','$password','$email','$nama_lengkap','$alamat','2')");
 
// mengalihkan halaman kembali ke kategori.php
header("location:users.php?pesan=simpan");
 
?>