<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_nilai = $_POST['id_nilai'];
$nis = $_POST['nis'];
$kode_mapel = $_POST['kode_mapel'];
$nilai = $_POST['nilai'];


var_dump($id_jadwal);

// update data ke database
mysqli_query($koneksi,"update nilai set nis='$nis', kode_mapel='$kode_mapel', nilai='$nilai' where id_nilai='$id_nilai'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>