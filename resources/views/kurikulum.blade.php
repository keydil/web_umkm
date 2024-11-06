<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kurikulum D3 Akuntansi</title>
  <style>
    h1.justify {
      text-align: justify;
      color: #DD4A00
    }
    .justify {
      text-align: justify;
      color: #0D0D0D;
    }
  </style>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Arsha') }}/assets/img/direktoratypkp.png" rel="icon">
  <link href="{{ asset('Arsha') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Arsha') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('Arsha') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('Arsha') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('Arsha') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('Arsha') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <!-- <link href="{{ asset('Arsha') }}/assets/css/style.css" rel="stylesheet"> -->
  <link href="{{ asset('Arsha') }}/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: May 13 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #ffd600;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
    <div class="navbar">
        <div class="logo-container">
            <img src="{{ asset('Arsha') }}/assets/img/direkypkp.png" alt="Logo">
        </div>
    </div>
    <!-- <h1 class="sitename">UDIL & Ilham</h1> -->
</a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="">Beranda</a></li>
          <!-- <li><a href="#about">Tentang</a></li> -->
          <li class="dropdown"><a href="#about"><span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
              <li><a href="#visimisi">Visi Misi & Tujuan</a></li>
              <li><a href="#gambar-1">Akreditasi
                  <!-- <img src="{{ asset('Arsha') }}/assets/img/clients/D3Akuntansi1.png" alt="akreditasi D3 akuntansi"> -->

                  </a>
                  <div class="overlay" id="gambar-1">
                    <a href="#" class="close">x close</a>
                    <a href="#gambar-4" class="prev">prev</a>
                    <img src="{{ asset('Arsha') }}/assets/img/clients/D3Akuntansi1.png" alt="akreditasi D3 akuntansi">
                    <a href="#gambar-2" class="next">next</a>
                    <!-- alternative -->
                    <!-- <img src="img/full/emmaW1.png" alt="Hermoine Potter"> -->
                </div>

              </li>
              <li><a href="#kurikulum1">Kurikulum</a></li>
              </ul>
          </li>
          <li><a href="#services">Universitas</a></li>
          <li><a href="#portfolio">Akreditasi</a></li>
          <li><a href="#team">Alumni</a></li>
          <li><a href="#contact">Daftar</a></li>
      <li class="dropdown">
      <a href="#contact" class="btn-getstarted justify">
    <img src="{{ asset('Arsha') }}/assets/img/clients/iconacc2.png" alt="Daftar" style="height: 24px; width: 24px;"><i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}" class="btn-getstarted">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </li>
</ul>

<!--           
          <li class="dropdown"><a href="#contact"><span>Daftar</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Login</a></li>
      
              </li>
              <li><a href="#">Register</a></li>
      
            </ul>
          </li>
          <li><a href="#contact">Daftar</a></li> -->

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      <!-- <a class="btn-getstarted" href="#about">Get Started</a>

    </div> -->
<!-- 
@if (Route::has('login'))
    <nav class="ms-auto">
        @auth
            <a href="{{ url('/dashboard') }}" class="btn-getstarted">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="btn-getstarted">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn-getstarted">Register</a>
            @endif
        @endauth
    </nav>
@endif -->

</div>

  </header>

  <main class="main">
     <!-- Page Title -->
      <br><br><br><br>
     <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li class="current">Kurikulum</li>
          </ol>
        </nav>
        <h1>Detail Kurikulum</h1>
      </div>
    </div><!-- End Page Title -->
    
    <!-- <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1 class="justify">Kata Sambutan</h1>
            <h4 class="justify" >Bambang Rustandi,SE.,MSi. <br>
            Terimakasih kepada Fadhil Firdaus Adha yang telah membuatkan website untuk D3 Prodi Akuntansi yang bahkan telah mengorbankan waktu tidurnya dan yang didampingi Ilham yang senantiasa meng-supportnya </h4> 
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=pUigbF3Z8co" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('Arsha') }}/assets/img/bambangfix.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section> -->
    
    <!-- <section id="kurikulum1" class="faq-2 section"> -->

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Kurikulum</h2>
  <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
</div><!-- End Section Title -->

