<?php
$pageTitle   = 'Edit Reservasi';
$breadcrumbs = [
  ['label' => 'Data Reservasi', 'url' => site_url('booking/list')],
  ['label' => 'Edit #' . $booking['id'], 'url' => ''],
];

ob_start();
?>

<section class="section">
  <form action="<?= site_url('booking/update/' . $booking['id']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="row g-4">

      <!-- ── Kiri: Data Tamu + Detail Reservasi ── -->
      <div class="col-lg-8">

        <!-- Data Tamu -->
        <div class="card yummy-card mb-4">
          <div class="card-header">
            <i class="bi bi-person-fill me-2" style="color:#ce1212;"></i>Data Tamu
          </div>
          <div class="card-body pt-4">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama"
                       value="<?= esc($booking['nama']) ?>" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="telepon"
                       value="<?= esc($booking['telepon']) ?>" required>
              </div>
              <div class="col-12">
                <label class="form-label">Alamat Email</label>
                <input type="email" class="form-control" name="email"
                       value="<?= esc($booking['email']) ?>" required>
              </div>
            </div>
          </div>
        </div>

        <!-- Detail Reservasi -->
        <div class="card yummy-card mb-4">
          <div class="card-header">
            <i class="bi bi-calendar3 me-2" style="color:#ce1212;"></i>Detail Reservasi
          </div>
          <div class="card-body pt-4">
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tanggal"
                       value="<?= esc($booking['tanggal']) ?>" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">Waktu</label>
                <select class="form-select" name="waktu" required>
                  <?php
                  $times = ['11:00','11:30','12:00','12:30','13:00','18:00','18:30','19:00','19:30','20:00'];
                  foreach ($times as $t):
                  ?>
                    <option value="<?= $t ?>" <?= ($booking['waktu'] == $t) ? 'selected' : '' ?>>
                      <?= $t ?> WIB
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Jumlah Tamu</label>
                <select class="form-select" name="jumlah_tamu" required>
                  <?php for ($i = 1; $i <= 6; $i++): ?>
                    <option value="<?= $i ?>" <?= ($booking['jumlah_tamu'] == $i) ? 'selected' : '' ?>>
                      <?= $i ?> Orang
                    </option>
                  <?php endfor; ?>
                  <option value="7+" <?= ($booking['jumlah_tamu'] == '7+') ? 'selected' : '' ?>>7+ Orang</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Nomor Meja</label>
                <select class="form-select" name="meja_id" required>
                  <?php for ($i = 1; $i <= 6; $i++): ?>
                    <option value="<?= $i ?>" <?= ($booking['meja_id'] == $i) ? 'selected' : '' ?>>
                      Meja <?= $i ?>
                    </option>
                  <?php endfor; ?>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label">Catatan Khusus <span class="text-muted fw-normal">(opsional)</span></label>
                <textarea class="form-control" name="catatan" rows="3"
                          placeholder="Alergi, preferensi tempat duduk, dll."><?= esc($booking['catatan']) ?></textarea>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- ── Kanan: Status + Info + Tombol ── -->
      <div class="col-lg-4">

        <!-- Status Reservasi -->
        <div class="card yummy-card mb-4">
          <div class="card-header">
            <i class="bi bi-flag-fill me-2" style="color:#ce1212;"></i>Status Reservasi
          </div>
          <div class="card-body pt-4">
            <p class="text-muted small mb-3">Ubah status reservasi sesuai tindakan admin.</p>

            <?php
            $statuses = [
              'pending'   => ['label' => '⏳ Menunggu Konfirmasi', 'class' => 'badge-pending',   'border' => '#ffc107'],
              'confirmed' => ['label' => '✅ Dikonfirmasi',        'class' => 'badge-confirmed', 'border' => '#28a745'],
              'cancelled' => ['label' => '❌ Dibatalkan',          'class' => 'badge-cancelled', 'border' => '#dc3545'],
            ];
            foreach ($statuses as $val => $s):
            ?>
            <div class="mb-2">
              <label class="d-flex align-items-center gap-2 p-3 rounded-3 cursor-pointer status-option"
                     style="border: 2px solid <?= ($booking['status'] == $val) ? $s['border'] : '#dee2e6' ?>;
                            background: <?= ($booking['status'] == $val) ? 'rgba('.($val=='pending'?'255,193,7':''.($val=='confirmed'?'40,167,69':'220,53,69')).',0.06)' : '#fff' ?>;
                            cursor:pointer; transition:.2s;">
                <input type="radio" name="status" value="<?= $val ?>"
                       class="status-radio"
                       <?= ($booking['status'] == $val) ? 'checked' : '' ?>>
                <span class="<?= $s['class'] ?>"><?= $s['label'] ?></span>
              </label>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Booking Info -->
        <div class="card yummy-card mb-4">
          <div class="card-header">
            <i class="bi bi-info-circle me-2" style="color:#ce1212;"></i>Info Booking
          </div>
          <div class="card-body pt-3">
            <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:.86rem;">
              <span class="text-muted">ID Booking</span>
              <span class="fw-bold">#<?= $booking['id'] ?></span>
            </div>
            <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:.86rem;">
              <span class="text-muted">Dibuat</span>
              <span><?= date('d M Y', strtotime($booking['created_at'])) ?></span>
            </div>
            <div class="d-flex justify-content-between py-2" style="font-size:.86rem;">
              <span class="text-muted">Diperbarui</span>
              <span><?= date('d M Y', strtotime($booking['updated_at'])) ?></span>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-danger rounded-pill py-2 fw-semibold">
            <i class="bi bi-save me-2"></i>Simpan Perubahan
          </button>
          <a href="<?= site_url('booking/list') ?>" class="btn btn-outline-secondary rounded-pill py-2 fw-semibold">
            <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar
          </a>
        </div>

      </div>
    </div>
  </form>
</section>

<?php
$extraScript = <<<'JS'
<script>
// Highlight selected status option
document.querySelectorAll('.status-radio').forEach(function(radio) {
  radio.addEventListener('change', function() {
    document.querySelectorAll('.status-option').forEach(function(opt) {
      opt.style.border = '2px solid #dee2e6';
      opt.style.background = '#fff';
    });
    const colors = { pending: '#ffc107', confirmed: '#28a745', cancelled: '#dc3545' };
    const parent = this.closest('.status-option');
    parent.style.border = '2px solid ' + (colors[this.value] || '#dee2e6');
    parent.style.background = 'rgba(0,0,0,0.03)';
  });
});
</script>
JS;

$content = ob_get_clean();
include __DIR__ . '/_layout.php';
?>
