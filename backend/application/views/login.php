<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UBU-SCI INDICATOR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="<?= base_url('Butterfly') ?>/assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="<?= base_url('Butterfly') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('Butterfly') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('Butterfly') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('Butterfly') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('Butterfly') ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('Butterfly') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('Butterfly') ?>/assets/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: Butterfly - v4.10.0
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

    <a href="<?= site_url('main/dashboard') ?>"><h2>SCI-INDICATOR</h2></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="getstarted scrollto" href="#main">Log in</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>ระบบจัดเก็บข้อมูลตัวชี้วัด</h1>
          <h2>คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี</h2>
          <div><a href="#main" class="btn-get-started scrollto">Log in</a></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?= base_url('Butterfly') ?>/assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>

  <main id="main">

    <!-- ======= Services Section ======= -->


    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Log in</h2>
          <p>เข้าสู่ระบบเพื่อใช้งาน</p>
        </div>

        <div class="row">

          <div class="col-lg-7 d-flex align-items-stretch">
            <div class=" d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
              <img src="<?= base_url('Butterfly') ?>/assets/img/login.png" class="img-fluid" alt="">
            </div>

          </div>

          <div class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-stretch ">
            <div class="info">
              <?= form_open('main/login') ?>
              <div class="user">
                <i class="bi bi-file-person"></i>
                <h4>Username:</h4>
                <p><input type="text" class="form-control" id="staff_uname" name="staff_uname" placeholder="username" required=""></p>
              </div>
              <br>
              <div class="pass">
                <i class="bi bi-file-lock2"></i>
                <h4>Password:</h4>
                <p><input type="password" class="form-control" id="staff_pass" name="staff_pass" placeholder="password" required=""></p>
              </div>
              <br>
              <div class="log">
                <!-- <i class="bi bi-forward-fill"></i> -->
                <h4><input type="submit" value="Log In" class="btn btn-block btn-primary"></h4>
                <p></p>
              </div>








            </div>
            <?= form_close() ?>
          </div>
        </div>

      </div>


      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->










 <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>งานประกันคุณภาพการศึกษาและสารสนเทศ</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('Butterfly') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('Butterfly') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('Butterfly') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('Butterfly') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('Butterfly') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('Butterfly') ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('') ?>/assets/js/main.js"></script>

</body>

</html>