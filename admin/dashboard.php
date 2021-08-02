<?php  
include '../config/koneksi.php';
?>


<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>
              <?php
              $user = mysqli_query($bebas, "SELECT count(*) from user");
              $q = mysqli_fetch_array($user);
              ?>
              <?php
              echo "$q[0]"; 
              ?>
            </h3>
            <p>User</p>
          </div>

          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="home.php?menu=1" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>
              <?php
              $berita = mysqli_query($bebas, "SELECT count(*) from berita");
              $q = mysqli_fetch_array($berita);
              ?>
              <?php
              echo "$q[0]";
              ?>
                
              </h3>

            <p>Berita</p>
          </div>
          <div class="icon">
            <i class="fa fa-newspaper"></i>
          </div>
          <a href="home.php?menu=3" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?php
              $visi = mysqli_query($bebas, "SELECT count(*) from visimisi");
              $q = mysqli_fetch_array($visi);
              ?>
              <?php
              echo "$q[0]";
              ?></h3>

            <p>Visi Misi</p>
          </div>
          <div class="icon">
            <i class="fa fa-book-reader"></i>
          </div>
          <a href="home.php?menu=5" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      