<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$kode_mapel = $_POST['kode_mapel'];
$nama_mapel = $_POST['nama_mapel'];

var_dump($nis);

// update data ke database
mysqli_query($koneksi,"update kontrak set nis='$nis', nama_siswa='$nama_siswa', kode_mapel='$kode_mapel', nama_mapel='$nama_mapel' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>