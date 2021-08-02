<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="template/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="template/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="template/assets/libs/css/style.css">

    <link href="template/assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="template/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="template/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="template/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="template/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- <link rel="stylesheet" href="template/assets/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->

    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                    
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="template/assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">NAMA USER </h5>
                                    <span class="status"></span><span class="ml-2">Level</span>
                                </div>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->

        <!-- Sidemenu -->
        <?php 
        include 'sidemenu.php';
        ?>
        

        <!-- Isi Halaman  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
        <?php
                if(!empty($_GET['menu'])){
                    $menu = $_GET['menu'];
                    if($menu==1){
                      include('user/user.php');
                    }elseif ($menu==2) {
                      include('user/euser.php');
                    }elseif ($menu==3) {
                      include('vdm/vdm.php');
                    }elseif ($menu==4) {
                      include('vdm/evdm.php');
                    }elseif ($menu==5) {
                      include('kat/kat.php');
                    }elseif ($menu==6) {
                      include('kat/ekat.php');
                    }elseif ($menu==7) {
                      include('berita/berita.php');
                    }elseif ($menu==8) {
                      include('berita/eberita.php');
                    }else{
                      include('errors/404.php');
                    }
                }else{
                    include('berita/berita.php');
                }
            ?>
        ?>
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <!-- <script src="template/assets/vendor/jquery/jquery-3.3.1.min.js"></script> -->
    <script src="template/assets/js/jquery/jquery.min.js"></script>
    
    
    <!-- Posisi Harus dibawah databales js -->

    <!-- bootstap bundle js -->
    <script src="template/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="template/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="template/assets/libs/js/main-js.js"></script>

    <!-- chart chartist js -->
    <script src="template/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="template/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="template/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="template/assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="template/assets/libs/js/dashboard-ecommerce.js"></script>
    <script src="template/assets/datatables/jquery.dataTables.min.js"></script>
    <script src="template/assets/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="template/assets/js/demo/datatables-demo.js"></script>
</body>
 
</html>