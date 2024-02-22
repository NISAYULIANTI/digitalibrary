<?php 
// koneksi database
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$id_buku = $_POST['id_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$status_peminjaman = $_POST['status_peminjaman'];

// menginput data ke database
// mysqli_query($koneksi,"insert into peminjaman values(0,'$id_user' ,'$id_buku', '$tanggal_peminjaman', '$tanggal_pengembalian', '$status_peminjaman')");
 
if (!$koneksi -> query("insert into peminjaman values(0,'$id_user' ,'$id_buku', '$tanggal_peminjaman', '$tanggal_pengembalian', '$status_peminjaman')")) 
{
    echo("Error description: " . $koneksi -> error);
}
// mengalihkan halaman kembali ke kategori.php
header("location:peminjaman.php?pesan=simpan");
 
?>