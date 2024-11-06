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
            <li class="current">Kurikulum</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
            

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kurikulum</h2>
      </div><!-- End Section Title -->

      <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="faq-container">
        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
          <!-- <div class="faq-item" data-aos="fade-up" data-aos-delay="300"> -->
            <div class="faq-content">
              <div class="table-responsive">
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
                    <tr><td>1.</td><td>AAK3101</td><td>Akuntansi Pengantar</td><td class="sks">4</td><td class="semester">1</td></tr>
                    <tr><td>2.</td><td>AAK3102</td><td>Teori Ekonomi</td><td class="sks">2</td><td class="semester">1</td></tr>
                    <tr><td>3.</td><td>AAK3103</td><td>Manajemen Bisnis</td><td class="sks">2</td><td class="semester">1</td></tr>
                    <tr><td>4.</td><td>AAK3104</td><td>Etika Bisnis dan Profesi Akuntansi</td><td class="sks">2</td><td class="semester">1</td></tr>
                    <tr><td>5.</td><td>AAK3105</td><td>Kententuan Umum dan Tata Cara Perpajakan</td><td class="sks">2</td><td class="semester">1</td></tr>
                    <tr><td>6.</td><td>AAK3106</td><td>Aplikasi Komputer</td><td class="sks">2</td><td class="semester">1</td></tr>
                    <tr><td>7.</td><td>USB3001</td><td>Pendidikan Pancasila</td><td class="sks">2</td><td class="semester">1</td></tr>
                    <tr><td>8.</td><td>USB3004</td><td>Pendidikan Agama Islam</td><td class="sks">2</td><td class="semester">1</td></tr>
                    <tr><td>9.</td><td>USB3005</td><td>Pendidikan Agama</td><td class="sks">2</td><td class="semester">1</td></tr>
                    <tr><td>10.</td><td>USB3007</td><td>Bahasa Inggris</td><td class="sks">2</td><td class="semester">1</td></tr>
                    <tr class="total-sks"><td colspan="5">TOTAL SKS PER SEMESTER: 20</td></tr>
                    <!-- Semester 2 -->
                    <tr><td>11.</td><td>AAK3201</td><td>Komputerisasi Akuntansi Excel</td><td class="sks">3</td><td class="semester">2</td></tr>
                    <tr><td>12.</td><td>AAK3202</td><td>Sistem Informasi Akuntansi</td><td class="sks">2</td><td class="semester">2</td></tr>
                    <tr><td>13.</td><td>AAK3203</td><td>Praktikum Sistem Informasi Akuntansi</td><td class="sks">3</td><td class="semester">2</td></tr>
                    <tr><td>14.</td><td>AAK3204</td><td>Akuntansi Keuangan I</td><td class="sks">2</td><td class="semester">2</td></tr>
                    <tr><td>15.</td><td>AAK3205</td><td>Praktikum Akuntansi Keuangan I</td><td class="sks">2</td><td class="semester">2</td></tr>
                    <tr><td>16.</td><td>AAK3206</td><td>PPh Orang Pribadi, PPh Badan dan Potput</td><td class="sks">2</td><td class="semester">2</td></tr>
                    <tr><td>17.</td><td>AAK3207</td><td>Praktikum PPh Orang Pribadi, PPh Badan dan Potput</td><td class="sks">2</td><td class="semester">2</td></tr>
                    <tr><td>18.</td><td>AAK3208</td><td>Analisis Laporan Keuangan</td><td class="sks">2</td><td class="semester">2</td></tr>
                    <tr><td>19.</td><td>USB3002</td><td>Pendidikan Kewarganegaraan</td><td class="sks">2</td><td class="semester">2</td></tr>
                    <tr class="total-sks"><td colspan="5">TOTAL SKS PER SEMESTER: 20</td></tr>
                    <!-- Semester 3 -->
                    <tr><td>20.</td><td>AAK3301</td><td>Penganggaran</td><td class="sks">2</td><td class="semester">3</td></tr>
                    <tr><td>21.</td><td>AAK3302</td><td>Akuntansi Keuangan II</td><td class="sks">2</td><td class="semester">3</td></tr>
                    <tr><td>22.</td><td>AAK3303</td><td>Praktikum Akuntansi Keuangan II</td><td class="sks">2</td><td class="semester">3</td></tr>
                    <tr><td>23.</td><td>AAK3304</td><td>PPN, PPnBM, PBB, BPHTB dan Bea Meterai</td><td class="sks">2</td><td class="semester">3</td></tr>
                    <tr><td>24.</td><td>AAK3305</td><td>Praktikum PPN, PPnBM, PBB, BPHTB dan Bea Meterai</td><td class="sks">3</td><td class="semester">3</td></tr>
                    <tr><td>25.</td><td>AAK3306</td><td>Akuntansi Syariah</td><td class="sks">2</td><td class="semester">3</td></tr>
                    <tr><td>26.</td><td>AAK3307</td><td>Akuntansi Biaya</td><td class="sks">3</td><td class="semester">3</td></tr>
                    <tr><td>27.</td><td>AAK3308</td><td>Komputerisasi Perpajakan</td><td class="sks">3</td><td class="semester">3</td></tr>
                    <tr><td>28.</td><td>USB3006</td><td>Kewirausahaan</td><td class="sks">3</td><td class="semester">3</td></tr>
                    <tr class="total-sks"><td colspan="5">TOTAL SKS PER SEMESTER: 22</td></tr>
                    <!-- Semester 4 -->
                    <tr><td>29.</td><td>AAK3401</td><td>Akuntansi Pajak dan Rekonsiliasi Fiskal</td><td class="sks">3</td><td class="semester">4</td></tr>
                    <tr><td>30.</td><td>AAK3402</td><td>Auditing</td><td class="sks">2</td><td class="semester">4</td></tr>
                    <tr><td>31.</td><td>AAK3403</td><td>Praktikum Auditing</td><td class="sks">3</td><td class="semester">4</td></tr>
                    <tr><td>32.</td><td>AAK3404</td><td>Akuntansi Keuangan Lanjutan</td><td class="sks">3</td><td class="semester">4</td></tr>
                    <tr><td>33.</td><td>AAK3405</td><td>Komputer Akuntansi</td><td class="sks">3</td><td class="semester">4</td></tr>
                    <tr><td>34.</td><td>AAK3406</td><td>Pengelolaan Database</td><td class="sks">3</td><td class="semester">4</td></tr>
                    <tr><td>35.</td><td>USB3003</td><td>Bahasa Indonesia dan Tata Tulis Laporan</td><td class="sks">2</td><td class="semester">4</td></tr>
                    <tr><td>36.</td><td>VKS3541</td><td>Pemasaran Digital</td><td class="sks">3</td><td class="semester">4</td></tr>
                    <tr><td>37.</td><td>VKS3534</td><td>Public Speaking</td><td class="sks">2</td><td class="semester">4</td></tr>
                    <tr class="total-sks"><td colspan="5">TOTAL SKS PER SEMESTER: 24</td></tr>
                    <!-- Semester 5 -->
                    <tr><td>38.</td><td>AAK3511</td><td>Pelaporan Keuangan</td><td class="sks">3</td><td class="semester">5</td></tr>
                    <tr><td>39.</td><td>AAK3512</td><td>Akuntansi Perpajakan</td><td class="sks">3</td><td class="semester">5</td></tr>
                    <tr><td>40.</td><td>AAK3513</td><td>Manajemen Keuangan</td><td class="sks">3</td><td class="semester">5</td></tr>
                    <tr><td>41.</td><td>AAK3514</td><td>Administrasi Perkantoran</td><td class="sks">2</td><td class="semester">5</td></tr>
                    <tr><td>42.</td><td>AAK3515</td><td>Perilaku Dalam Organisasi</td><td class="sks">2</td><td class="semester">5</td></tr>
                    <tr><td>43.</td><td>AAK3516</td><td>Teknologi Akuntansi dan Keuangan</td><td class="sks">2</td><td class="semester">5</td></tr>
                    <tr><td>44.</td><td>VKS3551</td><td>Pelaporan dan Seminar Magang Industri</td><td class="sks">5</td><td class="semester">5</td></tr>
                    <tr class="total-sks"><td colspan="5">TOTAL SKS PER SEMESTER: 20</td></tr>
                    <!-- Semester 6 -->
                    <tr><td>45.</td><td>VKS3561</td><td>Laporan Tugas Akhir</td><td class="sks">5</td><td class="semester">6</td></tr>
                    <tr><td>46.</td><td>VKS3562</td><td>Seminar Tugas Akhir</td><td class="sks">1</td><td class="semester">6</td></tr>
                    <tr class="total-sks"><td colspan="5">TOTAL SKS PER SEMESTER: 6</td></tr>
                </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    </section><!-- /Starter Section Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <!-- <span class="sitename">Medilab</span> -->
            <img src="{{ asset('Arsha') }}/assets/img/vokasifix.png" class="img-fluid" alt="">
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Khp Hasan Mustopa No.68, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 22 7275489</span></p>
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