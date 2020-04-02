  
<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['kirim'])) {
    $nis = $_POST['nis'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
  

    // include database connection file
    include_once("koneksi.php");
    // Insert user data into table
    mysqli_query($koneksi,"update siswa set  username='$username', password='$password', email='$email' where nis='$nis'");
    header("location:../../index.php");
}
?>