<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kode_mapel = $_POST['kode_mapel'];
$nama_mapel = $_POST['nama_mapel'];
$jam = $_POST['jam_mapel'];



var_dump($kode_mapel);

// update data ke database
mysqli_query($koneksi,"update mapel set  nama_mapel='$nama_mapel', jam_mapel='$jam' where kode_mapel='$kode_mapel'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>