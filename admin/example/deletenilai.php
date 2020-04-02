<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_nilai = $_GET['id_nilai'];


// menghapus data dari database
mysqli_query($koneksi,"delete from nilai where id_nilai='$id_nilai'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>