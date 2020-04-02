<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_jadwal = $_POST['id_jadwal'];
$nama_mapel = $_POST['nama_mapel'];
$nama_ruangan = $_POST['nama_ruangan'];
$hari = $_POST['hari'];


var_dump($id_jadwal);

// update data ke database
mysqli_query($koneksi,"update jadwal set nama_mapel='$nama_mapel', nama_ruangan='$nama_ruangan', hari='$hari' where id_jadwal='$id_jadwal'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>