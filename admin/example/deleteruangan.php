<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_ruangan = $_GET['id_ruangan'];


// menghapus data dari database
mysqli_query($koneksi,"delete from ruangan where id_ruangan='$id_ruangan'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>