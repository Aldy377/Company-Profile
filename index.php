<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Smk Marhas</title>
    
    <!-- Bootstrap core CSS -->
    <link href="f/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="f/assets/css/fontawesome.css">
    <link rel="stylesheet" href="f/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="f/assets/css/owl.css">
    <link rel="stylesheet" href="f/assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Smk</em> Marhas</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Beranda</a></li>
        <li><a href="#section4">Berita</a></li>
        
          </ul>
        </li>
        
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Jurusan Rekayasa Perangkat Lunak dan Permesinan</h6>
              <h2><em>Kelas</em> Anda</h2>
              
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
         <div class="col-lg-2 col-12">
         </div>
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Visi</h4>
              </div>
              <?php
              include 'config/koneksi.php';
              $s = mysqli_query($bebas, "SELECT * FROM visimisi WHERE type = 'visi'");
              while ($d = mysqli_fetch_assoc($s)){


              ?>
              <div class="content-hide">
                <p>
                  <?php 
                  echo $d['keterangan'];
                   ?>
                </p>
                
            </div>
            <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Misi</h4>
              </div>
               <?php
              include 'config/koneksi.php';
              $s = mysqli_query($bebas, "SELECT * FROM visimisi WHERE type = 'misi'");
              while ($d = mysqli_fetch_assoc($s)){
              ?>
              <div class="content-hide">
                <p><?php 
                  echo $d['keterangan'];
                   ?></p>
                
            </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
       
        <div class="col-md-12">
         
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Berita</h2>
          </div>
        </div>

        <div class="owl-carousel owl-theme">
          <?php 
          include 'config/koneksi.php';
          $q = mysqli_query($bebas,"SELECT * FROM berita");
          while($w = mysqli_fetch_assoc($q)){

           ?>
          
          <div class="item">
            <img src="admin/berita/foto/<?php echo $w['foto']?>" width="100" height="100">
            <div class="down-content">
              <h4><?php echo $w['judul'] ?></h4>
              <h5><?php echo $w['jenis_berita'] ?></h5>
              <p><?php echo $w['keterangan'] ?></p>
              <div class="text-button-pay">
                <?php echo $w['tanggal'] ?>
              </div>
            </div>
          </div>
          <?php 
          }
           ?>
        </div>
      </div>
    </div>
  </section>
  

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          
          </div>
        </div>
        
        </div>
      </div>
    </div>
  </section>


  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Smk Marhas  
          
           | Design: <a href="login.php">Login</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="f/vendor/jquery/jquery.min.js"></script>
    <script src="f/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="f/assets/js/isotope.min.js"></script>
    <script src="f/assets/js/owl-carousel.js"></script>
    <script src="f/assets/js/lightbox.js"></script>
    <script src="f/assets/js/tabs.js"></script>
    <script src="f/assets/js/video.js"></script>
    <script src="f/assets/js/slick-slider.js"></script>
    <script src="f/assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>