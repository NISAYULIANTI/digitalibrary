<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// koneksi database
include '../koneksi.php';
   
// menangkap data yang di kirim dari form
$id_peminjaman = $_POST['id_peminjaman'];
$id_user = $_POST['id_user'];
$id_buku = $_POST['id_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$status_peminjaman = $_POST['status_peminjaman'];

// menginput data ke database
//mysqli_query($koneksi,"update peminjaman set id_user='$id_user', id_buku='$id_buku', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian', status_peminjaman='$status_peminjaman' where id_peminjaman='$id_peminjaman'");
// mysqli_query($koneksi,"UPDATE `peminjaman` SET `id_user` = '$id_user', `id_buku` = '$id_buku', `tanggal_peminjaman` = '$tanggal_peminjaman', `tanggal_pengembalian` = '$tanggal_pengembalian', `status_peminjaman` = '$status_peminjaman' WHERE `peminjaman`.`id_peminjaman` = $id_peminjaman"); 
if (!$koneksi -> query("UPDATE `peminjaman` SET `id_user` = '$id_user', `id_buku` = '$id_buku', `tanggal_peminjaman` = '$tanggal_peminjaman', `tanggal_pengembalian` = '$tanggal_pengembalian', `status_peminjaman` = '$status_peminjaman' WHERE `peminjaman`.`id_peminjaman` = $id_peminjaman")) {
    echo("Error description: " . $koneksi -> error);
  }
// mengalihkan halaman kembali ke kategori.php
header("location:peminjaman.php?pesan=update");
 
?><?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// koneksi database
include '../koneksi.php';
   
// menangkap data yang di kirim dari form
$id_peminjaman = $_POST['id_peminjaman'];
$id_user = $_POST['id_user'];
$id_buku = $_POST['id_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$status_peminjaman = $_POST['status_peminjaman'];

// menginput data ke database
//mysqli_query($koneksi,"update peminjaman set id_user='$id_user', id_buku='$id_buku', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian', status_peminjaman='$status_peminjaman' where id_peminjaman='$id_peminjaman'");
// mysqli_query($koneksi,"UPDATE `peminjaman` SET `id_user` = '$id_user', `id_buku` = '$id_buku', `tanggal_peminjaman` = '$tanggal_peminjaman', `tanggal_pengembalian` = '$tanggal_pengembalian', `status_peminjaman` = '$status_peminjaman' WHERE `peminjaman`.`id_peminjaman` = $id_peminjaman"); 
if (!$koneksi -> query("UPDATE `peminjaman` SET `id_user` = '$id_user', `id_buku` = '$id_buku', `tanggal_peminjaman` = '$tanggal_peminjaman', `tanggal_pengembalian` = '$tanggal_pengembalian', `status_peminjaman` = '$status_peminjaman' WHERE `peminjaman`.`id_peminjaman` = $id_peminjaman")) {
    echo("Error description: " . $koneksi -> error);
  }
// mengalihkan halaman kembali ke kategori.php
header("location:peminjaman.php?pesan=update");
 
?>