<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>USB YPKP D3 Akuntansi</title>
  <style>
    h1.justify {
      text-align: justify;
      color: #DD4A00
    }
    .justify {
      text-align: justify;
      color: #0D0D0D;
    }
    .navmenu ul li a.active {
      color: #DD4A00; /* Highlight active link */
    }
    
  </style>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Arsha') }}/assets/img/direktoratypkp.png" rel="icon">
  <link href="{{ asset('Arsha') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link rel="stylesheet" href="https://fontawesome.com/">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Arsha') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('Arsha') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('Arsha') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('Arsha') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('Arsha') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('Arsha') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
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

<header id="header" class="header sticky-top">

<div class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
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
    <a href="index.html" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{ asset('Arsha') }}/assets/img/vokasifix.png" alt="">
      <!-- <h1 class="sitename">Medilab</h1> -->
    </a>

    <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
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
              <li><a href="{{ url('/kurikulum') }}">Kurikulum</a></li>
              </ul>
          </li>
          <li><a href="#team">Alumni</a></li>
          <li><a href="#services">Berita</a></li>
          <li><a href="#portfolio">Galery</a></li>
          <li><a href="#contact">Daftar</a></li>
      <li class="dropdown">
      <a href="#contact" class="cta-btn d-none d-sm-block">Masuk
    <img src="{{ asset('Arsha') }}/assets/img/clients/iconacc2.png" alt="Daftar" ><i class="bi bi-chevron-down toggle-dropdown"></i></a>
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

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    <a class="cta-btn d-none d-sm-block" href="#appointment">Make an Appointment</a>

  </div>

</div>

</header>

  <main class="main">
  <div class="container4">
        <video muted autoplay loop>
            <source src="{{ asset('Arsha') }}/assets/img/direktoratvokasi.mp4" type="video/mp4">
        </video>
        <div class="buttons2">
            <a href="https://pmb.usbypkp.ac.id/" class="register">
               <strong>Daftar Sekarang</strong>
            </a>
            <div class="links">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
    

    <!-- visi misi Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1 class="justify">Kata Sambutan</h1>
            <h4 class="justify" ><strong>Bambang Rustandi,SE.,MSi.</strong> <br>
            Terimakasih kepada <strong>Fadhil Firdaus Adha</strong> yang telah membuatkan website untuk D3 Prodi Akuntansi yang bahkan telah mengorbankan waktu tidurnya dan yang didampingi Ilham yang senantiasa meng-supportnya </h4> 
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1 class="justify">Kata Sambutan</h1>
            <h4 class="justify" ><strong>Bambang Rustandi,SE.,MSi.</strong> <br>
            Terimakasih kepada <strong>Fadhil Firdaus Adha</strong> yang telah membuatkan website untuk D3 Prodi Akuntansi yang bahkan telah mengorbankan waktu tidurnya dan yang didampingi Ilham yang senantiasa meng-supportnya </h4> 
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

    </section><!-- /visi misi Section -->

      
  

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="zoom-in">

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
          <!-- Section Title -->
           <div class="container section-title" data-aos="fade-up">
             <h2>Mitra Kerja</h2>
           </div><!-- End Section Title -->
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
          </section>

      </div>
      <br><br>
      <div class="container section-title" data-aos="fade-up">
      <h2 class="">Data & Fakta Akuntansi Direktorat Vokasi Sangga Buana YPKP</h2>
      </div>
      <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <!-- <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-user-doctor"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-regular fa-hospital"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center ">
            <!-- <a href="your-link-here" class="stretched-link"></a> -->
            <i class="fa-solid fa-user-graduate"></i>
            <div class="stats-item">
              <div class="counter" data-target="999">
                0
              </div>
              <!-- <span id="research-labs-counter">0</span> -->
              <a href="youtube.com"><b>Mahasiswa</b></a>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center ">
            <!-- <a href="your-link-here" class="stretched-link"></a> -->
            <i class="fa-solid fa-graduation-cap"></i>
            <div class="stats-item">
              <div class="counter" data-target="999">
                0
              </div>
              <!-- <span id="research-labs-counter">0</span> -->
              <a href="youtube.com"><b>Lulusan</b></a>
            </div>
          </div><!-- End Stats Item -->

        

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
            <!-- <a href="your-link-here" class="stretched-link"></a> -->
            <i class="fa-solid fa-chalkboard-user"></i>
            <div class="stats-item">
              <div class="counter" data-target="999">
                0
              </div>
              <!-- <span id="research-labs-counter">0</span> -->
              <a href="youtube.com"><b>Dosen Tetap</b></a>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->
    <script >
        const $counters = document
        .querySelectorAll('.counter');

      $counters.forEach(($counter) => {
        $counter.innerText = '0';
        const updateCounter = () => {
          const target = Number(
            $counter.getAttribute('data-target'),
          );
          const count = Number($counter.innerText);
          const increment = target / 1000;
          if (count < target) {
            $counter.innerText =
              `${Math.ceil(count + increment)}`;
            setTimeout(updateCounter, 100);
          } else {
            $counter.innerText = target;
          }
        };

        updateCounter();
      });

      </script>
      <script>
  document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.navmenu ul li a');

    function activateNavLink() {
      let currentSection = '';
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 50; // Adjust as needed
        if (scrollY >= sectionTop) {
          currentSection = section.getAttribute('id');
        }
      });

      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').includes(currentSection)) {
          link.classList.add('active');
        }
      });
    }

    window.addEventListener('scroll', activateNavLink);
  });
  // gatau bener atau nggak
