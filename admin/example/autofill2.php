<?php
include 'koneksi.php';
$nis = $_GET['nis'];
$query = mysqli_query($koneksi, "select * from siswa where nis='$nis'");
$mapel = mysqli_fetch_array($query);
$data = array(
    'nama_siswa' => $mapel['username']);
echo json_encode($data);