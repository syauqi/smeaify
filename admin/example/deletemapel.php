<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$kode_mapel = $_GET['kode_mapel'];


// menghapus data dari database
mysqli_query($koneksi,"delete from mapel where kode_mapel='$kode_mapel'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>