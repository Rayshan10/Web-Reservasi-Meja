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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

    <style>
        .check-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 60px 0;
            background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                        url('<?= base_url("assets/img/reservation-bg.jpg") ?>') center/cover no-repeat;
        }
        .check-card {
            background: rgba(255, 255, 255, 0.97);
            border-radius: 15px;
            padding: 45px 40px;
            box-shadow: 0 0 35px rgba(0,0,0,0.15);
        }
        .check-card .section-title h2 {
            font-family: 'Amatic SC', cursive;
            font-size: 44px;
            font-weight: 700;
            color: #000;
        }
        .check-card .section-title p {
            color: #ce1212;
            font-weight: 600;
        }
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .form-control:focus {
            border-color: #ce1212;
            box-shadow: 0 0 0 0.2rem rgba(206,18,18,.15);
        }
        .btn-check-booking {
            background: #ce1212;
            color: #fff;
            padding: 12px 35px;
            border-radius: 50px;
            border: 0;
            font-weight: 600;
            font-size: 1rem;
            transition: 0.3s;
            width: 100%;
        }
        .btn-check-booking:hover {
            background: #b31212;
            color: #fff;
            transform: translateY(-2px);
        }
        .back-link {
            color: #ce1212;
            text-decoration: none;
            font-weight: 500;
        }
        .back-link:hover {
            color: #b31212;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<section class="check-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="check-card">

                    <div class="section-title text-center mb-4">
                        <p>Pantau Reservasi</p>
                        <h2>Cek Booking Saya</h2>
                    </div>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <p class="text-muted text-center mb-4">
                        Masukkan alamat email yang kamu gunakan saat melakukan booking untuk melihat daftar reservasimu.
                    </p>

                    <form action="<?= site_url('booking/my-bookings') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">
                                <i class="bi bi-envelope me-1"></i> Alamat Email
                            </label>
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="contoh@email.com"
                                value="<?= old('email') ?>"
                                required
                                autofocus
                            >
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-check-booking">
                                <i class="bi bi-search me-2"></i> Cari Booking Saya
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <a href="<?= site_url('booking') ?>" class="back-link">
                            <i class="bi bi-arrow-left me-1"></i> Buat Booking Baru
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
