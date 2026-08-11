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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        .page-header {
            background: #ce1212;
            color: #fff;
            padding: 30px 0 20px;
        }
        .page-header h1 {
            font-family: 'Amatic SC', cursive;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 4px;
        }
        .page-header p {
            opacity: 0.85;
            margin: 0;
        }
        .booking-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            padding: 24px;
            margin-bottom: 20px;
            border-left: 5px solid #ddd;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .booking-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        .booking-card.status-confirmed {
            border-left-color: #28a745;
        }
        .booking-card.status-pending {
            border-left-color: #ffc107;
        }
        .booking-card.status-cancelled {
            border-left-color: #dc3545;
            opacity: 0.7;
        }
        .badge-status {
            font-size: 0.78rem;
            padding: 5px 12px;
            border-radius: 50px;
            font-weight: 600;
        }
        .badge-confirmed {
            background: #d4edda;
            color: #155724;
        }
        .badge-pending {
            background: #fff3cd;
            color: #856404;
        }
        .badge-cancelled {
            background: #f8d7da;
            color: #721c24;
        }
        .detail-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #555;
            margin-bottom: 6px;
            font-size: 0.92rem;
        }
        .detail-item i {
            color: #ce1212;
            font-size: 1rem;
            width: 18px;
        }
        .btn-cancel {
            background: transparent;
            border: 1.5px solid #dc3545;
            color: #dc3545;
            border-radius: 50px;
            padding: 6px 18px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: 0.2s;
        }
        .btn-cancel:hover {
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
            transition: 0.3s;
        }
        .btn-new-booking:hover {
            background: #b31212;
            color: #fff;
            transform: translateY(-2px);
        }
        .btn-recheck {
            background: transparent;
            border: 1.5px solid #ce1212;
            color: #ce1212;
            border-radius: 50px;
            padding: 10px 28px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-recheck:hover {
            background: #ce1212;
            color: #fff;
        }
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #888;
        }
        .empty-state i {
            font-size: 4rem;
            color: #ddd;
            display: block;
            margin-bottom: 15px;
        }
        .meja-badge {
            background: #ce1212;
            color: #fff;
            border-radius: 6px;
            padding: 2px 8px;
            font-size: 0.8rem;
            font-weight: 700;
        }
    </style>
</head>
<body>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h1><i class="bi bi-calendar2-check me-2"></i>Booking Saya</h1>
                <p><i class="bi bi-envelope me-1"></i><?= esc($email) ?></p>
            </div>
            <a href="<?= site_url('home') ?>" class="text-white text-decoration-none opacity-75">
                <i class="bi bi-house me-1"></i> Beranda
            </a>
        </div>
    </div>
</div>

<div class="container py-4">

    <!-- Flash Messages -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <!-- Summary -->
    <?php if (!empty($bookings)): ?>
        <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
            <p class="text-muted mb-0">
                Ditemukan <strong><?= count($bookings) ?></strong> booking untuk email ini.
            </p>
            <a href="<?= site_url('booking') ?>" class="btn btn-new-booking btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Booking Baru
            </a>
        </div>

        <!-- Booking Cards -->
        <?php foreach ($bookings as $booking): ?>
            <div class="booking-card status-<?= esc($booking['status']) ?>">
                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-3">
                    <div>
                        <h5 class="mb-1 fw-bold"><?= esc($booking['nama']) ?></h5>
                        <span class="badge-status badge-<?= esc($booking['status']) ?>">
                            <?php
                            $statusLabel = [
                                'confirmed' => '✅ Dikonfirmasi',
                                'pending'   => '⏳ Menunggu',
                                'cancelled' => '❌ Dibatalkan',
                            ];
                            echo $statusLabel[$booking['status']] ?? ucfirst($booking['status']);
                            ?>
                        </span>
                    </div>
                    <div class="text-end">
                        <small class="text-muted d-block">Booking #<?= esc($booking['id']) ?></small>
                        <small class="text-muted">
                            Dibuat: <?= date('d M Y', strtotime($booking['created_at'])) ?>
                        </small>
                    </div>
                </div>

                <div class="row">
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
                            <span>Meja <span class="meja-badge"><?= esc($booking['meja_id']) ?></span></span>
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

                <!-- Cancel Button (only for confirmed/pending) -->
                <?php if ($booking['status'] !== 'cancelled'): ?>
                    <div class="mt-3 text-end">
                        <button
                            type="button"
                            class="btn btn-cancel"
                            data-bs-toggle="modal"
                            data-bs-target="#cancelModal"
                            data-id="<?= $booking['id'] ?>"
                            data-nama="<?= esc($booking['nama']) ?>"
                            data-tanggal="<?= date('d M Y', strtotime($booking['tanggal'])) ?>"
                        >
                            <i class="bi bi-x-circle me-1"></i> Batalkan Booking
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

    <?php else: ?>
        <!-- Empty State -->
        <div class="empty-state">
            <i class="bi bi-calendar-x"></i>
            <h4 class="text-muted">Tidak ada booking ditemukan</h4>
            <p class="text-muted">Tidak ada data booking untuk email <strong><?= esc($email) ?></strong>.</p>
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

<!-- Cancel Confirmation Modal -->
<div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="cancelModalLabel">
                    <i class="bi bi-exclamation-triangle me-2"></i>Konfirmasi Pembatalan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body py-4">
                <p class="mb-1">Kamu yakin ingin membatalkan booking ini?</p>
                <p class="text-muted mb-0" id="cancelDetail"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">
                    Tidak, Kembali
                </button>
                <a href="#" id="confirmCancelBtn" class="btn btn-danger rounded-pill px-4">
                    <i class="bi bi-x-circle me-1"></i> Ya, Batalkan
                </a>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script>
    // Populate modal with booking data
    const cancelModal = document.getElementById('cancelModal');
    cancelModal.addEventListener('show.bs.modal', function (e) {
        const btn = e.relatedTarget;
        const id = btn.getAttribute('data-id');
        const nama = btn.getAttribute('data-nama');
        const tanggal = btn.getAttribute('data-tanggal');

        document.getElementById('cancelDetail').textContent =
            'Atas nama: ' + nama + ' | Tanggal: ' + tanggal;
        document.getElementById('confirmCancelBtn').href =
            '<?= site_url("booking/cancel") ?>/' + id;
    });
</script>
</body>
</html>
