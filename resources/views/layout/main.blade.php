<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Elakip | Version 3.0 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/feather/feather.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/mdi/css/materialdesignicons.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/ti-icons/css/themify-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/font-awesome/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/typicons/typicons.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/simple-line-icons/css/simple-line-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/css/vendor.bundle.base.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }} ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('staradmin/dist/assets/js/select.dataTables.min.css') }} ">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/css/style.css') }} ">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('staradmin/dist/assets/images/logo_den.png') }} " />
  </head>
  <body class="with-welcome-text">
    
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div style="text-align: center;">
            <a href="#" class="d-inline-block mt-2 mb-1">
                <img src="{{ asset('staradmin/dist/assets/images/logo_den.png') }}" class="rounded-circle img-fluid" width="70" height="70" alt="">
            </a>
        </div>
        
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Selamat Datang, <span class="text-black fw-bold">User</span></h1>
              <h3 class="welcome-sub-text">Capaian Pokja Perencanaan dan Keuangan </h3>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Pilih Tahun </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">2024 </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">2025 </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">2026 </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Pilih Triwulan </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Triwulan-I </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Triwulan-II </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Triwulan-III </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Triwulan-IV </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                <span class="input-group-addon input-group-prepend border-right">
                  <span class="icon-calendar input-group-text calendar-icon"></span>
                </span>
                <input type="text" class="form-control">
              </div>
            </li>
            <li class="nav-item">
              <form class="search-form" action="#">
                <i class="icon-search"></i>
                <input type="search" class="form-control" placeholder="Search Here" title="Search here">
              </form>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">Menu Utama</li>
            
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-title">Program Kegiatan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="/iku">IKU</a></li>
                  <li class="nav-item"><a class="nav-link" href="/kegiatan">Kegiatan</a>
                   
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-title">Pengaturan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/biro"> Biro </a></li>
                  <li class="nav-item"> <a class="nav-link" href="/pokja"> Pokja </a></li>
                  <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> Sub Pokja </a></li> -->
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Durasi Monitoring </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Pengguna </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Password </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="menu-icon mdi mdi-logout"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
        </nav>

@yield('content')
        <!-- partial -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Sekretariat Jenderal Dewan Energi Nasional</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">2024 © e-Lakip Version 3.0.0</span>
            </div>
          </footer>
          <!-- partial -->
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('staradmin/dist/assets/vendors/js/vendor.bundle.base.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }} "></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('staradmin/dist/assets/vendors/chart.js/chart.umd.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/vendors/progressbar.js/progressbar.min.js') }} "></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('staradmin/dist/assets/js/off-canvas.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/js/template.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/js/settings.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/js/hoverable-collapse.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/js/todolist.js') }} "></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('staradmin/dist/assets/js/jquery.cookie.js') }} " type="text/javascript"></script>
    <script src="{{ asset('staradmin/dist/assets/js/dashboard.js') }} "></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>