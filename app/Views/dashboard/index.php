<?php
$pageTitle  = 'Dashboard';
$breadcrumbs = [['label' => 'Dashboard', 'url' => '']];

ob_start();
?>

<section class="section dashboard">

  <!-- ── Stat Cards ── -->
  <div class="row g-3 mb-4">

    <!-- Total Reservasi -->
    <div class="col-6 col-xl-3">
      <div class="card stat-card h-100">
        <div class="card-body d-flex align-items-center gap-3 p-3">
          <div class="icon-box" style="background:#e8f4fd;">
            <i class="bi bi-calendar2-check" style="color:#0d6efd;"></i>
          </div>
          <div>
            <div class="stat-value" style="color:#0d6efd;"><?= $total ?></div>
            <div class="stat-label">Total Reservasi</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending -->
    <div class="col-6 col-xl-3">
      <div class="card stat-card h-100">
        <div class="card-body d-flex align-items-center gap-3 p-3">
          <div class="icon-box" style="background:#fff3cd;">
            <i class="bi bi-hourglass-split" style="color:#ffc107;"></i>
          </div>
          <div>
            <div class="stat-value" style="color:#ffc107;"><?= $total_pending ?></div>
            <div class="stat-label">Menunggu</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Confirmed -->
    <div class="col-6 col-xl-3">
      <div class="card stat-card h-100">
        <div class="card-body d-flex align-items-center gap-3 p-3">
          <div class="icon-box" style="background:#d4edda;">
            <i class="bi bi-check2-circle" style="color:#28a745;"></i>
          </div>
          <div>
            <div class="stat-value" style="color:#28a745;"><?= $total_confirmed ?></div>
            <div class="stat-label">Dikonfirmasi</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Cancelled -->
    <div class="col-6 col-xl-3">
      <div class="card stat-card h-100">
        <div class="card-body d-flex align-items-center gap-3 p-3">
          <div class="icon-box" style="background:#f8d7da;">
            <i class="bi bi-x-circle" style="color:#dc3545;"></i>
          </div>
          <div>
            <div class="stat-value" style="color:#dc3545;"><?= $total_cancelled ?></div>
            <div class="stat-label">Dibatalkan</div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- ── Recent Bookings Table ── -->
  <div class="row">
    <div class="col-12">
      <div class="card yummy-card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <span><i class="bi bi-clock-history me-2" style="color:#ce1212;"></i>Reservasi Terbaru</span>
          <a href="<?= site_url('booking/list') ?>" class="btn btn-sm btn-outline-danger rounded-pill px-3" style="font-size:.8rem;">
            Lihat Semua <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
        <div class="card-body p-0">
          <?php if (empty($recent_bookings)): ?>
            <div class="text-center py-5 text-muted">
              <i class="bi bi-calendar-x" style="font-size:2.5rem;display:block;margin-bottom:10px;"></i>
              Belum ada data reservasi.
            </div>
          <?php else: ?>
          <div class="table-responsive">
            <table class="table table-yummy mb-0">
              <thead>
                <tr>
                  <th class="ps-4">Tamu</th>
                  <th>Tanggal & Waktu</th>
                  <th>Meja</th>
                  <th>Tamu</th>
                  <th>Status</th>
                  <th class="text-center pe-4">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($recent_bookings as $b): ?>
                <tr>
                  <td class="ps-4">
                    <div class="fw-semibold" style="color:#37373f;"><?= esc($b['nama']) ?></div>
                    <div class="text-muted" style="font-size:.8rem;"><?= esc($b['email']) ?></div>
                  </td>
                  <td>
                    <div><?= date('d M Y', strtotime($b['tanggal'])) ?></div>
                    <div class="text-muted" style="font-size:.8rem;"><?= esc($b['waktu']) ?> WIB</div>
                  </td>
                  <td><span class="fw-semibold">No. <?= esc($b['meja_id']) ?></span></td>
                  <td><?= esc($b['jumlah_tamu']) ?> orang</td>
                  <td>
                    <span class="badge-<?= esc($b['status']) ?>">
                      <?php echo match($b['status']) {
                        'confirmed' => '✅ Dikonfirmasi',
                        'pending'   => '⏳ Menunggu',
                        'cancelled' => '❌ Dibatalkan',
                        default     => ucfirst($b['status']),
                      }; ?>
                    </span>
                  </td>
                  <td class="text-center pe-4">
                    <a href="<?= site_url('booking/edit/' . $b['id']) ?>" class="btn btn-action btn-edit">
                      <i class="bi bi-pencil me-1"></i>Edit
                    </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/_layout.php';
?>
