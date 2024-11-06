<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>web Lokal UMKM</title>
  <style>
    .justify {
        text-align: justify;
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
  <link href="{{ asset('Medilab') }}/assets/css/main.css?v=123" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

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
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">Trending</a></li>
            <!-- <li class="dropdown"><a href="#services"><span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('/akreditasi') }}">Akreditasi</a></li>
                <li><a href="{{ url('/dosentetap') }}">Dosen</a></li>
                <li><a href="{{ url('/kurikulum2') }}">Kurikulum</a></li>
                <li><a href="#">Visi Misi & Tujuan</a></li>
              </ul>
            </li> -->
            <li><a href="#departments">Category</a></li>
            <li><a href="#doctors">Team</a></li>
            <li><a href="#gallery">Contact Us</a></li>
            <li class="dropdown cta-btn" href="#appointment">
            <img src="{{ asset('Medilab') }}/assets/img/icon0.png" alt="Daftar" style="height: 24px; width: 24px;">
              Masuk <i class="bi bi-chevron-down toggle-dropdown"></i>
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
            <script>
  // Script khusus untuk dropdown "Masuk" agar tidak mengubah script di main.js
  document.querySelector('.cta-btn .toggle-dropdown').addEventListener('click', function(e) {
    e.preventDefault();
    this.parentNode.classList.toggle('active');
    this.nextElementSibling.classList.toggle('dropdown-active');
    e.stopImmediatePropagation();
  });
</script>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <!-- <main class="main"> -->

    <!-- Hero Section -->
    <!-- <section id="hero" class="hero section light-background"> -->

    <!-- <div class="container4">
    <video id="myVideo" autoplay muted loop>
    <source src="{{ asset('Arsha') }}/assets/img/direktoratvokasi.mp4" type="video/mp4">
    </video> -->

    <!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var video = document.getElementById('myVideo');
        video.muted = true;
        video.volume = 0.5; 
    });
    </script> -->
    <main class="main">
    <section id="hero" class="hero section light-background">
    <!-- <div class="container4"> -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{ asset('Medilab') }}/assets/img/carousel/almond.png" alt="kue almond">
      <div class="carousel-caption d-none d-md-block">
        <h5>kue almond bulat</h5>
        <p>sering mendapat banyak peminat ketika akan memasuki <b>bulan ramadhan</b></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ asset('Medilab') }}/assets/img/carousel/beefsteak.png" alt="beef steak">
      <div class="carousel-caption d-none d-md-block">
        <h5>cow beef steak</h5>
        <p>cocok ketika anda sedang berkemah</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ asset('Medilab') }}/assets/img/carousel/icecake.png" alt="ice cake">
      <div class="carousel-caption d-none d-md-block">
        <h5>ice cake</h5>
        <p>sering di beli ketika menjelang musim kemarau</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
<!-- </div> -->

    </section><!-- /Hero Section -->

    

    <!-- Clients Section -->
    <section id="about" class="clients section">
        <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Trending</h2>
        <p>populer hari ini/ sering dikunjungi</p>
      </div><!-- End Section Title -->
  <!-- <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <div class="swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 5,
              "spaceBetween": 120
            },
            "1200": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/shopee.png" class="img-fluid" alt title="Shopee"></div>
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/cimekar.png" class="img-fluid" alt title="Desa Cimekar"></div>
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/cijambu1.png" class="img-fluid" alt title="Desa Cijambu Kecamatan Tanjungsari Kabupaten Sumedang"></div>
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/SMKmerdeka2.png" class="img-fluid" alt title="SMK Merdeka Bandung"></div>
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/DirektoratPajak1.png" class="img-fluid" alt title="Direktorat Pajak"></div>
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/IAI.png" class="img-fluid" alt title="Ikatan Akuntan Indonesia Wilayah Jawa Barat"></div>
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/PTaryakama.png" class="img-fluid" alt title="PT.Aryakama"></div>
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/PTinti.png" class="img-fluid" alt title="PT.Inti"></div>
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/SMKmvp1.png" class="img-fluid" alt title="SMK MVP"></div>
        <div class="swiper-slide"><img src="{{ asset('Arsha') }}/assets/img/clients/SMPsumatra1.png" class="img-fluid" alt title="SMK Sumatra 40"></div>
      </div>
    </div>
  </div>
