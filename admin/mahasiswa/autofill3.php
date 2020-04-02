<?php
include 'koneksi.php';
$nis = $_GET['nis'];
$query = mysqli_query($koneksi, "select * from kontrak where nis='$nis'");
$mapel = mysqli_fetch_array($query);
$data = array(
            // 'nama_siswa'      =>  $mapel['username']);
            'nama_siswa'      =>  $mapel['nama_siswa'],
            'kode_mapel'   =>  $mapel['kode_mapel'],);
 echo json_encode($data);
?>