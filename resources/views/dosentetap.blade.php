<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>D3 Akuntansi USBYPKP</title>
  <style>
  .table-container {
    width: 100%;
    margin: auto;
  }
  .table {
    width: 100%;
    text-align: left;
    border-collapse: collapse;
  }
  .table th, .table td {
    padding: 8px;
    border: 1px solid #ddd;
  }
  .table thead tr th {
    background-color: #1977cc33;
  }
  .table td.sks, .table td.semester {
    text-align: center;
  }
  .total-sks  td{
    background-color: #1977cc33 !important;
    font-weight: bold;
    color: #2c4964 !important;
  }
  .table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    /* -webkit-overflow-scrolling: touch; */
    }
    

  .table-responsive table {
  width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}
  </style>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Arsha') }}/assets/img/direktoratypkp.png" rel="icon">
  <link href="{{ asset('Medilab') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Medilab') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('Medilab') }}/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">usbypkp@ac.id</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 22 7275489</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}"  class="logo me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('Arsha') }}/assets/img/vokasifix.png" class="img-fluid" alt="">
          <!-- <h1 class="sitename">Medilab</h1> -->
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('home') }}#hero">Beranda<br></a></li>
            <li><a href="{{ route('home') }}#about">Profil</a></li>
            <li class="dropdown"><a href="{{ route('home') }}#services"><span class="active">Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('/akreditasi') }}">Akreditasi</a></li>
                <li><a href="{{ url('/dosentetap') }}">Dosen</a></li>
                <li><a href="{{ url('/kurikulum2') }}">Kurikulum</a></li>
                <li><a href="#">Visi Misi & Tujuan</a></li>
              </ul>
            </li>
            <li><a href="{{ route('home') }}#departments">Gallery</a></li>
            <li><a href="{{ route('home') }}#doctors">Alumni</a></li>
            <li><a href="{{ route('home') }}#gallery">Berita</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn" href="{{ route('home') }}#appointment">Hubungi Pembuat</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}" >Beranda</a></li>
            <li class="current">Detail Dosen</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- ======= About Us Section ======= -->
    <div class="container6 section-title-dosen" data-aos="fade-up">
    <h2 class="">Dosen Tetap</h2>
    </div>
    <div class="about1">
    <section id="about1" class="container1">
   <!-- <div class="about1"> -->
   <!-- <section id="about1" class="container1"> -->
    <div class="slide1">
              <div class="item1" style="background-image: url('{{ asset('Arsha') }}/assets/img/dosen/iyan sukiman ypkp.png'); background-size: cover;">
                  <div class="content1">
                      <div class="name1">Iyan Sukiman S.E.,M.M</div>
                      <div class="des1">
                        Gelar : S.E.,M.M <br>S1 : Universitas Sangga Buana <br>
                        S2 : Universitas Padjadjaran <br> Lahir : Ciamis <br>
                      </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha') }}/assets/img/dosen//bambang ypkp.png');">
                <div class="content1">
                    <div class="name1">Bambang Rustandi S.E.,M.Si</div>
                    <div class="des1">
                        Gelar : S.E.,M.Si <br>S1 : Universitas Gadjah Mada <br>
                        S2 : Universitas Gadjah Mada <br> Lahir : Bandung <br>
                        <div class="social">
                          <a href=""><i class="bi bi-twitter"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                      </div>
                </div>
            </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha') }}/assets/img/dosen/surya ansori ypkp1.png');">
                  <div class="content1">
                      <div class="name1">Surya Ansori M.M.,S.E</div>
                      <div class="des1">
                          Gelar : M.M.,S.E <br>S1 : Universitas Nusa Bangsa <br>
                          S2 : Sekolah Tinggi Ilmu Ekonomi Pasundan <br> Lahir : Sukabumi <br>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                          </div>
                        </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha') }}/assets/img/dosen/sri wahyuni ypkp.png');">
                  <div class="content1">
                      <div class="name1">Sri Wahyuni M.M.,S.Sn</div>
                      <div class="des1">
                          Gelar : M.M.,S.Sn <br>S1 : Institut Seni Indonesia Yogyakarta <br>
                          S2 : Universitas Sangga Buana <br> Lahir : Palembang <br>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                          </div>
                        </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha') }}/assets/img/dosen/Wenti Frisca Septiani Putri.png');">
                  <div class="content1">
                    <div class="name1">Wenti Frisca Septiani Putri S.E.,M.Ak</div>
                    <div class="des1">
                        Gelar : S.E.,M.Ak <br>S1 : Universitas Widyatama <br>
                        S2 : Universitas Sangga Buana <br> Lahir : Bekasi <br>
                      <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                          </div>
                        </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha') }}/assets/img/dosen/dikdik maulana ypkp.png');">
                  <div class="content1">
                    <div class="name1">Dikdik Maulana S.E.,M.Ak</div>
                    <div class="des1">
                        Gelar : S.E.,M.Ak <br>S1 : Sekolah Tinggi Ilmu Ekonomi Stan Im <br>
                        S2 : Universitas Widyatama <br> Lahir : Bandung <br>
                      <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                          </div>
                        </div>
                  </div>
              </div>
              </div>
              <div class="buttons1">
                <div class="custom-prev"></div>
                <div class="custom-next"></div>
              </div>

      </section>
    </div>
  <script >
        const nextButton = document.querySelector('.custom-next');
      const prevButton = document.querySelector('.custom-prev');
      
      nextButton.addEventListener(
        'click',
        () => {
          const items = document.querySelectorAll('.item1');
          document.querySelector('.slide1').appendChild(items[0]);
        },
      );
      
      prevButton.addEventListener(
        'click',
        () => {
          const items = document.querySelectorAll('.item1');
          document.querySelector('.slide1').prepend(items[items.length - 1]);
        },
      );
      
      </script> 

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <!-- <span class="sitename">Medilab</span> -->
            <img src="{{ asset('Arsha') }}/assets/img/vokasifix.png" class="img-fluid>" alt="">
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Khp Hasan Mustopa No.68, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123</p>
            <p class="mt-3"><strong>PhonPe:</strong> <span>+62 22 7275489</span></p>
            <p><strong>Email:</strong> <span>usbypkp@ac.id</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12" style="color: grey;">
          <h4>Follow Us</h4>
          <p>Bergabunglah dengan komunitas kami di media sosial untuk mendapatkan update terbaru, inspirasi, dan berita menarik dari Universitas Sangga Buana Prodi Akuntansi D3.</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container6 copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Fadhil</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Medilab') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('Medilab') }}/assets/js/main.js"></script>

</body>

</html>