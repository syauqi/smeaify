<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kodeguru = $_POST['kodeguru'];
$namaguru = $_POST['namaguru'];
$kodemapel = $_POST['kodemapel'];


var_dump($kode_guru);

// update data ke database
mysqli_query($koneksi,"update guru set nama_guru='$namaguru', kode_mapel='$kodemapel' where kode_guru='$kodeguru'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>