</section> -->
<!-- Trending  -->
<div class="container">
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card1">
        <img src="{{ asset('Arsha') }}/assets/img/fadhil99.png" alt="Knives Out Banner">
        <div class="detail1">
          <video src="{{ asset('Arsha') }}/assets/img/videos/racingG.mp4" autoplay loop muted></video>
          <div class="text1">
            <h2>Richh Udill</h2>
            <div>
              <b>Keterangan:</b>
              Udill berhasil membeli porche x-9 dengan usaha jerih payahnya
            </div>
          </div>
        </div>
        <div class="cardbody1">
          <i class="bi-calendar-check" class="cardtext1"> 2 February 2025</i>
              </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card1">
        <img src="{{ asset('Arsha') }}/assets/img/lulusan.png" alt="Knives Out Banner">
        <div class="detail1">
          <video src="{{ asset('Arsha') }}/assets/img/videos/wisuda.mp4" autoplay loop muted></video>
          <div class="text1">
            <h4><a href="{{ asset('Arsha') }}/service-details.html" class="stretched-link">Wisuda Vokasi</a></h4>
            <div>
              <b>Keterangan:</b>
              Pelepasan D3 Akuntansi dan dinyatakan lulus untuk menjalani realita kehidupan yang sebenarnya
            </div>
            <div>
              <b>Tempat:</b>
              Gedung Sangga Buana YPKP
            </div>
          </div>
        </div>
        <div class="cardbody1">
          <i class="bi-calendar-event" class="cardtext1"> 15 Agustus 2024</i>
              </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card1">
        <img src="{{ asset('Arsha') }}/assets/img/image05.png" alt="">
        <div class="detail1">
          <video src="{{ asset('Arsha') }}/assets/img/videos/wisuda.mp4" autoplay loop muted></video>
          <div class="text1">
            <h2>??????????</h2>
            <div>
              <b>Keterangan:</b>
              Berita ini masi kosong
            </div>
          </div>
        </div>
        <div class="cardbody1">
          <i class="bi-calendar-x" class="cardtext1"> 4 november 2022</i>
              </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- /Trending Section -->


<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.swiper').forEach(function(swiper) {
      let config = JSON.parse(swiper.querySelector('.swiper-config').innerHTML.trim());
      new Swiper(swiper, config);
    });

    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
      counter.innerText = '0';
      const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / 200;
        if (count < target) {
          counter.innerText = `${Math.ceil(count + increment)}`;
          setTimeout(updateCounter, 20);
        } else {
          counter.innerText = target;
        }
      };
      updateCounter();
    });
  });