</script>

    <!-- Pembatas -->

    
    <!-- End About Us Section -->
    <!--   Section -->
    <section id="about" class="about section">

      
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">Tentang Prodi</h2>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">

            <p class="justify">Program Studi D3 Akuntansi di Universitas Sangga Buana YPKP menawarkan pendidikan praktis dalam akuntansi keuangan dan manajemen. Dengan fokus pada penerapan prinsip akuntansi dalam konteks bisnis, mahasiswa dilatih untuk menjadi ahli dalam mengelola laporan keuangan dan analisis data. Keunggulan program ini terletak pada : </p> 
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Kurikulum yang relevan dengan industri.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Pengajar yang berpengalaman.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Kesempatan magang yang memperkaya pengalaman belajar.</span></li>
            </ul>
            <p class="justify">Program ini mempersiapkan mahasiswa untuk memasuki dunia kerja dengan keterampilan yang solid dalam bidang akuntansi.</p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p class="justify"><b>Program Studi D3 Akuntansi</b> menyiapkan lulusan yang terampil sebagai staf bidang akuntansi keuangan, perpajakan dan auditing pada perusahaan, kantor akuntan publik dan instansi pemerintah. Dapat menjadi Entrepreneur bidang investasi pasar modal melalui Galeri Investasi USB-YPKP.</p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section>
    <!-- /About Section -->

    <!-- Why Us Section -->
    <section id="visimisi" class="section why-us" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <!-- <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1"> -->

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="tengah"><strong class="">Visi Misi & Tujuan </strong></h3>
              <!-- <p class="">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>01</span>Visi?</h3>
                <div class="faq-content">
                  <p>Visi
                  Menjadi Program Studi terapan yang bermutu pada bidang
Akuntansi dengan memanfaatkan teknologi informasi dan
komunikasi yang berwawasan global serta berbasis
kewirausahaan di lingkup nasional pada tahun 2030.
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>02</span>Misi?</h3>
                <div class="faq-content">
                  <p>1) Menyelenggarakan sistem pendidikan terapan yang bermutu dengan kompetensi di bidang Pelaporan Keuangan dan Perpajakan yang mengikuti perkembangan bisnis dan memanfaatkan teknologi informasi dan komunikasi dengan didukung tenaga pengajar yang memiliki sertifikasi kompetensi serta sarana laboratorium yang dapat menunjang keilmuan secara praktikal.<br>

