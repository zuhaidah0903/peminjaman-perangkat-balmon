<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Balmon Pontianak</title>
    <link rel="shortcut icon" href="<?php echo base_url('images/logobalmon.png')?>">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/landing_page_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>assets/landing_page_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'  rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url() ?>assets/landing_page_assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/landing_page_assets/css/creative.min.css" rel="stylesheet">

  </head>

  <!-- <body class="hold-transition login-page" style="background:url(../images/balmon.jpeg)
no-repeat center center fixed; background-size: cover;
 -webkit-background-size: cover; 
 -moz-background-size: cover; -o-background-size: cover;">
</body -->


  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Peminjaman Perangkat</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2 class="text-uppercase">
              <strong>Aplikasi Peminjaman Perangkat Pada Balai Monitor Spektrum Frekuensi Radio Kelas II Pontianak</strong>
            </h2> 
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded">Aplikasi Untuk Peminjaman Perangkat Pada Balmon Pontianak</p>
            <!-- <p class="text-monospace ">
              <?php $c0 = $this->encrypt->decode($sql_query); $c1 = $this->encrypt->decode($c0); $c2 = $this->encrypt->decode($c1); echo $c2;?>
              <?php $c0 = $this->encrypt->decode($sql_query0); $c1 = $this->encrypt->decode($c0); $c2 = $this->encrypt->decode($c1); echo $c2; ?>
            </p>  -->
            <a class="btn btn-primary btn-xl mb-1 js-scroll-trigger" href="<?php echo base_url('admin') ?>"><?php echo $logged_petugas ?></a>
            <a class="btn btn-primary btn-xl mb-1 js-scroll-trigger" href="<?php echo base_url('member') ?>"><?php echo $logged_peminjam ?></a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Peminjaman Perangkat Guna Mendukung Kegiatan Instansi</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Balai Monitor Spektrum Frekuensi Radio Kelas II Pontianak memiliki perangkat-perangkat yang merupakan perangkat milik negara. Perangkat-perangkat tersebut digunakan untuk mendukung kegiatan Instansi agar lebih cepat dan efisien.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#page-top">PINJAM</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Pelayanan</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-book text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Pinjam</h3>
              <p class="text-muted mb-0">Pinjam perangkat yang anda butuhkan</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-hands text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Ambil</h3>
              <p class="text-muted mb-0">Ambil perangkat yang anda butuhkan</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-undo text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Kembalikan</h3>
              <p class="text-muted mb-0">Kembalikan perangkat yang anda pinjam</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-history text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">History</h3>
              <p class="text-muted mb-0">Lihat riwayat peminjaman</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="assets/landing_page_assets/img/portfolio/fullsize/thumbnails1.png">
              <img class="img-fluid" src="assets/landing_page_assets/img/portfolio/thumbnails/thumbnails1.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                   Lihat Gambar
                  </div>
                  <div class="project-name">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="assets/landing_page_assets/img/portfolio/fullsize/thumbnails2.jpg">
              <img class="img-fluid" src="assets/landing_page_assets/img/portfolio/thumbnails/thumbnails2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Lihat Gambar
                  </div>
                  <div class="project-name">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="assets/landing_page_assets/img/portfolio/fullsize/thumbnails3.png">
              <img class="img-fluid" src="assets/landing_page_assets/img/portfolio/thumbnails/thumbnails3.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Lihat Gambar
                  </div>
                  <div class="project-name">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="assets/landing_page_assets/img/portfolio/fullsize/thumbnails6.png">
              <img class="img-fluid" src="assets/landing_page_assets/img/portfolio/thumbnails/thumbnails6.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                  Lihat Gambar
                  </div>
                  <div class="project-name">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="assets/landing_page_assets/img/portfolio/fullsize/thumbnails4.png">
              <img class="img-fluid" src="assets/landing_page_assets/img/portfolio/thumbnails/thumbnails4.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Lihat Gambar
                  </div>
                  <div class="project-name">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="assets/landing_page_assets/img/portfolio/fullsize/thumbnails5.png">
              <img class="img-fluid" src="assets/landing_page_assets/img/portfolio/thumbnails/thumbnails5.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Lihat Gambar
                  </div>
                  <div class="project-name">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Pinjam alat sekarang!</h2>
        <a class="btn btn-light btn-xl sr-button js-scroll-trigger" href="#page-top">PINJAM!</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Hubungi Kami!</h2>
            <hr class="my-4">
            <p class="mb-5">Hubungi kami jika anda menemukan masalah!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>(0561) 575979</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              tu.upt_pontianak@kominfo.go.id
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript  -->
    <script src="<?php echo base_url() ?>assets/landing_page_assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/landing_page_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/landing_page_assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/landing_page_assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url() ?>assets/landing_page_assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/landing_page_assets/js/creative.min.js"></script>


</body>

</html>