</script>



    <!-- Stats Section -->
    <!-- <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-user-graduate"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p>Mahasiswa</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-graduation-cap"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter"></span>
              <p>Lulusan</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center position-relative">
            <a href="your-link-here" class="stretched-link"></a>
            <i class="fa-solid fa-chalkboard-user"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <a href="youtube.com">Dosen Tetap</a>
            </div>
          </div>
           -->
          

          
          <!-- <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-flask"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div> -->
        <!-- </div>

      </div>

    </section> -->
    <!-- /Stats Section -->

    <!-- Departments Section -->
    <!-- <section id="services" class="departments section">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang</h2>
        <p class="justify">Program Studi D3 Akuntansi menyiapkan lulusan yang terampil sebagai staf bidang akuntansi keuangan, perpajakan dan auditing pada perusahaan, kantor akuntan publik dan instansi pemerintah. Dapat menjadi Entrepreneur bidang investasi pasar modal melalui Galeri Investasi USB-YPKP.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Tentang Prodi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Visi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Misi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Tujuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Prospek Karir</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="departments-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tentang Prodi</h3>
                    <p>Program Studi D3 Akuntansi di Universitas Sangga Buana YPKP menawarkan pendidikan praktis dalam akuntansi keuangan dan manajemen. Dengan fokus pada penerapan prinsip akuntansi dalam konteks bisnis, mahasiswa dilatih untuk menjadi ahli dalam mengelola laporan keuangan dan analisis data. Keunggulan program ini terletak pada :
                        Kurikulum yang relevan dengan industri.
                        Pengajar yang berpengalaman.
                        Kesempatan magang yang memperkaya pengalaman belajar.
                        Program ini mempersiapkan mahasiswa untuk memasuki dunia kerja dengan keterampilan yang solid dalam bidang akuntansi.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('Medilab') }}/assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Visi D3 Akuntansi</h3>
                    <p>Menjadi Program Studi terapan yang bermutu pada bidang
                        Akuntansi dengan memanfaatkan teknologi informasi dan
                        komunikasi yang berwawasan global serta berbasis
                        kewirausahaan di lingkup nasional pada tahun 2030.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('Medilab') }}/assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Misi D3 Akuntansi</h3>
                    <p>1) Menyelenggarakan sistem pendidikan terapan yang bermutu dengan kompetensi di bidang Pelaporan Keuangan dan Perpajakan yang mengikuti perkembangan bisnis dan memanfaatkan teknologi informasi dan komunikasi dengan didukung tenaga pengajar yang memiliki sertifikasi kompetensi serta sarana laboratorium yang dapat menunjang keilmuan secara praktikal.</p>
                    <p>2) Menyelenggarakan kegiatan Penelitian Produk berupa Laporan Keuangan, Pelaporan Perpajakan, baik manual maupun komputerisasi yang dapat memberi sumbangan teori dan praktik guna memperkuat pendidikan terapan berbasis kewirausahaan</p>
                    <p>3) Menyelenggarakan Pengabdian Kepada Masyarakat (PKM) terkait keilmuan Akuntansi serta pengembangan keterampilan di bidang Kewirausahaan yang berguna bagi masyarakat.</p>
                    <p>4) Mewujudkan kerjasama antar lembaga/ instansi baik di dalam maupun di luar negeri terkait pencapaian kompetensi serta penyerapan lulusan.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('Medilab') }}/assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tujuan D3 Akuntansi</h3>
                    <p>1) Menghasilkan tenaga ahli madya yang bermutu, beretika dan mampu secara praktikal dalam pelaporan keuangan dan perpajakan serta mampu berwirausaha secara profesional, secara mandiri maupun berkelompok.</p>
                    <p>2) Menghasilkan penelitian produk yang bermanfaat bagi masyarakat yang sesuai dengan keilmuan Akuntansi.</p>
                    <p>3) Pemberdayaan masyarakat melalui pengabdian kepada masyarakat sesuai bidang keilmuan Akuntansi.</p>
                    <p>4) Memperluas dan meningkatkan implementasi atas kerjasama dibidang penelitian dan Pengabdian Kepada Masyarakat, pengembangan kurikulum, pemagangan, pertukaran tenaga ahli, penempatan kerja.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('Medilab') }}/assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Prospek Karir</h3>
                    <p>1) Auditor</p>
                    <p>2) Konsultan Pajak</p>
                    <p>3) Tenaga Akuntan</p>
                    <p>4) Tenaga Pendidik</p>
                    <p>5) Wirausaha Mandiri</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('Medilab') }}/assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section> -->
    <!-- /Departments Section -->

    <!-- Portfolio Section -->
    <section id="departments" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Category</h2>
        <p>Di sini Anda akan menemukan berbagai pilihan makanan yang kami tawarkan, dengan kategori-kategori menarik yang pasti sesuai dengan selera Anda.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-ayam">Ayam Spesial</li>
            <li data-filter=".filter-frozen">Frozen Food</li>
            <li data-filter=".filter-churros">churros</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ayam">
              <img src="{{ asset('Medilab') }}/assets/img/ayam/ayam1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ayam Sunda</h4>
                <p>Ayam Khas Asep Srawberry</p>
                <a href="{{ asset('Medilab') }}/assets/img/ayam/ayam1.jpg" title="ayam sunda" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-frozen">
              <img src="{{ asset('Medilab') }}/assets/img/frozenfood/frozen1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ikan beku</h4>
                <p>Beku biar ga amis</p>
                <a href="{{ asset('Medilab') }}/assets/img/frozenfood/frozen1.jpg" title="ayam beku" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-churros">
              <img src="{{ asset('Medilab') }}/assets/img/churros/churros1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Churros eskrim</h4>
                <p>churoos pake eksrim</p>
                <a href="{{ asset('Medilab') }}/assets/img/churros/churros1.jpg" title="Churros eskrim" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->


            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ayam">
              <img src="{{ asset('Medilab') }}/assets/img/ayam/ayam2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ayam goreng</h4>
                <p>Ayam goreng dengan lotek, bonteng dan sambel</p>
                <a href="{{ asset('Medilab') }}/assets/img/ayam/ayam2.jpg" title="Ayam goreng" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-frozen">
              <img src="{{ asset('Medilab') }}/assets/img/frozenfood/frozen2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kepiting alaska</h4>
                <p>Ayam alaska dengan mempertahakan keasliannya</p>
                <a href="{{ asset('Medilab') }}/assets/img/frozenfood/frozen2.jpg" title="Kepiting alaska" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-churros">
              <img src="{{ asset('Medilab') }}/assets/img/churros/churros2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Churros kopi</h4>
                <p>Menyantap churros dengan kopi</p>
                <a href="{{ asset('Medilab') }}/assets/img/churros/churros2.jpg" title="Churros kopi" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ayam">
              <img src="{{ asset('Medilab') }}/assets/img/ayam/ayam3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ayam Restoran bintang 5</h4>
                <p>Ayam dengan keestetikan dan rasa bintang 5</p>
                <a href="{{ asset('Medilab') }}/assets/img/ayam/ayam3.jpg" title="ayam Restoran bintang 5" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-frozen">
              <img src="{{ asset('Medilab') }}/assets/img/frozenfood/frozen3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Salmon siap makan</h4>
                <p>Salmon mentah dengan wortel dan bonteng</p>
                <a href="{{ asset('Medilab') }}/assets/img/frozenfood/frozen3.jpg" title="Salmon siap makan" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-churros">
              <img src="{{ asset('Medilab') }}/assets/img/churros/churros3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Churros pinggir jalan</h4>
                <p>churoos rasa kaki lama 60% higenis</p>
                <a href="{{ asset('Medilab') }}/assets/img/churros/churros3.jpg" title="Churros pinggir jalan" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
   
    <!-- penghapusan Appointment, ada setelah Portfolio Section
     dan perpindahan departments ke atas aktivitas civitas -->
    

    <!-- setelah doctor section, frequently dan juga testimonials akan dihapus -->
    
    <!-- Services Section -->