<div class="container">

  <div class="row justify-content-center">

    <div class="col-lg-10">

      <div class="faq-container">

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
    <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
    
    <div class="faq-content">
       
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode</th>
                        <th>Matakuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Semester 1 -->
                    <tr><td>1.</td><td>AAK3101</td><td>Akuntansi Pengantar</td><td>4</td><td>1</td></tr>
                    <tr><td>2.</td><td>AAK3102</td><td>Teori Ekonomi</td><td>2</td><td>1</td></tr>
                    <tr><td>3.</td><td>AAK3103</td><td>Manajemen Bisnis</td><td>2</td><td>1</td></tr>
                    <tr><td>4.</td><td>AAK3104</td><td>Etika Bisnis dan Profesi Akuntansi</td><td>2</td><td>1</td></tr>
                    <tr><td>5.</td><td>AAK3105</td><td>Kententuan Umum dan Tata Cara Perpajakan</td><td>2</td><td>1</td></tr>
                    <tr><td>6.</td><td>AAK3106</td><td>Aplikasi Komputer</td><td>2</td><td>1</td></tr>
                    <tr><td>7.</td><td>USB3001</td><td>Pendidikan Pancasila</td><td>2</td><td>1</td></tr>
                    <tr><td>8.</td><td>USB3004</td><td>Pendidikan Agama Islam</td><td>2</td><td>1</td></tr>
                    <tr><td>9.</td><td>USB3005</td><td>Pendidikan Agama</td><td>2</td><td>1</td></tr>
                    <tr><td>10.</td><td>USB3007</td><td>Bahasa Inggris</td><td>2</td><td>1</td></tr>
                    <tr><td colspan="5"><strong>TOTAL SKS PER SEMESTER: 20</strong></td></tr>
                    <!-- Semester 2 -->
                    <tr><td>11.</td><td>AAK3201</td><td>Komputerisasi Akuntansi Excel</td><td>3</td><td>2</td></tr>
                    <tr><td>12.</td><td>AAK3202</td><td>Sistem Informasi Akuntansi</td><td>2</td><td>2</td></tr>
                    <tr><td>13.</td><td>AAK3203</td><td>Praktikum Sistem Informasi Akuntansi</td><td>3</td><td>2</td></tr>
                    <tr><td>14.</td><td>AAK3204</td><td>Akuntansi Keuangan I</td><td>2</td><td>2</td></tr>
                    <tr><td>15.</td><td>AAK3205</td><td>Praktikum Akuntansi Keuangan I</td><td>2</td><td>2</td></tr>
                    <tr><td>16.</td><td>AAK3206</td><td>PPh Orang Pribadi, PPh Badan dan Potput</td><td>2</td><td>2</td></tr>
                    <tr><td>17.</td><td>AAK3207</td><td>Praktikum PPh Orang Pribadi, PPh Badan dan Potput</td><td>2</td><td>2</td></tr>
                    <tr><td>18.</td><td>AAK3208</td><td>Analisis Laporan Keuangan</td><td>2</td><td>2</td></tr>
                    <tr><td>19.</td><td>USB3002</td><td>Pendidikan Kewarganegaraan</td><td>2</td><td>2</td></tr>
                    <tr><td colspan="5"><strong>TOTAL SKS PER SEMESTER: 20</strong></td></tr>
                    <!-- Semester 3 -->
                    <tr><td>20.</td><td>AAK3301</td><td>Penganggaran</td><td>2</td><td>3</td></tr>
                    <tr><td>21.</td><td>AAK3302</td><td>Akuntansi Keuangan II</td><td>2</td><td>3</td></tr>
                    <tr><td>22.</td><td>AAK3303</td><td>Praktikum Akuntansi Keuangan II</td><td>2</td><td>3</td></tr>
                    <tr><td>23.</td><td>AAK3304</td><td>PPN, PPnBM, PBB, BPHTB dan Bea Meterai</td><td>2</td><td>3</td></tr>
                    <tr><td>24.</td><td>AAK3305</td><td>Praktikum PPN, PPnBM, PBB, BPHTB dan Bea Meterai</td><td>3</td><td>3</td></tr>
                    <tr><td>25.</td><td>AAK3306</td><td>Akuntansi Syariah</td><td>2</td><td>3</td></tr>
                    <tr><td>26.</td><td>AAK3307</td><td>Akuntansi Biaya</td><td>3</td><td>3</td></tr>
                    <tr><td>27.</td><td>AAK3308</td><td>Komputerisasi Perpajakan</td><td>3</td><td>3</td></tr>
                    <tr><td>28.</td><td>USB3006</td><td>Kewirausahaan</td><td>3</td><td>3</td></tr>
                    <tr><td colspan="5"><strong>TOTAL SKS PER SEMESTER: 22</strong></td></tr>
                    <!-- Semester 4 -->
                    <tr><td>29.</td><td>AAK3401</td><td>Akuntansi Pajak dan Rekonsiliasi Fiskal</td><td>3</td><td>4</td></tr>
                    <tr><td>30.</td><td>AAK3402</td><td>Auditing</td><td>2</td><td>4</td></tr>
                    <tr><td>31.</td><td>AAK3403</td><td>Praktikum Auditing</td><td>3</td><td>4</td></tr>
                    <tr><td>32.</td><td>AAK3404</td><td>Akuntansi Keuangan Lanjutan</td><td>3</td><td>4</td></tr>
                    <tr><td>33.</td><td>AAK3405</td><td>Komputer Akuntansi</td><td>3</td><td>4</td></tr>
                    <tr><td>34.</td><td>AAK3406</td><td>Pengelolaan Database</td><td>3</td><td>4</td></tr>
                    <tr><td>35.</td><td>USB3003</td><td>Bahasa Indonesia dan Tata Tulis Laporan</td><td>2</td><td>4</td></tr>
                    <tr><td>36.</td><td>VKS3541</td><td>Pemasaran Digital</td><td>3</td><td>4</td></tr>
                    <tr><td>37.</td><td>VKS3542</td><td>Teknik Penulisan Pelaporan</td><td>2</td><td>4</td></tr>
                    <tr><td colspan="5"><strong>TOTAL SKS PER SEMESTER: 24</strong></td></tr>
                    <!-- Semester 5 -->
                    <tr><td>38.</td><td>AAK3511</td><td>Pelaporan Keuangan</td><td>3</td><td>5</td></tr>
                    <tr><td>39.</td><td>AAK3512</td><td>Akuntansi Perpajakan</td><td>3</td><td>5</td></tr>
                    <tr><td>40.</td><td>AAK3513</td><td>Manajemen Keuangan</td><td>3</td><td>5</td></tr>
                    <tr><td>41.</td><td>AAK3514</td><td>Administrasi Perkantoran</td><td>2</td><td>5</td></tr>
                    <tr><td>42.</td><td>AAK3515</td><td>Perilaku Dalam Organisasi</td><td>2</td><td>5</td></tr>
                    <tr><td>43.</td><td>AAK3516</td><td>Teknologi Akuntansi dan Keuangan</td><td>2</td><td>5</td></tr>
                    <tr><td>44.</td><td>VKS3551</td><td>Pelaporan dan Seminar Magang Industri</td><td>5</td><td>5</td></tr>
                    <tr><td colspan="5"><strong>TOTAL SKS PER SEMESTER: 20</strong></td></tr>
                    <!-- Semester 6 -->
                    <tr><td>45.</td><td>VKS3561</td><td>Laporan Tugas Akhir</td><td>5</td><td>6</td></tr>
                    <tr><td>46.</td><td>VKS3562</td><td>Seminar Tugas Akhir</td><td>1</td><td>6</td></tr>
                    <tr><td colspan="5"><strong>TOTAL SKS PER SEMESTER: 6</strong></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

 <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
          <img class="ypkp1" src="{{ asset('Arsha') }}/assets/img/direkypkp1.png" alt="Logo"> 
            <!-- <span class="sitename">Arsha</span> -->
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Khp Hasan Mustopa No.68, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123</p>
            <!-- <p>Bandung, Jawa Barat</p> -->
            <p class="mt-3"><strong>Phone:</strong> <span>(022) 21000307</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
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


    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Fadhil</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Arsha BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Arsha') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('Arsha') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('Arsha') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('Arsha') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('Arsha') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('Arsha') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('Arsha') }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('Arsha') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('Arsha') }}/assets/js/main.js"></script>

</body>

</html>

