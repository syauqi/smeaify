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
include "koneksi.php";
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
    Data Ruangan
  </title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
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
      <a class="navbar-brand pt-0 pb-0" href="../index.php">
      <p class="text-info text-uppercase font-weight-bold" style="font-family:montserrat,sans-serif !important; font-size:35px;">&mdash;&mdash;SISWA</p>
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Edit</a>
            <a class="dropdown-item" href="#">Hapus action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"></a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.svg
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <!-- <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a> -->
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
              <a href="../index.php">
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
       
        <!-- Navigation -->
        <ul class="navbar-nav mt--3">
          <li class="nav-item  class=" >
          <a class=" nav-link  " href=" ../user.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="data.php">
              <i class="ni ni-circle-08 text-red"></i> Profile Kamu!
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="dataguru.php">
              <i class="ni ni-single-02 text-yellow"></i> Guru Kamu!
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="datajadwal.php">
              <i class="ni ni-book-bookmark text-purple"></i> Jadwal Kamu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="dataruangan.php">
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
        <hr class="my-3">
        <!-- Heading -->
        
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h1 mb-0 text text-white text-capitalize d-none d-lg-inline-block" href="./index.php" style="font-family:montserrat,sans serif !important; font-size:40px;">Data Ruangan.</a>
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
                  <span class="mb-0 text-sm  font-weight-bold">Selamat datang &mdash; <?=$_SESSION['username'];?> !</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <!-- <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a> -->
              <div class="dropdown-divider"></div>
              <a href="../../logout.php" class="dropdown-item">
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
    <div class="header bg-gradient-info pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row" style="visibility: hidden">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-0">Jumlah Siswa</h5>
                      <span class="h2 font-weight-bold mb-0"><?php
                      include "../../koneksi.php";
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
                  <p class="mt-0 mb-0 text-muted text-sm">
                  
                  <span class="text-nowrap">Terdaftar Di Database</span>
                </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-0">Jumlah Guru</h5>
                      <span class="h2 font-weight-bold mb-0">

                      <?php
                      include "../../koneksi.php";
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
                  <p class="mt-0 mb-0 text-muted text-sm">
                  
                  <span class="text-nowrap">Terdaftar Di Database</span>
                </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-0">Jumlah Ruangan</h5>
                      <span class="h2 font-weight-bold mb-0">
                      <?php
                      include "../../koneksi.php";
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
                  <p class="mt-0 mb-0 text-muted text-sm">
                  
                  <span class="text-nowrap">Terdaftar Di Database</span>
                </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-capitalize text-muted mb-0">Jumlah Mapel</h5>
                      <span class="h2 font-weight-bold mb-0">
                      <?php
                      include "../../koneksi.php";
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
                  <p class="mt-0 mb-0 text-muted text-sm">
                  
                  <span class="text-nowrap">Terdaftar Di Database</span>
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--9">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
          <a href="">  <h1 class="mb-0 text-info"style="font-family:montserrat; font-size:40px;"> Data Ruangan  </h1></a>
            </div>
            <div class="table-responsive p-4">
              <table id="example"class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID Ruangan</th>
                    <th scope="col">Nama Ruangan</th>                 
                    <th scope="col"></th>
                  </tr>
                
                </thead>
                
                <tbody>
                <?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from ruangan");
		while($d = mysqli_fetch_array($data)){
			?>
                  <tr>
                    <th scope="row">
                    <?php echo $d['id_ruangan']; ?>
                    </th>
                    <td>
                    <?php echo $d['nama_ruangan']; ?>
                    </td>
                    
                    
                   
                   
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="editruangan.php?id_ruangan=<?php echo$d['id_ruangan'];?>">Edit</a>
                          <a class="dropdown-item" href="deleteruangan.php?id_ruangan=<?php echo$d['id_ruangan'];?>">Hapus</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  
                  <?php 
		}
		?>
                </tbody>
              </table>
            </div>
            <!-- <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->
          </div>
        </div>
      </div>
     
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://syauqizaidan.github.io" class="font-weight-bold ml-1" target="_blank">Syauqi Zaidan</a>
            </div>
          </div>
          <div class="col-xl-6">
            <!-- <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul> -->
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
$('#example').dataTable( {
  "language": {
    "paginate": {
      "previous": "&lt;",
      "next" : "&gt;",
    }
  }
} );
</script>

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
</html>