<?php 
// koneksi database
include '../koneksi.php';
  
// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

if(!$password) {
    // menginput data ke database
    mysqli_query($koneksi,"update user set username='$username', email='$email', nama_lengkap='$nama_lengkap', alamat='$alamat' where id_user='$id_user'");

    // mengalihkan halaman kembali ke buku.php
    header("location:users.php?pesan=update");
} else {
    mysqli_query($koneksi,"update user set username='$username', password='$password', email='$email', nama_lengkap='$nama_lengkap', alamat='$alamat' where id_user='$id_user'");
    
    header("location:users.php?pesan=update");
}
?>