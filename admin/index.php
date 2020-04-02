
<?php
session_start();
include "../koneksi.php";
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
    Pengelolaan Admin
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-1 pb-0" href="./index.php">
       <p class="text-primary text-uppercase font-weight-bold" style="font-family:montserrat,sans-serif !important; font-size:35px;">&mdash;&mdash;ADMIN</p>
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
                <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">S!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My tets</span>
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
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
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
        <!-- <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form> -->
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  class=" active" ">
          <a class=" nav-link active " href=" ./index.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./example/data.php">
              <i class="ni ni-circle-08 text-red"></i> Data Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./example/dataguru.php">
              <i class="ni ni-single-02 text-yellow"></i> Data Guru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./example/datajadwal.php">
              <i class="ni ni-book-bookmark text-purple"></i> Data Jadwal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./example/dataruangan.php">
              <i class="ni ni-building text-green"></i> Data Ruangan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./example/datamapel.php">
              <i class="ni ni-single-copy-04 text-red"></i> Data Mapel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./example/datanilai.php">
              <i class="ni ni-hat-3 text-blue"></i> Data Nilai Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./example/datakontrak.php">
              <i class="ni ni-collection text-red"></i> Data Kontrak Mapel
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h1 mb-0 text text-white text-capitalize d-none d-lg-inline-block" href="./index.php" style="font-family:montserrat,sans serif !important; font-size:40px;">Dashboard.</a>
        <!-- Form -->
        <!-- <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Cari Disini .." type="text">
            </div>
          </div>
        </form> -->
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.svg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Selamat datang &mdash; <?=$_SESSION['username'];?>!</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Selamat Datang!</h6>
              </div>
             
             
              <div class="dropdown-divider"></div>
              <a href="../logout.php" class="dropdown-item">
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
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6" data-aos="fade-left" data-aos-duration="2000">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-0">Jumlah Siswa</h5>
                      <span class="h2 font-weight-bold mb-0"><?php
                      include "../koneksi.php";
                      $count = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM siswa"));
                      echo $count;
                
                    ?>
                     


                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6" data-aos="fade-left" data-aos-duration="1900">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-0">Jumlah Guru</h5>
                      <span class="h2 font-weight-bold mb-0">

                      <?php
                      include "../koneksi.php";
                      $count = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM guru"));
                      echo $count;
                
                    ?>



                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6"data-aos="fade-left" data-aos-duration="1800">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-0">Jumlah Ruangan</h5>
                      <span class="h2 font-weight-bold mb-0">
                      <?php
                      include "../koneksi.php";
                      $count = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ruangan"));
                      echo $count;
                
                    ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="ni ni-app"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6"data-aos="fade-left" data-aos-duration="1700">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-0">Jumlah Mapel</h5>
                      <span class="h2 font-weight-bold mb-0">
                      <?php
                      include "../koneksi.php";
                      $count = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM mapel"));
                      echo $count;
                
                    ?>

                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="ni ni-book-bookmark"></i>
                      </div>
                    </div>
                  </div>
                 
                
                </div>

                
              </div>
              <br>
            </div>
          
            <div class="col-xl-4 col-lg-6"data-aos="fade-left" data-aos-duration="1600">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-1">Kelola Database</h5>
                      <span class="h1 font-weight-bold mb-0">
                        Data Siswa
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                        <i class="ni ni-circle-08"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-1 mb-0 text-muted text-sm">
                   <a href="example/data.php"> <span class="text-nowrap">Klik Disini</span></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6"data-aos="fade-left" data-aos-duration="1500">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-1">Kelola Database</h5>
                      <span class="h1 font-weight-bold mb-0">
                        Data Guru
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-1 mb-0 text-muted text-sm">
                   <a href="example/dataguru.php"> <span class="text-nowrap">Klik Disini</span></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6"data-aos="fade-left" data-aos-duration="1400">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-1">Kelola Database</h5>
                      <span class="h1 font-weight-bold mb-0">
                        Data Ruangan
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="ni ni-shop"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-1 mb-0 text-muted text-sm">
                   <a href="example/dataruangan.php"> <span class="text-nowrap">Klik Disini</span></a>
                  </p>
                </div>
              </div>
              <br>
            </div>
            <div class="col-xl-6 col-lg-6"data-aos="fade-left" data-aos-duration="1300">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-1">Kelola Database</h5>
                      <span class="h1 font-weight-bold mb-0">
                        Data Mapel
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="ni ni-book-bookmark"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-1 mb-0 text-muted text-sm">
                   <a href="example/datamapel.php"> <span class="text-nowrap">Klik Disini</span></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6"data-aos="fade-left" data-aos-duration="1200">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-1">Kelola Database</h5>
                      <span class="h1 font-weight-bold mb-0">
                        Data Jadwal
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="ni ni-calendar-grid-58"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-1 mb-0 text-muted text-sm">
                   <a href="example/datajadwal.php"> <span class="text-nowrap">Klik Disini</span></a>
                  </p>
                </div>
              </div>
              <br>
            </div>
            <div class="col-xl-8 col-lg-12"data-aos="fade-left" data-aos-duration="1100">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-1">Kelola Database</h5>
                      <span class="h1 font-weight-bold mb-0">
                        Data Nilai Siswa
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="ni ni-hat-3"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-1 mb-0 text-muted text-sm">
                   <a href="example/datanilai.php"> <span class="text-nowrap">Klik Disini</span></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12"data-aos="fade-left" data-aos-duration="1000"  >
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-1">Kelola Database</h5>
                      <span class="h1 font-weight-bold mb-0">
                        Data Kontrak
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="ni ni-book-bookmark"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-1 mb-0 text-muted text-sm">
                   <a href="example/datakontrak.php"> <span class="text-nowrap">Klik Disini</span></a>
                  </p>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
   
      <!-- Footer -->
     
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
   AOS.init();
  </script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>