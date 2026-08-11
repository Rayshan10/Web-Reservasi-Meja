<?php
$pageTitle   = 'Data Reservasi';
$breadcrumbs = [['label' => 'Data Reservasi', 'url' => '']];

ob_start();
?>

<section class="section">
  <div class="card yummy-card">

    <!-- Card Header + Filter -->
    <div class="card-header">
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
        <span><i class="bi bi-calendar2-check me-2" style="color:#ce1212;"></i>Data Reservasi</span>

        <!-- Filter Tabs -->
        <div class="d-flex gap-2 flex-wrap">
          <button class="filter-btn active" data-filter="all">Semua</button>
          <button class="filter-btn" data-filter="pending">⏳ Menunggu</button>
          <button class="filter-btn" data-filter="confirmed">✅ Dikonfirmasi</button>
          <button class="filter-btn" data-filter="cancelled">❌ Dibatalkan</button>
        </div>
      </div>
    </div>

    <div class="card-body p-0">
      <?php if (empty($bookings)): ?>
        <div class="text-center py-5 text-muted">
          <i class="bi bi-calendar-x" style="font-size:2.5rem;display:block;margin-bottom:10px;"></i>
          Belum ada data reservasi.
        </div>
      <?php else: ?>
      <div class="table-responsive">
        <table class="table table-yummy mb-0" id="bookingTable">
          <thead>
            <tr>
              <th class="ps-4" style="width:40px;">#</th>
              <th>Tamu</th>
              <th>Kontak</th>
              <th>Jadwal</th>
              <th>Meja</th>
              <th>Tamu</th>
              <th>Status</th>
              <th class="text-center pe-4">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; foreach ($bookings as $b): ?>
            <tr data-status="<?= esc($b['status']) ?>">
              <td class="ps-4 text-muted" style="font-size:.82rem;"><?= $i++ ?></td>
              <td>
                <div class="fw-semibold" style="color:#37373f;"><?= esc($b['nama']) ?></div>
                <div class="text-muted" style="font-size:.78rem;">
                  #<?= $b['id'] ?> &bull;
                  <?= date('d M Y', strtotime($b['created_at'])) ?>
                </div>
              </td>
              <td>
                <div style="font-size:.85rem;"><?= esc($b['email']) ?></div>
                <div class="text-muted" style="font-size:.82rem;"><?= esc($b['telepon']) ?></div>
              </td>
              <td>
                <div class="fw-semibold" style="font-size:.88rem;"><?= date('d M Y', strtotime($b['tanggal'])) ?></div>
                <div class="text-muted" style="font-size:.82rem;"><?= esc($b['waktu']) ?> WIB</div>
              </td>
              <td><span class="fw-bold">No. <?= esc($b['meja_id']) ?></span></td>
              <td><?= esc($b['jumlah_tamu']) ?> org</td>
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
                <div class="d-flex justify-content-center gap-1">
                  <!-- Edit -->
                  <a href="<?= site_url('booking/edit/' . $b['id']) ?>"
                     class="btn btn-action btn-edit"
                     title="Edit detail">
                    <i class="bi bi-pencil"></i>
                  </a>

                  <!-- Hapus -->
                  <button type="button"
                          class="btn btn-action"
                          style="background:#f0f0f0;color:#666;"
                          title="Hapus"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal"
                          data-id="<?= $b['id'] ?>"
                          data-nama="<?= esc($b['nama']) ?>"
                          data-delete-url="<?= site_url('booking/delete/' . $b['id']) ?>">
                    <i class="bi bi-trash3"></i>
                  </button>
                </div>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php endif; ?>
    </div>

    <?php if (!empty($bookings)): ?>
    <div class="card-footer bg-white border-top-0 text-muted" style="font-size:.82rem;padding:12px 22px;">
      Total: <strong><?= count($bookings) ?></strong> reservasi
    </div>
    <?php endif; ?>

  </div>
</section>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-header" style="background:#dc3545;color:#fff;">
        <h5 class="modal-title fw-bold">
          <i class="bi bi-exclamation-triangle me-2"></i>Konfirmasi Hapus
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body py-4">
        <p class="mb-1">Yakin ingin menghapus reservasi ini?</p>
        <p class="text-muted mb-0 small">Atas nama: <strong id="deleteNama"></strong></p>
        <p class="text-danger small mt-2 mb-0"><i class="bi bi-info-circle me-1"></i>Data yang dihapus tidak dapat dikembalikan.</p>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
        <a href="#" id="confirmDeleteBtn" class="btn btn-danger rounded-pill px-4">
          <i class="bi bi-trash3 me-1"></i> Hapus
        </a>
      </div>
    </div>
  </div>
</div>

<?php
$extraScript = <<<'JS'
<script>
document.addEventListener('DOMContentLoaded', function () {

  // Init simple-datatables
  var dt = null;
  var tableEl = document.querySelector('#bookingTable');

  if (tableEl && typeof simpleDatatables !== 'undefined') {
    dt = new simpleDatatables.DataTable(tableEl, {
      perPage: 10,
      perPageSelect: false,
      labels: {
        placeholder: "Cari reservasi...",
        noRows: "Tidak ada data ditemukan",
        info: "Menampilkan {start} - {end} dari {rows} data",
      }
    });
  }

  // Filter tabs — bekerja dengan cara hide/show rows lalu refresh DataTable
  var currentFilter = 'all';

  document.querySelectorAll('.filter-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      currentFilter = this.dataset.filter;

      // Sembunyikan/tampilkan baris sesuai filter
      document.querySelectorAll('#bookingTable tbody tr').forEach(function(row) {
        if (currentFilter === 'all' || row.dataset.status === currentFilter) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  });

  // Delete modal
  var deleteModal = document.getElementById('deleteModal');
  if (deleteModal) {
    deleteModal.addEventListener('show.bs.modal', function(e) {
      var btn = e.relatedTarget;
      document.getElementById('deleteNama').textContent = btn.dataset.nama;
      document.getElementById('confirmDeleteBtn').href = btn.dataset.deleteUrl;
    });
  }

});
</script>
JS;

$content = ob_get_clean();
include __DIR__ . '/_layout.php';
?>
