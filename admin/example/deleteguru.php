<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$kodeguru = $_GET['kode_guru'];


// menghapus data dari database
mysqli_query($koneksi,"delete from guru where kode_guru='$kodeguru'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>