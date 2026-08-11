<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Yummy Restaurant - Fine Dining Jakarta</title>
    <meta name="description" content="Yummy Restaurant Jakarta - Restoran fine dining dengan menu fusion Indonesia-Western. Nikmati cita rasa autentik dengan sentuhan modern di jantung Kemang, Jakarta Selatan.">
    <meta name="keywords" content="restoran jakarta, fine dining jakarta, booking meja jakarta, yummy restaurant, fusion indonesia western">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Yummy</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="<?= site_url('booking/my-bookings') ?>">My Booking</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="<?= site_url('auth/logout') ?>">Logout</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Cita Rasa Autentik<br>dalam Setiap Sajian</h1>
            <p data-aos="fade-up" data-aos-delay="100">Nikmati pengalaman makan malam yang tak terlupakan dengan menu fusion Indonesia–Western terbaik, diracik langsung oleh chef berpengalaman kami di jantung kota Jakarta.</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="<?= site_url('booking') ?>" class="btn-get-started">Book a Table</a>
              <a href="<?= site_url('booking/my-bookings') ?>" class="btn-watch-video d-flex align-items-center ms-4">
                <i class="bi bi-calendar2-check"></i>
                <span>My Booking</span>
              </a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="<?= base_url('assets/img/hero-img.png') ?>" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p><span>Learn More</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="<?= base_url('assets/img/about.jpg') ?>" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3>Book a Table</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Yummy Restaurant hadir sejak 2015 dengan satu misi sederhana — menghadirkan cita rasa masakan Indonesia yang kaya rempah dalam balutan presentasi modern yang elegan.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Bahan baku segar pilihan yang didatangkan langsung dari petani lokal setiap hari.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Setiap hidangan diracik oleh chef berpengalaman lebih dari 15 tahun di industri kuliner.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Suasana restoran yang nyaman dan hangat, cocok untuk makan bersama keluarga, kencan, maupun pertemuan bisnis.</span></li>
              </ul>
              <p>
                Kami percaya bahwa makanan yang baik bukan hanya soal rasa, tapi juga soal momen. Di Yummy, setiap kunjungan adalah pengalaman yang kami rancang dengan penuh perhatian — dari sambutan pertama hingga suapan terakhir.
              </p>

              <div class="position-relative mt-4">
                <img src="<?= base_url('assets/img/about-2.jpg') ?>" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Mengapa Memilih Yummy?</h3>
              <p>
                Kami bukan sekadar restoran. Yummy adalah tempat di mana setiap hidangan dibuat dengan sepenuh hati, menggunakan bahan-bahan terbaik, dan disajikan dalam suasana yang membuat Anda merasa seperti di rumah sendiri.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Selengkapnya</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-award"></i>
                  <h4>Bahan Premium Pilihan</h4>
                  <p>Setiap bahan baku kami seleksi ketat dari sumber terpercaya untuk memastikan kualitas dan kesegaran di setiap piring.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Chef Berpengalaman</h4>
                  <p>Tim chef kami telah meraih berbagai penghargaan kuliner nasional dan membawa pengalaman memasak dari berbagai penjuru dunia.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-heart"></i>
                  <h4>Layanan Sepenuh Hati</h4>
                  <p>Dari reservasi hingga dessert terakhir, tim kami hadir untuk memastikan pengalaman makan Anda benar-benar sempurna.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="<?= base_url('assets/img/stats-bg.jpg') ?>" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="12500" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pelanggan Puas</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Menu Pilihan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
              <p>Tahun Berpengalaman</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Staff Profesional</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">Yummy Menu</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Starters</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Breakfast</h4>
            </a><!-- End tab nav item -->

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Lunch</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Dinner</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Starters</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-1.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-1.png') ?>" class="menu-img img-fluid" alt="Tahu Crispy Sambal Matah"></a>
                <h4>Tahu Crispy Sambal Matah</h4>
                <p class="ingredients">Tahu sutra, sambal matah, kemangi, jeruk limau</p>
                <p class="price">Rp 35.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-2.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-2.png') ?>" class="menu-img img-fluid" alt="Bruschetta Tempe"></a>
                <h4>Bruschetta Tempe</h4>
                <p class="ingredients">Sourdough, tempe marinasi, tomat ceri, basil, olive oil</p>
                <p class="price">Rp 42.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-3.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-3.png') ?>" class="menu-img img-fluid" alt="Soto Betawi Velouté"></a>
                <h4>Soto Betawi Velouté</h4>
                <p class="ingredients">Kaldu soto betawi, santan, daging sapi, kentang, emping</p>
                <p class="price">Rp 58.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-4.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-4.png') ?>" class="menu-img img-fluid" alt="Bakwan Jagung Manis"></a>
                <h4>Bakwan Jagung Manis</h4>
                <p class="ingredients">Jagung manis, daun bawang, wortel, saus cabai merah</p>
                <p class="price">Rp 32.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-5.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-5.png') ?>" class="menu-img img-fluid" alt="Lumpia Ayam Truffle"></a>
                <h4>Lumpia Ayam Truffle</h4>
                <p class="ingredients">Kulit lumpia, ayam cincang, truffle oil, rebung, saus hoisin</p>
                <p class="price">Rp 65.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-6.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-6.png') ?>" class="menu-img img-fluid" alt="Gado-Gado Platter"></a>
                <h4>Gado-Gado Platter</h4>
                <p class="ingredients">Sayuran rebus pilihan, tahu, tempe, telur, saus kacang premium</p>
                <p class="price">Rp 48.000</p>
              </div>

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Breakfast</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-1.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-1.png') ?>" class="menu-img img-fluid" alt="Nasi Uduk Yummy"></a>
                <h4>Nasi Uduk Yummy</h4>
                <p class="ingredients">Nasi uduk, ayam goreng rempah, tempe orek, telur balado, kerupuk</p>
                <p class="price">Rp 55.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-2.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-2.png') ?>" class="menu-img img-fluid" alt="Avocado Toast & Telur"></a>
                <h4>Avocado Toast & Telur</h4>
                <p class="ingredients">Sourdough panggang, alpukat, telur poached, microgreens, chili flakes</p>
                <p class="price">Rp 62.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-3.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-3.png') ?>" class="menu-img img-fluid" alt="Bubur Ayam Spesial"></a>
                <h4>Bubur Ayam Spesial</h4>
                <p class="ingredients">Bubur beras, ayam suwir, cakwe, kacang, bawang goreng, kaldu ayam</p>
                <p class="price">Rp 45.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-4.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-4.png') ?>" class="menu-img img-fluid" alt="French Toast Pandan"></a>
                <h4>French Toast Pandan</h4>
                <p class="ingredients">Roti brioche, custard pandan, maple syrup, fresh berries, whipped cream</p>
                <p class="price">Rp 58.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-5.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-5.png') ?>" class="menu-img img-fluid" alt="Omelette Rendang"></a>
                <h4>Omelette Rendang</h4>
                <p class="ingredients">Telur omega, rendang sapi, keju mozzarella, paprika, daun bawang</p>
                <p class="price">Rp 70.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-6.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-6.png') ?>" class="menu-img img-fluid" alt="Smoothie Bowl Tropis"></a>
                <h4>Smoothie Bowl Tropis</h4>
                <p class="ingredients">Acai, mangga, pisang, granola, chia seed, kelapa parut, madu</p>
                <p class="price">Rp 52.000</p>
              </div>

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Lunch</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-1.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-1.png') ?>" class="menu-img img-fluid" alt="Nasi Campur Bali"></a>
                <h4>Nasi Campur Bali</h4>
                <p class="ingredients">Nasi putih, ayam betutu, sate lilit, lawar, plecing kangkung, sambal</p>
                <p class="price">Rp 85.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-2.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-2.png') ?>" class="menu-img img-fluid" alt="Grilled Chicken Bumbu Rujak"></a>
                <h4>Grilled Chicken Bumbu Rujak</h4>
                <p class="ingredients">Ayam kampung, bumbu rujak, nasi putih, lalapan, sambal terasi</p>
                <p class="price">Rp 92.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-3.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-3.png') ?>" class="menu-img img-fluid" alt="Pasta Rendang Sapi"></a>
                <h4>Pasta Rendang Sapi</h4>
                <p class="ingredients">Fettuccine, daging rendang sapi, parmesan, kemangi, cabai rawit</p>
                <p class="price">Rp 110.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-4.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-4.png') ?>" class="menu-img img-fluid" alt="Sop Buntut Bakar"></a>
                <h4>Sop Buntut Bakar</h4>
                <p class="ingredients">Buntut sapi, kentang, wortel, kaldu rempah, nasi putih, emping</p>
                <p class="price">Rp 120.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-5.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-5.png') ?>" class="menu-img img-fluid" alt="Mie Goreng Seafood Premium"></a>
                <h4>Mie Goreng Seafood</h4>
                <p class="ingredients">Mie telur, udang, cumi, kerang, sayuran, telur, kecap manis</p>
                <p class="price">Rp 98.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-6.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-6.png') ?>" class="menu-img img-fluid" alt="Caesar Salad Ayam Suwir"></a>
                <h4>Caesar Salad Ayam Suwir</h4>
                <p class="ingredients">Romaine, ayam suwir, crouton, parmesan, saus caesar, telur puyuh</p>
                <p class="price">Rp 75.000</p>
              </div>

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-1.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-1.png') ?>" class="menu-img img-fluid" alt="Ribeye Steak Bumbu Bali"></a>
                <h4>Ribeye Steak Bumbu Bali</h4>
                <p class="ingredients">Ribeye 250gr, bumbu bali, mashed potato, grilled asparagus, red wine jus</p>
                <p class="price">Rp 245.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-2.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-2.png') ?>" class="menu-img img-fluid" alt="Salmon Kuah Pindang"></a>
                <h4>Salmon Kuah Pindang</h4>
                <p class="ingredients">Salmon fillet, kuah pindang palembang, sayuran, nasi putih</p>
                <p class="price">Rp 185.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-3.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-3.png') ?>" class="menu-img img-fluid" alt="Duck Confit Kecombrang"></a>
                <h4>Duck Confit Kecombrang</h4>
                <p class="ingredients">Bebek confit, sambal kecombrang, kentang rosti, pickled vegetables</p>
                <p class="price">Rp 195.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-4.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-4.png') ?>" class="menu-img img-fluid" alt="Rawon Daging Wagyu"></a>
                <h4>Rawon Daging Wagyu</h4>
                <p class="ingredients">Wagyu saikoro, kuah rawon hitam, telur asin, tauge, kerupuk udang</p>
                <p class="price">Rp 210.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-5.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-5.png') ?>" class="menu-img img-fluid" alt="Lobster Thermidor Saus Padang"></a>
                <h4>Lobster Saus Padang</h4>
                <p class="ingredients">Lobster segar, saus cabai Padang, bawang bombay, paprika, nasi putih</p>
                <p class="price">Rp 350.000</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="<?= base_url('assets/img/menu/menu-item-6.png') ?>" class="glightbox"><img src="<?= base_url('assets/img/menu/menu-item-6.png') ?>" class="menu-img img-fluid" alt="Dessert Platter Nusantara"></a>
                <h4>Dessert Platter Nusantara</h4>
                <p class="ingredients">Klepon, dadar gulung, onde-onde, es krim kelapa, kue lapis, saus pandan</p>
                <p class="price">Rp 88.000</p>
              </div>

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONIALS</h2>
        <p>What Are They <span class="description-title">Saying About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
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
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Sudah beberapa kali makan di Yummy dan tidak pernah kecewa. Rendang wagyu-nya juara banget, dagingnya empuk dan bumbunya meresap sempurna. Suasananya juga nyaman untuk dinner romantis. Highly recommended!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Anisa Rahmawati</h3>
                      <h4>Food Blogger</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="<?= base_url('assets/img/testimonials/testimonials-1.jpg') ?>" class="img-fluid testimonial-img" alt="Anisa Rahmawati">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Kami mengadakan dinner ulang tahun di Yummy dan semuanya berjalan luar biasa. Staff-nya ramah dan profesional, makanannya enak, dan dekorasinya memukau. Akan pasti kembali lagi untuk acara keluarga berikutnya!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Budi Santoso</h3>
                      <h4>Pengusaha</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="<?= base_url('assets/img/testimonials/testimonials-2.jpg') ?>" class="img-fluid testimonial-img" alt="Budi Santoso">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Soto betawi velouté-nya adalah kreasi yang genius! Perpaduan teknik memasak Prancis dengan cita rasa Jakarta asli. Sebagai pecinta kuliner, saya sangat terkesan dengan inovasi menu di Yummy. Chefnya berbakat!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Chef Deandra Putri</h3>
                      <h4>Culinary Instructor</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="<?= base_url('assets/img/testimonials/testimonials-3.jpg') ?>" class="img-fluid testimonial-img" alt="Chef Deandra Putri">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Tempat favorit saya untuk business lunch. Makanannya konsisten enak setiap kali datang, porsinya cukup, dan suasananya kondusif untuk meeting. Sistem booking online-nya juga praktis banget, tinggal pilih meja dan konfirmasi!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Rizky Firmansyah</h3>
                      <h4>Marketing Director</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="<?= base_url('assets/img/testimonials/testimonials-4.jpg') ?>" class="img-fluid testimonial-img" alt="Rizky Firmansyah">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
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
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(<?= base_url('assets/img/events-1.jpg') ?>)">
              <h3>Private Dinner</h3>
              <div class="price align-self-start">Mulai Rp 500.000/orang</div>
              <p class="description">
                Nikmati makan malam eksklusif di ruang private kami yang elegan. Cocok untuk kencan, anniversary, atau perayaan spesial berdua. Termasuk dekorasi meja, menu 4-course, dan musisi akustik pilihan.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(<?= base_url('assets/img/events-2.jpg') ?>)">
              <h3>Birthday Party</h3>
              <div class="price align-self-start">Mulai Rp 3.500.000</div>
              <p class="description">
                Rayakan hari spesialmu bersama orang-orang tercinta di Yummy. Kami sediakan dekorasi balon dan bunga, kue ulang tahun custom, menu buffet pilihan, dan dokumentasi foto profesional.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(<?= base_url('assets/img/events-3.jpg') ?>)">
              <h3>Corporate Event</h3>
              <div class="price align-self-start">Mulai Rp 8.500.000</div>
              <p class="description">
                Solusi lengkap untuk business gathering, team dinner, hingga peluncuran produk. Tersedia fasilitas proyektor, sound system, dan tim event organizer yang berpengalaman mendampingi acara Anda.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(<?= base_url('assets/img/events-4.jpg') ?>)">
              <h3>Wedding Reception</h3>
              <div class="price align-self-start">Mulai Rp 25.000.000</div>
              <p class="description">
                Jadikan hari pernikahan Anda semakin berkesan dengan paket wedding reception Yummy. Termasuk dekorasi premium, cocktail reception, makan malam mewah untuk hingga 100 tamu, dan tim wedding planner dedicat.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tim Chef</h2>
        <p><span>Kenali</span> <span class="description-title">Chef Profesional Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="<?= base_url('assets/img/chefs/chefs-1.jpg') ?>" class="img-fluid" alt="Chef Arman Wijaya">
                <div class="social">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Arman Wijaya</h4>
                <span>Executive Chef</span>
                <p>Lulusan Le Cordon Bleu Paris dengan pengalaman 18 tahun. Chef Arman adalah otak di balik konsep fusion Indonesia–Western yang menjadi identitas unik Yummy Restaurant.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="<?= base_url('assets/img/chefs/chefs-2.jpg') ?>" class="img-fluid" alt="Chef Sari Dewi">
                <div class="social">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sari Dewi</h4>
                <span>Pastry Chef</span>
                <p>Spesialis dessert dan kue tradisional yang dimodernisasi. Chef Sari meraih penghargaan Best Pastry Chef Indonesia 2022 dan dikenal karena kreasi dessert platter Nusantara yang memukau.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="<?= base_url('assets/img/chefs/chefs-3.jpg') ?>" class="img-fluid" alt="Chef Bagas Pratama">
                <div class="social">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Bagas Pratama</h4>
                <span>Sous Chef</span>
                <p>Ahli masakan nusantara dengan keahlian khusus pada hidangan berbasis seafood dan masakan Sumatra. Chef Bagas memastikan standar kualitas bahan baku dan konsistensi rasa di setiap sajian.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

        </div>

      </div>

    </section><!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <!-- /Book A Table Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/img/gallery/gallery-1.jpg') ?>"><img src="<?= base_url('assets/img/gallery/gallery-1.jpg') ?>" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/img/gallery/gallery-2.jpg') ?>"><img src="<?= base_url('assets/img/gallery/gallery-2.jpg') ?>" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/img/gallery/gallery-3.jpg') ?>"><img src="<?= base_url('assets/img/gallery/gallery-3.jpg') ?>" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/img/gallery/gallery-4.jpg') ?>"><img src="<?= base_url('assets/img/gallery/gallery-4.jpg') ?>" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/img/gallery/gallery-5.jpg') ?>"><img src="<?= base_url('assets/img/gallery/gallery-5.jpg') ?>" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/img/gallery/gallery-6.jpg') ?>"><img src="<?= base_url('assets/img/gallery/gallery-6.jpg') ?>" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/img/gallery/gallery-7.jpg') ?>"><img src="<?= base_url('assets/img/gallery/gallery-7.jpg') ?>" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/img/gallery/gallery-8.jpg') ?>"><img src="<?= base_url('assets/img/gallery/gallery-8.jpg') ?>" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl. Kemang Raya No. 18, Kemang, Jakarta Selatan, DKI Jakarta 12730</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Hubungi Kami</h3>
                <p>+62 21 7884 5566 &nbsp;|&nbsp; +62 812 9000 1234</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>reservasi@yummyrestaurant.id &nbsp;|&nbsp; info@yummyrestaurant.id</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Jam Operasional</h3>
                <p><strong>Senin – Sabtu:</strong> 10.00 – 22.00 WIB &nbsp;|&nbsp; <strong>Minggu:</strong> 10.00 – 21.00 WIB</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Alamat</h4>
            <p>Jl. Kemang Raya No. 18</p>
            <p>Jakarta Selatan 12730</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak</h4>
            <p>
              <strong>Telepon:</strong> <span>+62 21 7884 5566</span><br>
              <strong>Email:</strong> <span>info@yummyrestaurant.id</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Buka</h4>
            <p>
              <strong>Sen – Sab:</strong> <span>10.00 – 22.00 WIB</span><br>
              <strong>Minggu:</strong> <span>10.00 – 21.00 WIB</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Yummy</strong> <span>All Rights Reserved</span></p>
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
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>

  <!-- Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>