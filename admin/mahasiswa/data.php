<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php
session_start();
include "../example/koneksi.php";
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
   Profile Mu
  </title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0 pb-0" href="../../user.php">
      <p class="text-info text-uppercase font-weight-bold" style="font-family:montserrat,sans-serif !important; font-size:35px;">&mdash;&mdash;SISWA</p>
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../index.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
       <!-- Navigation -->
       <ul class="navbar-nav mt--3">
          <li class="nav-item  class=" >
          <a class=" nav-link  " href=" ../user.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="./mahasiswa/data.php">
              <i class="ni ni-circle-08 text-red"></i> Profile Kamu!
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="dataguru.php">
              <i class="ni ni-single-02 text-yellow"></i> Guru Kamu!
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="datajadwal.php">
              <i class="ni ni-book-bookmark text-purple"></i> Jadwal Kamu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="dataruangan.php">
              <i class="ni ni-building text-green"></i> Ruangan Kamu!
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="datamapel.php">
              <i class="ni ni-single-copy-04 text-red"></i> Mapel Kamu!
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="datanilai.php">
              <i class="ni ni-hat-3 text-blue"></i> Nilai Kamu!
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="datakontrak.php">
              <i class="ni ni-collection text-red"></i> Kontrak mapel.
            </a>
          </li>
        </ul>
        <!-- Divider -->
       
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h1 mb-0 text text-white text-capitalize d-none d-lg-inline-block" href="../user.php" style="font-family:montserrat,sans serif !important; font-size:50px;">Data Kamu.</a>
        <!-- Form -->
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.svg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold">Selamat datang &mdash; <?=$_SESSION['username'];?>!</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-10">
            <h1 class="display-2 text-white">Hello, <b><?=$_SESSION['username'];?>!</b></h1>
            <p class="text-white mt-0 mb-5" style="letter-spacing:0px;">Selamat datang di halaman profil kamu!. Klik tombol dibawah untuk melakukan edit profile, <br> dan edit password. <br> <b> Perlu diperhatikan mengubah password harus disertai izin administrator.</b><br> guna dengan mencegah lupa password</p>
            <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-info text-white" style="width: 40%;">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <?php
	include 'koneksi.php';
  $username = $_SESSION['username'];
	$data = mysqli_query($koneksi,"select * from siswa where username='$username'");
	while($d = mysqli_fetch_array($data)){
		?>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" style="font-family: montserrat; font-size:50px; letter-spacing:-2px;" id="exampleModalLongTitle">Edit Profile</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mt--5">
        <form action="editprofile.php" method="post">
  <br>
  <div class="form-group">
    <label for="nis" class="font-weight-bold" style="font-family:montserrat; font-size:15px;">Nomor Induk Siswa</label>
    <input type="text" class="form-control"  required name="nis" readonly  value="<?php echo $d['nis'];?>">
  </div>
  <div class="form-group">
    <label for="username" class="font-weight-bold" style="font-family:montserrat; font-size:15px;">Nama Siswa</label>
    <input type="text" class="form-control" maxlength="50" required name="username"  value="<?php echo $d['username'];?>">
  </div>
  <div class="form-group">
    <label for="password" class="font-weight-bold" style="font-family:montserrat; font-size:15px;">Password</label>
    <input type="text" class="form-control"  required name="password" value="<?php echo $d['password'];?>">
  </div>
  <div class="form-group">
    <label for="email" class="font-weight-bold" style="font-family:montserrat; font-size:15px;">Email</label>
    <input type="email" class="form-control"  required name="email" value="<?php echo $d['email'];?>">
  </div>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" name="kirim" class="btn btn-primary">Update Profile!</button>
      </div>
</form>
      
    </div>
  </div>
</div>
 
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>
<?php 
	}
	?>
</html>