  
<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['kirim'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $kode_mapel = $_POST['kode_mapel'];
    $nama_mapel = $_POST['nama_mapel'];
  

    // include database connection file
    include ("koneksi.php");
    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO kontrak (id,nis,nama_siswa,kode_mapel,nama_mapel) VALUES('$id','$nis','$nama_siswa','$kode_mapel','$nama_mapel')");
    header("location:../example/datakontrak.php");
}
?>