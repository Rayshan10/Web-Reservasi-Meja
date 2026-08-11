<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Booking Sukses - Yummy</title>
    
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
    
    <style>
        .success-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 40px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= base_url("assets/img/reservation-bg.jpg") ?>') center/cover no-repeat;
        }
        .success-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }
        .success-icon {
            font-size: 5rem;
            color: #ce1212;
            margin-bottom: 20px;
        }
        .booking-details {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }
        .redirect-text {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        .btn-home {
            background: #ce1212;
            color: white;
            padding: 8px 25px;
            border-radius: 50px;
            transition: 0.3s;
            margin-top: 20px;
        }
        .btn-home:hover {
            background: #b31212;
            color: white;
        }
    </style>

    <script>
        setTimeout(function() {
            window.location.href = "<?= site_url('home') ?>";
        }, 10000);
    </script>
</head>
<body>
    <section class="success-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="success-card" data-aos="fade-up">
                        <i class="bi bi-check-circle success-icon"></i>
                        <h2 class="mb-4">Booking Berhasil!</h2>
                        <p class="mb-4">Terima kasih, <strong><?= esc($booking['nama']) ?></strong>. Reservasi Anda telah berhasil dikonfirmasi.</p>
                        
                        <div class="booking-details">
                            <h5 class="mb-3">Detail Reservasi</h5>
                            <div class="row">
                                <div class="col-6 text-start">
                                    <p><i class="bi bi-calendar3 me-2"></i>Tanggal:</p>
                                    <p><i class="bi bi-clock me-2"></i>Waktu:</p>
                                    <p><i class="bi bi-people me-2"></i>Jumlah Tamu:</p>
                                    <p><i class="bi bi-geo-alt me-2"></i>Meja:</p>
                                </div>
                                <div class="col-6 text-start">
                                    <p><?= esc($booking['tanggal']) ?></p>
                                    <p><?= esc($booking['waktu']) ?></p>
                                    <p><?= esc($booking['jumlah_tamu']) ?> Orang</p>
                                    <p>No. <?= esc($booking['meja_id']) ?></p>
                                </div>
                            </div>
                        </div>

                        <p class="redirect-text">
                            <i class="bi bi-clock-history"></i> 
                            Anda akan dialihkan ke halaman utama dalam 10 detik...
                        </p>
                        
                        <div class="d-flex justify-content-center gap-3 flex-wrap mt-2">
                            <a href="<?= site_url('home') ?>" class="btn btn-home">
                                Kembali ke Beranda
                            </a>
                            <a href="<?= site_url('booking/my-bookings') ?>" class="btn btn-outline-danger rounded-pill px-4">
                                <i class="bi bi-calendar2-check me-1"></i> Lihat Booking Saya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