<section id="doctors">

<!-- Section Title -->
<!-- <div class="container section-title" data-aos="fade-up">
  <h2>Berita Terkini</h2>
  <p>Ringkasan konten berita yang terjadi di D3 prodi akuntansi</p>
</div> -->
<div class="container section-title" data-aos="fade-up">
<h2 class="lemon" style="text-align:center";>Team</h2>
<p style="text-align:center;">Mahasiswa yang berkontribusi dalam pembuatan website ini</p>
</div>
<!-- End Section Title -->

<div class="container">
  <div class="row justify-content-center">
    <div class="cards-container">
      <div class="cards">
        <p class="card-author">Fadhil Firdaus Adha <br> Fullstack Developer</p>
        <div class="img-contents">
          <img src="{{ asset('Medilab') }}/assets/img/alumnifadhil.png" alt="Foto Fadhil" class="cards-image" />
        </div>
        <div class="contents">
          <p class="card-heading" style="color: #a435d6b3"; >Fullstack Develover</p>
          <p class="card-text" style="color: rgb(255, 255, 255);">
            "Mengembangkan aplikasi dari sisi frontend hingga backend, memastikan setiap fitur berfungsi optimal dan terintegrasi dengan baik."
          </p>
        </div>
      </div>
    </div>

    <div class="cards-container">
      <div class="cards">
        <p class="card-author">Ilham Khoerun Nasihin <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UI/UX Designer</p>
        <div class="img-contents">
          <img src="{{ asset('Medilab') }}/assets/img/alumniilham.png" alt="Foto Fadhil" class="cards-image" />
        </div>
        <div class="contents">
          <p class="card-heading" style="color: #a435d6b3"; >UI/UX Designer</p>
          <p class="card-text" style="color: rgb(255, 255, 255);">
            "UI/UX Designer bertanggung jawab merancang antarmuka dan pengalaman pengguna yang optimal untuk produk digital dengan menggabungkan tampilan visual dan penelitian pengguna."
          </p>
        </div>
      </div>
    </div>

    <div class="cards-container">
      <div class="cards">
        <p class="card-author">Yudi Hermawan <br> Graphic Designer</p>
        <div class="img-contents">
          <img src="{{ asset('Medilab') }}/assets/img/yudih1.png" alt="Foto Fadhil" class="cards-image" />
        </div>
        <div class="contents">
          <p class="card-heading" style="color: #a435d6b3"; >Graphic Designer</p>
          <p class="card-text" style="color: rgb(255, 255, 255);">
            "Graphic Designer bertanggung jawab melakukan Riset dan merancang asset design pada tampilan antarmuka dengan berkolaborasi bersama tim UI/UX."
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Contact Section -->
    <section id="gallery" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Lokasi dimana restoran ini berada</p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.4686063879628!2d107.62990751772716!3d-6.8981132148716044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b06875bf51%3A0x14afc3c0094c06c4!2sUniversitas%20Sangga%20Buana!5e0!3m2!1sen!2sid!4v1717549575063!5m2!1sen!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Lokasi</h3>
                <p>Jl. Khp Hasan Mustopa No.68, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Hubungi Kami</h3>
                <p>(022) 21000307</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>usbypkp@ac.id</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <!-- <span class="sitename">Medilab</span> -->
            <img src="{{ asset('Arsha') }}/assets/img/vokasifix.png" class="img-fluid"alt="">
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
  <!-- <div id="preloader"></div> -->
  <div id="preloader">
        <img src="{{ asset('Arsha') }}/assets/img/direktoratypkp.png" alt="Logo Universitas Sangga Buana">
    </div> 

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