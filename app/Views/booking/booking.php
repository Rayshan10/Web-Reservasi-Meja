<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Book a Table - Yummy Restaurant</title>

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
        .page-hero p {
            font-size: 1rem;
            opacity: .85;
        }
        .page-hero .breadcrumb-item a { color: #ce1212; }
        .page-hero .breadcrumb-item.active { color: #fff; }
        .page-hero .breadcrumb-item + .breadcrumb-item::before { color: #aaa; }

        /* ── Booking Form Card ── */
        .booking-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0,0,0,0.08);
            padding: 40px 44px;
        }
        @media (max-width: 576px) {
            .booking-card { padding: 28px 20px; }
        }

        /* ── Form Controls ── */
        .form-label {
            font-weight: 600;
            color: #37373f;
            font-size: .9rem;
        }
        .form-control, .form-select {
            border-radius: 8px;
            padding: 11px 14px;
            border: 1.5px solid #e0e0e0;
            font-size: .95rem;
            transition: border-color .2s;
        }
        .form-control:focus, .form-select:focus {
            border-color: #ce1212;
            box-shadow: 0 0 0 .2rem rgba(206,18,18,.12);
        }

        /* ── Table Selector ── */
        .table-grid-label {
            font-weight: 600;
            color: #37373f;
            font-size: .9rem;
            margin-bottom: 12px;
        }
        .table-card {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 18px 10px 14px;
            text-align: center;
            cursor: pointer;
            transition: all .25s;
            user-select: none;
        }
        .table-card:hover {
            border-color: #ce1212;
            background: #fff5f5;
            transform: translateY(-3px);
        }
        .table-card.selected {
            border-color: #ce1212;
            background: #ce1212;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(206,18,18,.3);
        }
        .table-card i {
            font-size: 1.6rem;
            color: #ce1212;
            display: block;
            margin-bottom: 6px;
        }
        .table-card.selected i { color: #fff; }
        .table-card p { margin: 0; font-weight: 600; font-size: .9rem; }
        .table-card small { font-size: .76rem; opacity: .8; }

        /* ── Submit Button ── */
        .btn-book {
            background: #ce1212;
            color: #fff;
            padding: 13px 40px;
            border-radius: 50px;
            border: 0;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: .4px;
            transition: .3s;
            width: 100%;
        }
        .btn-book:hover {
            background: #b01010;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(206,18,18,.35);
        }

        /* ── Section divider ── */
        .form-divider {
            border: none;
            border-top: 1.5px solid #f0f0f0;
            margin: 24px 0;
        }

        /* ── Alert ── */
        .alert { border-radius: 10px; }
    </style>
</head>

<body class="index-page">

<!-- ======= Header (sama dengan home) ======= -->
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
                <li><a href="<?= site_url('booking/my-bookings') ?>" class="active">Booking Saya</a></li>
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
            <h2>Reservasi</h2>
            <p><span>Isi Form</span> <span class="description-title">Booking Mejamu</span></p>
        </div>

        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger mx-auto mb-4" style="max-width:760px;" data-aos="fade-up">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <?php if (isset($errors) && $errors): ?>
            <div class="alert alert-warning mx-auto mb-4" style="max-width:760px;" data-aos="fade-up">
                <ul class="mb-0">
                    <?php foreach ($errors as $err): ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="booking-card">

                    <form id="bookingForm" action="<?= site_url('booking/store') ?>" method="post">
                        <?= csrf_field() ?>

                        <!-- Data Diri -->
                        <h5 class="fw-bold mb-3" style="color:#37373f;">
                            <i class="bi bi-person-fill me-2" style="color:#ce1212;"></i>Data Diri
                        </h5>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                       placeholder="Nama lengkap kamu"
                                       value="<?= old('nama') ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telepon" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="telepon" name="telepon"
                                       placeholder="08xxxxxxxxxx"
                                       value="<?= old('telepon') ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="email@contoh.com"
                                       value="<?= old('email') ?>" required>
                            </div>
                        </div>

                        <hr class="form-divider">

                        <!-- Detail Reservasi -->
                        <h5 class="fw-bold mb-3" style="color:#37373f;">
                            <i class="bi bi-calendar3 me-2" style="color:#ce1212;"></i>Detail Reservasi
                        </h5>
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                       value="<?= old('tanggal') ?>" required>
                            </div>
                            <div class="col-md-4">
                                <label for="waktu" class="form-label">Waktu</label>
                                <select class="form-select" id="waktu" name="waktu" required>
                                    <option value="" disabled <?= old('waktu') ? '' : 'selected' ?>>Pilih waktu</option>
                                    <?php
                                    $slots = ['11:00','11:30','12:00','12:30','13:00','18:00','18:30','19:00','19:30','20:00'];
                                    foreach ($slots as $s):
                                    ?>
                                    <option value="<?= $s ?>" <?= old('waktu') == $s ? 'selected' : '' ?>><?= $s ?> WIB</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="jumlah_tamu" class="form-label">Jumlah Tamu</label>
                                <select class="form-select" id="jumlah_tamu" name="jumlah_tamu" required>
                                    <option value="" disabled <?= old('jumlah_tamu') ? '' : 'selected' ?>>Pilih jumlah</option>
                                    <?php for ($i = 1; $i <= 6; $i++): ?>
                                    <option value="<?= $i ?>" <?= old('jumlah_tamu') == $i ? 'selected' : '' ?>>
                                        <?= $i ?> Orang
                                    </option>
                                    <?php endfor; ?>
                                    <option value="7+" <?= old('jumlah_tamu') == '7+' ? 'selected' : '' ?>>7+ Orang</option>
                                </select>
                            </div>
                        </div>

                        <hr class="form-divider">

                        <!-- Pilih Meja -->
                        <h5 class="fw-bold mb-3" style="color:#37373f;">
                            <i class="bi bi-grid-3x3-gap me-2" style="color:#ce1212;"></i>Pilih Meja
                        </h5>
                        <p class="text-muted small mb-3">Klik meja yang ingin kamu pesan</p>

                        <?php
                        $mejas = [
                            ['id'=>1,'max'=>2],['id'=>2,'max'=>4],['id'=>3,'max'=>4],
                            ['id'=>4,'max'=>6],['id'=>5,'max'=>6],['id'=>6,'max'=>8],
                        ];
                        ?>
                        <div class="row g-3 mb-4" id="tableGrid">
                            <?php foreach ($mejas as $meja): ?>
                            <div class="col-4 col-md-2">
                                <div class="table-card" data-table="<?= $meja['id'] ?>">
                                    <i class="bi bi-cup-hot"></i>
                                    <p>Meja <?= $meja['id'] ?></p>
                                    <small>Max <?= $meja['max'] ?> org</small>
                                    <input type="radio" name="meja_id" value="<?= $meja['id'] ?>"
                                           class="d-none"
                                           <?= old('meja_id') == $meja['id'] ? 'checked' : '' ?>>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <hr class="form-divider">

                        <!-- Catatan -->
                        <div class="mb-4">
                            <label for="catatan" class="form-label">
                                <i class="bi bi-chat-left-text me-1" style="color:#ce1212;"></i>Catatan Khusus
                                <span class="text-muted fw-normal">(opsional)</span>
                            </label>
                            <textarea class="form-control" id="catatan" name="catatan" rows="3"
                                      placeholder="Contoh: alergi makanan, preferensi tempat duduk, acara ulang tahun, dll."><?= old('catatan') ?></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-book">
                                <i class="bi bi-calendar2-check me-2"></i>Konfirmasi Reservasi
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>
</main>

<!-- ======= Footer (sama dengan home) ======= -->
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

<script>
AOS.init({ duration: 600, easing: 'ease-in-out', once: true });

// Table selector
document.querySelectorAll('.table-card').forEach(function(card) {
    card.addEventListener('click', function() {
        document.querySelectorAll('.table-card').forEach(c => c.classList.remove('selected'));
        this.classList.add('selected');
        this.querySelector('input[type="radio"]').checked = true;
    });
});

// Restore selected state on page reload (old input)
document.querySelectorAll('input[name="meja_id"]').forEach(function(radio) {
    if (radio.checked) {
        radio.closest('.table-card').classList.add('selected');
    }
});

// Form submit validation
document.getElementById('bookingForm').addEventListener('submit', function(e) {
    if (!document.querySelector('input[name="meja_id"]:checked')) {
        e.preventDefault();
        alert('Silakan pilih meja terlebih dahulu.');
    }
});

// Prevent past dates
document.getElementById('tanggal').min = new Date().toISOString().split('T')[0];
</script>
</body>
</html>