2) Menyelenggarakan kegiatan Penelitian Produk berupa Laporan Keuangan, Pelaporan Perpajakan, baik manual maupun komputerisasi yang dapat memberi sumbangan teori dan praktik guna memperkuat pendidikan terapan berbasis kewirausahaan<br>

3) Menyelenggarakan Pengabdian Kepada Masyarakat (PKM) terkait keilmuan Akuntansi serta pengembangan keterampilan di bidang Kewirausahaan yang berguna bagi masyarakat.<br>

4) Mewujudkan kerjasama antar lembaga/ instansi baik di dalam maupun di luar negeri terkait pencapaian kompetensi serta penyerapan lulusan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>03</span>Tujuan?</h3>
                <div class="faq-content">
                  <p>1) Menghasilkan tenaga ahli madya yang bermutu, beretika dan mampu secara praktikal dalam pelaporan keuangan dan perpajakan serta mampu berwirausaha secara profesional, secara mandiri maupun berkelompok.<br>

2) Menghasilkan penelitian produk yang bermanfaat bagi masyarakat yang sesuai dengan keilmuan Akuntansi.<br>

3) Pemberdayaan masyarakat melalui pengabdian kepada masyarakat sesuai bidang keilmuan Akuntansi.<br>

4) Memperluas dan meningkatkan implementasi atas kerjasama dibidang penelitian dan Pengabdian Kepada Masyarakat, pengembangan kurikulum, pemagangan, pertukaran tenaga ahli, penempatan kerja.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>

          </div>

          <!-- <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="{{ asset('Arsha') }}/assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div> -->
        </div>

      </div>

    </section>
    <!-- /Why Us Section -->

    <section id="team" class="team section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
<h2>Alumni</h2>
<p>Kesaksian alumni Universitas Sangga Buana Prodi Akuntansi D3 tentang bagaimana pendidikan di sini membantu mereka mencapai kesuksesan.</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="{{ asset('Arsha') }}/assets/img/udilgg2.png" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Fadhil Firdaus Adha</h4>
          <span>Full Stack Develover | Game Develover</span>
          <p>"Berbekal pendidikan yang solid dari Universitas Sangga Buana, saya mampu mengembangkan karir di bidang teknologi dengan percaya diri. Pengalaman belajar di sini benar-benar tak ternilai."</p>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-linkedin"></i> </a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="{{ asset('Arsha') }}/assets/img/ilhamgg.png" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Ilham Khoerun Nasihin</h4>
          <span>Master Angler</span>
          <p>Ilham Khoerun Nasihin, lulusan Prodi Akuntansi D3 Universitas Sangga Buana, memberikan kesaksiannya tentang bagaimana pendidikan di sini membantunya dalam karier memancingnya.</p>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-linkedin"></i> </a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="{{ asset('Arsha') }}/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>William Anderson</h4>
          <span>CTO</span>
          <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-linkedin"></i> </a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="{{ asset('Arsha') }}/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Amanda Jepson</h4>
          <span>Accountant</span>
          <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-linkedin"></i> </a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->

  </div>

</div>

</section><!-- /Team Section -->


    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-center">
            <img src="{{ asset('Arsha') }}/assets/img/skills.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content">

            <h3>Voluptatem dignissimos provident quasi corporis voluptas</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>

            <div class="skills-content skills-animation">

              <div class="progress">
                <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

   <!-- Services Section -->
<section id="services">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Berita Terkini</h2>
  <p>Ringkasan konten berita yang terjadi di D3 prodi akuntansi</p>
</div><!-- End Section Title -->

