<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['Username'];
$password = md5($_POST['Password']);

 
// menyeleksi data user dengan username dan Password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="1"){
 
		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="2"){
		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "2";
		// alihkan ke halaman dashboard pegawai
		header("location:petugas/index.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="3"){
		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "3";
		// alihkan ke halaman dashboard pengurus
		header("location:peminjam/index.php");
 
	}else{
		
		// alihkan ke halaman login kembali
		// header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>