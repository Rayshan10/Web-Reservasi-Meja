<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cek Booking - Yummy Restaurant</title>

    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Inter:wght@400;500;600;700&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

    <style>
        /* ── Page Hero ── */
        .page-hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('<?= base_url("assets/img/hero-bg.jpg") ?>') center/cover no-repeat fixed;
            padding: 100px 0 60px;
            text-align: center;
            color: #fff;
        }
        .page-hero h1 {
            font-family: 'Amatic SC', cursive;
            font-size: 56px;
            font-weight: 700;
            color: #fff;
        }
        .page-hero p { opacity: .85; }
        .page-hero .breadcrumb-item a { color: #ce1212; }
        .page-hero .breadcrumb-item.active { color: #fff; }
        .page-hero .breadcrumb-item + .breadcrumb-item::before { color: #aaa; }

        /* ── Check Card ── */
        .check-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0,0,0,0.08);
            padding: 44px 44px 40px;
        }
        @media (max-width: 576px) {
            .check-card { padding: 28px 20px; }
        }

        /* ── Form ── */
        .form-label {
            font-weight: 600;
            color: #37373f;
            font-size: .9rem;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1.5px solid #e0e0e0;
            font-size: .95rem;
            transition: border-color .2s;
        }
        .form-control:focus {
            border-color: #ce1212;
            box-shadow: 0 0 0 .2rem rgba(206,18,18,.12);
        }

        /* ── Button ── */
        .btn-search {
            background: #ce1212;
            color: #fff;
            padding: 13px 40px;
            border-radius: 50px;
            border: 0;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: .4px;
            width: 100%;
            transition: .3s;
        }
        .btn-search:hover {
            background: #b01010;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(206,18,18,.35);
        }

        /* ── Info boxes ── */
        .info-box {
            background: #fff9f9;
            border: 1.5px solid #f5d0d0;
            border-radius: 10px;
            padding: 16px 20px;
        }
        .info-box i { color: #ce1212; }

        /* ── Back link ── */
        .back-link {
            color: #ce1212;
            text-decoration: none;
            font-weight: 500;
            font-size: .9rem;
            transition: color .2s;
        }
        .back-link:hover { color: #b01010; text-decoration: underline; }
    </style>
</head>

<body class="index-page">

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="<?= site_url('home') ?>" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">Yummy</h1><span>.</span>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= site_url('home') ?>">Home</a></li>
                <li><a href="<?= site_url('home') ?>#about">About</a></li>
                <li><a href="<?= site_url('home') ?>#menu">Menu</a></li>
                <li><a href="<?= site_url('home') ?>#events">Events</a></li>
                <li><a href="<?= site_url('home') ?>#chefs">Chefs</a></li>
                <li><a href="<?= site_url('home') ?>#gallery">Gallery</a></li>
                <li><a href="<?= site_url('home') ?>#contact">Contact</a></li>
                <li><a href="<?= site_url('booking/my-bookings') ?>" class="active">My Booking</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="<?= site_url('auth/logout') ?>">Logout</a>
    </div>
</header>

<!-- ======= Main ======= -->
<main class="main">
<section class="section py-5" style="background:#f9f9f9;">
    <div class="container">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Cek Reservasi</h2>
            <p><span>Masukkan</span> <span class="description-title">Email Kamu</span></p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7" data-aos="fade-up" data-aos-delay="100">
                <div class="check-card">

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <p class="text-muted mb-4" style="font-size:.95rem;">
                        Masukkan alamat email yang kamu gunakan saat membuat booking untuk melihat seluruh riwayat reservasimu.
                    </p>

                    <form action="<?= site_url('booking/my-bookings') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-4">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope me-1" style="color:#ce1212;"></i> Alamat Email
                            </label>
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="email@contoh.com"
                                value="<?= old('email') ?>"
                                required
                                autofocus
                            >
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-search">
                                <i class="bi bi-search me-2"></i> Cari Booking Saya
                            </button>
                        </div>
                    </form>

                    <!-- Info box -->
                    <div class="info-box mb-4">
                        <p class="mb-0 small">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            Pastikan email yang kamu masukkan sama persis dengan email yang digunakan saat booking.
                        </p>
                    </div>

                    <div class="text-center">
                        <a href="<?= site_url('booking') ?>" class="back-link">
                            <i class="bi bi-plus-circle me-1"></i> Buat Booking Baru
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
</main>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer dark-background">
    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div class="address">
                    <h4>Address</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <h4>Contact</h4>
                    <p>
                        <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
                        <strong>Email:</strong> <span>info@example.com</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                    <h4>Opening Hours</h4>
                    <p>
                        <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
                        <strong>Sunday:</strong> <span>Closed</span>
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
        <div class="credits">Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div>
    </div>
</footer>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>
<div id="preloader"></div>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script>AOS.init({ duration: 600, easing: 'ease-in-out', once: true });</script>
</body>
</html>
