<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_ruangan = $_POST['id_ruangan'];
$nama_ruangan = $_POST['nama_ruangan'];


var_dump($id_ruangan);

// update data ke database
mysqli_query($koneksi,"update ruangan set nama_ruangan='$nama_ruangan' where id_ruangan='$id_ruangan'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>