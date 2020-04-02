<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nis = $_POST['nis'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

var_dump($nis);

// update data ke database
mysqli_query($koneksi,"update siswa set username='$username', password='$password', email='$email' where nis='$nis'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>