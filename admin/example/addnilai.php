
  
<?php


// if(isset($_POST['kirim'])) {
//     $id_nilai = $_POST['id_nilai'];
//     $nis = $_POST['nis'];
//     $nama_siswa =$_POST['nama_siswa'];
//     $kode_mapel = $_POST['kode_mapel'];
//     $nilai = $_POST['nilai'];


//     include_once('koneksi.php');


//     $result = mysqli_query($koneksi, "INSERT INTO nilai(id_nilai,nis,nama_siswa,kode_mapel,nilai) VALUES('$id_nilai','$nis','$nama_siswa','$kode_mapel','$nilai')");
//     header("location:../example/datanilai.php");
// }



// Check If form submitted, insert form data into users table.
if (isset($_POST['kirim'])) {
    $id_nilai = $_POST['id_nilai'];
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $kode_mapel = $_POST['kode_mapel'];
    $nilai = $_POST['nilai'];


    include_once('koneksi.php');


    // include database connection file
    include_once("koneksi.php");

    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO nilai(id_nilai,nis,nama_siswa,kode_mapel,nilai) VALUES('$id_nilai','$nis','$nama_siswa','$kode_mapel','$nilai')");
    header("location:../index.php");
}
?>
