<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Booking Saya - Yummy Restaurant</title>

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
        .page-hero .email-badge {
            display: inline-block;
            background: rgba(206,18,18,.85);
            color: #fff;
            border-radius: 50px;
            padding: 5px 18px;
            font-size: .9rem;
            font-weight: 500;
            margin-top: 6px;
        }
        .page-hero .breadcrumb-item a { color: #ce1212; }
        .page-hero .breadcrumb-item.active { color: #fff; }
        .page-hero .breadcrumb-item + .breadcrumb-item::before { color: #aaa; }

        /* ── Booking Card ── */
        .booking-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,.07);
            padding: 28px 30px;
            border-left: 5px solid #dee2e6;
            transition: transform .2s, box-shadow .2s;
        }
        .booking-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 28px rgba(0,0,0,.1);
        }
        .booking-card.status-confirmed { border-left-color: #28a745; }
        .booking-card.status-pending   { border-left-color: #ffc107; }
        .booking-card.status-cancelled { border-left-color: #dc3545; opacity: .75; }

        /* ── Status Badge ── */
        .status-badge {
            display: inline-block;
            padding: 4px 14px;
            border-radius: 50px;
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .3px;
        }
        .status-confirmed { background: #d4edda; color: #155724; }
        .status-pending   { background: #fff3cd; color: #856404; }
        .status-cancelled { background: #f8d7da; color: #721c24; }

        /* ── Detail item ── */
        .detail-item {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            color: #555;
            font-size: .92rem;
            margin-bottom: 7px;
        }
        .detail-item i { color: #ce1212; font-size: 1rem; margin-top: 1px; flex-shrink: 0; }

        /* ── Meja badge ── */
        .meja-num {
            display: inline-block;
            background: #ce1212;
            color: #fff;
            font-size: .76rem;
            font-weight: 700;
            border-radius: 6px;
            padding: 1px 8px;
        }

        /* ── Booking ID ── */
        .booking-id {
            font-size: .78rem;
            color: #aaa;
            font-weight: 500;
        }

        /* ── Buttons ── */
        .btn-cancel-booking {
            background: transparent;
            border: 1.5px solid #dc3545;
            color: #dc3545;
            border-radius: 50px;
            padding: 6px 20px;
            font-size: .85rem;
            font-weight: 600;
            transition: .2s;
        }
        .btn-cancel-booking:hover {
            background: #dc3545;
            color: #fff;
        }
        .btn-new-booking {
            background: #ce1212;
            color: #fff;
            border-radius: 50px;
            padding: 10px 28px;
            font-weight: 600;
            border: 0;
            transition: .3s;
            font-size: .95rem;
        }
        .btn-new-booking:hover {
            background: #b01010;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(206,18,18,.3);
        }
        .btn-recheck {
            background: transparent;
            border: 1.5px solid #ce1212;
            color: #ce1212;
            border-radius: 50px;
            padding: 10px 28px;
            font-weight: 600;
            font-size: .95rem;
            transition: .3s;
        }
        .btn-recheck:hover {
            background: #ce1212;
            color: #fff;
        }

        /* ── Empty state ── */
        .empty-state { text-align: center; padding: 60px 20px; }
        .empty-state .empty-icon {
            width: 90px;
            height: 90px;
            background: #fff5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        .empty-state .empty-icon i { font-size: 2.5rem; color: #ce1212; }
        .empty-state h4 { font-weight: 700; color: #37373f; margin-bottom: 8px; }
        .empty-state p   { color: #7f7f90; font-size: .95rem; }

        /* ── Summary bar ── */
        .summary-bar {
            background: #fff;
            border-radius: 10px;
            padding: 14px 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,.05);
            margin-bottom: 24px;
        }
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
            <h2>Riwayat Reservasi</h2>
            <p><span>Semua</span> <span class="description-title">Booking Kamu</span></p>
        </div>

        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert" data-aos="fade-up">
                <i class="bi bi-check-circle-fill me-2"></i>
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert" data-aos="fade-up">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if (!empty($bookings)): ?>

            <!-- Summary bar -->
            <div class="summary-bar d-flex align-items-center justify-content-between flex-wrap gap-3" data-aos="fade-up">
                <p class="mb-0 text-muted">
                    Ditemukan <strong style="color:#37373f;"><?= count($bookings) ?></strong> reservasi
                </p>
                <a href="<?= site_url('booking') ?>" class="btn btn-new-booking btn-sm">
                    <i class="bi bi-plus-circle me-1"></i> Booking Baru
                </a>
            </div>

            <!-- Booking list -->
            <div class="row g-4">
                <?php foreach ($bookings as $i => $booking): ?>
                <div class="col-12" data-aos="fade-up" data-aos-delay="<?= min($i * 60, 300) ?>">
                    <div class="booking-card status-<?= esc($booking['status']) ?>">

                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-3">
                            <div>
                                <h5 class="fw-bold mb-1" style="color:#37373f;"><?= esc($booking['nama']) ?></h5>
                                <span class="status-badge status-<?= esc($booking['status']) ?>">
                                    <?php
                                    echo match($booking['status']) {
                                        'confirmed' => '✅ Dikonfirmasi',
                                        'pending'   => '⏳ Menunggu',
                                        'cancelled' => '❌ Dibatalkan',
                                        default     => ucfirst($booking['status']),
                                    };
                                    ?>
                                </span>
                            </div>
                            <div class="text-end">
                                <span class="booking-id d-block">Booking #<?= esc($booking['id']) ?></span>
                                <span class="booking-id">
                                    <?= date('d M Y, H:i', strtotime($booking['created_at'])) ?>
                                </span>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <i class="bi bi-calendar3"></i>
                                    <span><?= date('l, d F Y', strtotime($booking['tanggal'])) ?></span>
                                </div>
                                <div class="detail-item">
                                    <i class="bi bi-clock"></i>
                                    <span><?= esc($booking['waktu']) ?> WIB</span>
                                </div>
                                <div class="detail-item">
                                    <i class="bi bi-people"></i>
                                    <span><?= esc($booking['jumlah_tamu']) ?> Tamu</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Meja <span class="meja-num"><?= esc($booking['meja_id']) ?></span></span>
                                </div>
                                <div class="detail-item">
                                    <i class="bi bi-telephone"></i>
                                    <span><?= esc($booking['telepon']) ?></span>
                                </div>
                                <?php if (!empty($booking['catatan'])): ?>
                                <div class="detail-item">
                                    <i class="bi bi-chat-left-text"></i>
                                    <span><?= esc($booking['catatan']) ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if ($booking['status'] !== 'cancelled'): ?>
                        <div class="mt-3 pt-3 border-top d-flex justify-content-end">
                            <button
                                type="button"
                                class="btn btn-cancel-booking"
                                data-bs-toggle="modal"
                                data-bs-target="#cancelModal"
                                data-id="<?= $booking['id'] ?>"
                                data-nama="<?= esc($booking['nama']) ?>"
                                data-tanggal="<?= date('d M Y', strtotime($booking['tanggal'])) ?>"
                                data-waktu="<?= esc($booking['waktu']) ?>"
                            >
                                <i class="bi bi-x-circle me-1"></i> Batalkan Booking
                            </button>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        <?php else: ?>

            <!-- Empty State -->
            <div class="empty-state" data-aos="fade-up">
                <div class="empty-icon">
                    <i class="bi bi-calendar-x"></i>
                </div>
                <h4>Tidak ada booking ditemukan</h4>
                <p>
                    Tidak ada riwayat reservasi untuk<br>
                    <strong><?= esc($email) ?></strong>
                </p>
                <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
                    <a href="<?= site_url('booking/my-bookings') ?>" class="btn btn-recheck">
                        <i class="bi bi-search me-1"></i> Coba Email Lain
                    </a>
                    <a href="<?= site_url('booking') ?>" class="btn btn-new-booking">
                        <i class="bi bi-plus-circle me-1"></i> Buat Booking
                    </a>
                </div>
            </div>

        <?php endif; ?>

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

<!-- Cancel Modal -->
<div class="modal fade" id="cancelModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header" style="background:#ce1212; color:#fff;">
                <h5 class="modal-title fw-bold">
                    <i class="bi bi-exclamation-triangle me-2"></i>Konfirmasi Pembatalan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body py-4">
                <p class="mb-1">Kamu yakin ingin membatalkan reservasi ini?</p>
                <p class="text-muted mb-0 small" id="cancelDetail"></p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-recheck px-4" data-bs-dismiss="modal">
                    Tidak, Kembali
                </button>
                <a href="#" id="confirmCancelBtn" class="btn btn-new-booking px-4"
                   style="background:#dc3545; box-shadow:none;">
                    <i class="bi bi-x-circle me-1"></i> Ya, Batalkan
                </a>
            </div>
        </div>
    </div>
</div>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>
<div id="preloader"></div>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script>
AOS.init({ duration: 600, easing: 'ease-in-out', once: true });

// Populate cancel modal
document.getElementById('cancelModal').addEventListener('show.bs.modal', function(e) {
    const btn = e.relatedTarget;
    document.getElementById('cancelDetail').textContent =
        'Atas nama: ' + btn.dataset.nama +
        ' | ' + btn.dataset.tanggal +
        ' pukul ' + btn.dataset.waktu + ' WIB';
    document.getElementById('confirmCancelBtn').href =
        '<?= site_url("booking/cancel") ?>/' + btn.dataset.id;
});
</script>
</body>
</html>