<div class="container">
  <div class="row gy-5">
    <div class="col-md-4 mb-3">
      <div class="card1">
        <img src="{{ asset('Arsha') }}/assets/img/rapat1.png" class="card-img-top" alt="Knives Out Banner">
        <div class="detail1">
          <video src="{{ asset('Arsha') }}/assets/img/videos/gojovsukuna.mp4" autoplay loop muted></video>
          <div class="text1">
            <h2>Rapat online</h2>
            <div>
              <b>Keterangan:</b>
              jurusan akuntansi mengadakan rapat online yang dihadiri oleh dosen panurdin.
            </div>
          </div>
        </div>
        <div class="cardbody1">
          <i class="bi-calendar-event" class="cardtext1"> 23 Maret 2023</i>
              </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card1">
        <img src="{{ asset('Arsha') }}/assets/img/rapat2.png" class="card-img-top" alt="Knives Out Banner">
        <div class="detail1">
          <video src="{{ asset('Arsha') }}/assets/img/videos/sigmal.mp4" autoplay loop muted></video>
          <div class="text1">
            <h2>Rapat offline</h2>
            <div>
            <b>Keterangan:</b>
            mahasiswa jurusan akuntansi mengadakan rapat offline di sekre SEMA.
            </div>
          </div>
        </div>
        <div class="cardbody1">
          <i class="bi-calendar-event" class="cardtext1"> 17 juli 2023</i>
              </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card1">
        <img src="{{ asset('Arsha') }}/assets/img/image05.png" class="card-img-top" alt="Knives Out Banner">
        <div class="detail1">
          <video src="{{ asset('Arsha') }}/assets/img/videos/vokasiseru.mp4" autoplay loop muted></video>
          <div class="text1">
            <h2>Promosi Vokasi</h2>
            <div>
              <b>Keterangan:</b>
              PROMOSI (Program Orientasi Mahasiswa Baru Vokasi) adalah kegiatan menyambut mahasiswa baru Direktorat Vokasi Universitas Sangga Buana
            </div>
          </div>
        </div>
        <div class="cardbody1">
          <i class="bi-calendar-event" class="cardtext1"> 9 September 2023</i>
              </div>
      </div>
    </div>
    </div>

      <div class="container">
  <div class="row gy-5">
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
          <video src="{{ asset('Arsha') }}/assets/img/videos/kosong.mp4" autoplay loop muted></video>
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
</section><!-- /Services Section -->


    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <img src="{{ asset('Arsha') }}/assets/img/cta-bg.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <!-- <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <!-- <a class="cta-btn align-middle" href="#">pencet</a> -->
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="departments" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>AKTIVITAS CIVITAS</h2>
        <p>Melihat Para Mahasiswa dan Mahasiswi D3 Akuntansi melakukan berrbagai kegiatan</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Dalam Kampus</li>
            <li data-filter=".filter-product">Masyarakat</li>
            <li data-filter=".filter-branding">luar Kampus</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('Arsha') }}/assets/img/masonry-portfolio/fadil1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Milad</h4>
                <p>Pembacaan ayat suci Al-Quran oleh Ustad Fadil</p>
                <a href="{{ asset('Arsha') }}/assets/img/masonry-portfolio/fadil1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset('Arsha') }}/assets/img/masonry-portfolio/akuntan1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Milad 2023</h4>
                <p>Mahasiswa Akuntan sedang membagikan Nasi kotak</p>
                <a href="{{ asset('Arsha') }}/assets/img/masonry-portfolio/akuntan1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset('Arsha') }}/assets/img/masonry-portfolio/yudih1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Genji kelas teri</h4>
                <p>"apa lu liat liat" ucapnya </p>
                <a href="{{ asset('Arsha') }}/assets/img/masonry-portfolio/yudih1.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="{{ asset('Arsha') }}/assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset('Arsha') }}/assets/img/masonry-portfolio/kocak1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>My trip my Adventure</h4>
                <p>Sedang Berlibur di dekat jurang</p>
                <a href="{{ asset('Arsha') }}/assets/img/masonry-portfolio/kocak1.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

     <!-- Team Section -->

      <!-- <section id="team" class="container1"> -->
          <!-- <div class="slide1">
              <div class="item1" style="background-image: url('{{ asset('Arsha/assets/img/image05.png') }}');">
                  <div class="content1">
                      <div class="name1">Akuntansi D3</div>
                      <div class="des1">
                          wasripan : wasripan jaya jaya  <br>Title : mantap sekali<br>
                          Power : cicak jatuh perkelompok
                      </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha/assets/img/suryafix1.png') }}');">
                  <div class="content1">
                      <div class="name1">Surya Ansori</div>
                      <div class="des1">
                          Nama : Surya Ansori M.M.,S.E <br>Jenis Kelamin : Laki-Laki <br>
                          Status : Dosen Tetap <br> Lahir : Sukabumi <br>
                      </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha/assets/img/sriwahyuni1.png') }}');">
                  <div class="content1">
                      <div class="name1">Sri Wahyuni</div>
                      <div class="des1">
                          Nama : Surya Wahyuni M.M.,S.Sn <br>Jenis Kelamin : Perempuan<br>
                          Status : Dosen Tetap <br> Lahir : Palembang <br>
                      </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha/assets/img/angel1.png') }}');">
                  <div class="content1">
                      <div class="name1">Mayra</div>
                      <div class="des1">
                          Nama : Mayra The Angel <br>Title : kayangan turun dari langit <br>
                          Power : Terpesona <br>
                      </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha/assets/img/fadhil03.png') }}');">
                  <div class="content1">
                      <div class="name1">Fadhil FA</div>
                      <div class="des1">
                          Nama : Fadhil Firdaus Adha <br>Title : Panitia Olimpiade Planet Namek <br>
                          Power : sosok asli Ultramen Blazar <br>
                      </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha/assets/img/ilham3.png') }}');">
                  <div class="content1">
                      <div class="name1">Ilham KN</div>
                      <div class="des1">
                          Nama : Ilham Khoerun Nasihin <br>Title : Juara Olimpiade no.1 Planet Namek<br>
                          Power : Spakbor motor
                      </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha/assets/img/yudi1.png') }}');">
                  <div class="content1">
                      <div class="name1">YudiMediatek</div>
                      <div class="des1">
                          Nama : Yudi Mediatek 3G <br>Title : Apa lu liat-liat<br>
                          Power : Sosok asli Epic Abadi
                      </div>
                  </div>
              </div>
              <div class="item1" style="background-image: url('{{ asset('Arsha/assets/img/d3if1.png') }}');">
                  <div class="content1">
                      <div class="name1">D3 IF</div>
                      <div class="des1">
                          MY TRIP MY ADVENTURE
                      </div>
                  </div>
              </div>
          </div>
          <div class="buttons1">
              <button class="prev1"></button>
              <button class="next1"></button>
          </div>
      </div>
      <script >
        const nextButton = document.querySelector('.next1');
      const prevButton = document.querySelector('.prev1');
      
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
      </section> -->


    


<!-- /Team Section -->

      <!-- Pricing Section -->
    <!-- <section id="pricing" class="pricing section"> -->

      <!-- Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div> -->
      <!-- End Section Title -->
<!-- 
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>
 

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>

        </div>

      </div>
          </div>

    </section> -->
    <!-- /Pricing Section -->

    <!-- Testimonials Section -->
    <!-- <section id="testimonials" class="testimonials section">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

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
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> -->
    <!-- /Testimonials Section -->

    

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Daftar</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>Jl. Khp Hasan Mustopa No.68, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Hubungi Kami</h3>
                  <p>(022) 21000307</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.4686063879628!2d107.62990751772716!3d-6.8981132148716044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b06875bf51%3A0x14afc3c0094c06c4!2sUniversitas%20Sangga%20Buana!5e0!3m2!1sen!2sid!4v1717549575063!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
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
          <img class="ypkp1" src="{{ asset('Arsha') }}/assets/img/vokasifix.png" alt="Logo">
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
  <!-- <script src="{{ asset('Arsha') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script> -->
  <script src="{{ asset('Arsha') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('Arsha') }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('Arsha') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('Arsha') }}/assets/js/main.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js"></script> -->


</body>

</html>

