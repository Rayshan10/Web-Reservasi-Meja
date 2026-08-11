<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= isset($pageTitle) ? esc($pageTitle) . ' — Yummy Admin' : 'Yummy Admin' ?></title>

  <link href="<?= base_url('assets1/img/favicon.png') ?>" rel="icon">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="<?= base_url('assets1/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets1/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets1/vendor/simple-datatables/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets1/css/style.css') ?>" rel="stylesheet">

  <style>
    /* ── Global ── */
    body { font-family: 'Nunito', sans-serif; background: #f0f2f5; }

    /* ── Sidebar brand color override ── */
    .sidebar-brand { background: #ce1212 !important; }
    #sidebar { border-right: 1px solid #e8e8e8; }
    .sidebar-nav .nav-link:hover,
    .sidebar-nav .nav-link.active { color: #ce1212 !important; background: #fff5f5; }
    .sidebar-nav .nav-link:hover i,
    .sidebar-nav .nav-link.active i { color: #ce1212 !important; }
    .sidebar-nav .nav-link i { transition: color .2s; }

    /* ── Header ── */
    .header .logo span { color: #ce1212 !important; }

    /* ── Stat cards ── */
    .stat-card { border-radius: 12px; border: none; box-shadow: 0 2px 12px rgba(0,0,0,.07); transition: transform .2s, box-shadow .2s; }
    .stat-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,.1); }
    .stat-card .icon-box { width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0; }
    .stat-card .stat-value { font-size: 2rem; font-weight: 800; line-height: 1; }
    .stat-card .stat-label { font-size: .82rem; color: #7f8c8d; font-weight: 600; text-transform: uppercase; letter-spacing: .5px; }

    /* ── Status badges ── */
    .badge-pending   { background: #fff3cd; color: #856404; border-radius: 50px; padding: 4px 12px; font-size: .76rem; font-weight: 700; }
    .badge-confirmed { background: #d4edda; color: #155724; border-radius: 50px; padding: 4px 12px; font-size: .76rem; font-weight: 700; }
    .badge-cancelled { background: #f8d7da; color: #721c24; border-radius: 50px; padding: 4px 12px; font-size: .76rem; font-weight: 700; }

    /* ── Table ── */
    .table-yummy thead th { background: #f8f9fa; font-size: .82rem; font-weight: 700; text-transform: uppercase; letter-spacing: .4px; color: #555; border-bottom: 2px solid #dee2e6; }
    .table-yummy tbody tr:hover { background: #fff9f9; }
    .table-yummy td { vertical-align: middle; font-size: .9rem; }

    /* ── Action buttons ── */
    .btn-action { padding: 5px 12px; border-radius: 6px; font-size: .8rem; font-weight: 600; border: none; transition: .2s; }
    .btn-edit    { background: #e8f4fd; color: #0d6efd; }
    .btn-edit:hover    { background: #0d6efd; color: #fff; }
    .btn-confirm { background: #d4edda; color: #155724; }
    .btn-confirm:hover { background: #28a745; color: #fff; }
    .btn-delete  { background: #f8d7da; color: #721c24; }
    .btn-delete:hover  { background: #dc3545; color: #fff; }

    /* ── Cards ── */
    .yummy-card { border: none; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,.06); }
    .yummy-card .card-header { background: #fff; border-bottom: 1.5px solid #f0f0f0; border-radius: 12px 12px 0 0 !important; padding: 16px 22px; font-weight: 700; color: #37373f; }

    /* ── Form ── */
    .form-label { font-weight: 600; font-size: .88rem; color: #37373f; }
    .form-control:focus, .form-select:focus { border-color: #ce1212; box-shadow: 0 0 0 .2rem rgba(206,18,18,.12); }
    .section-divider { font-size: .78rem; font-weight: 700; text-transform: uppercase; letter-spacing: .8px; color: #ce1212; border-bottom: 1.5px solid #f5d0d0; padding-bottom: 6px; margin-bottom: 16px; }

    /* ── Filter bar ── */
    .filter-btn { border-radius: 50px; padding: 5px 16px; font-size: .83rem; font-weight: 600; border: 1.5px solid #dee2e6; background: #fff; color: #555; transition: .2s; }
    .filter-btn:hover, .filter-btn.active { background: #ce1212; border-color: #ce1212; color: #fff; }

    /* ── Footer ── */
    .footer { background: #fff; border-top: 1px solid #eee; color: #888; font-size: .82rem; }
  </style>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="<?= site_url('dashboard') ?>" class="logo d-flex align-items-center">
      <span class="d-none d-lg-block" style="font-weight:800;color:#ce1212;">Yummy</span>
      <span class="d-none d-lg-block" style="color:#ce1212;">.</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center gap-1">

      <!-- Admin Profile -->
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <div style="width:34px;height:34px;background:#ce1212;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:.95rem;">
            A
          </div>
          <span class="d-none d-md-block dropdown-toggle ps-2 fw-semibold" style="font-size:.9rem;">
            <?= esc(session()->get('user')['username'] ?? 'Admin') ?>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?= esc(session()->get('user')['username'] ?? 'Admin') ?></h6>
            <span>Administrator</span>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="<?= site_url('auth/logout') ?>">
              <i class="bi bi-box-arrow-right me-2"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </nav>
</header>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?= (current_url() == site_url('dashboard')) ? '' : 'collapsed' ?>" href="<?= site_url('dashboard') ?>">
        <i class="bi bi-speedometer2"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?= (strpos(current_url(), 'booking') !== false) ? '' : 'collapsed' ?>" href="<?= site_url('booking/list') ?>">
        <i class="bi bi-calendar2-check"></i>
        <span>Data Reservasi</span>
      </a>
    </li>

    <li class="nav-heading">Akun</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= site_url('auth/logout') ?>">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li>

  </ul>
</aside>

<!-- ======= Main Content ======= -->
<main id="main" class="main">

  <!-- Page Title -->
  <div class="pagetitle">
    <h1><?= isset($pageTitle) ? esc($pageTitle) : 'Dashboard' ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
        <?php if (isset($breadcrumbs)): foreach ($breadcrumbs as $bc): ?>
          <?php if (!empty($bc['url'])): ?>
            <li class="breadcrumb-item"><a href="<?= $bc['url'] ?>"><?= esc($bc['label']) ?></a></li>
          <?php else: ?>
            <li class="breadcrumb-item active"><?= esc($bc['label']) ?></li>
          <?php endif; ?>
        <?php endforeach; endif; ?>
      </ol>
    </nav>
  </div>

  <!-- Flash Messages -->
  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show mx-1" role="alert">
      <i class="bi bi-check-circle-fill me-2"></i><?= session()->getFlashdata('success') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show mx-1" role="alert">
      <i class="bi bi-exclamation-triangle-fill me-2"></i><?= session()->getFlashdata('error') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  <?php endif; ?>

  <!-- *** PAGE CONTENT INJECTED HERE *** -->
  <?= $content ?>

</main>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright text-center py-2">
    &copy; <?= date('Y') ?> <strong>Yummy Restaurant</strong>. All Rights Reserved.
  </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<script src="<?= base_url('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets1/vendor/simple-datatables/simple-datatables.js') ?>"></script>
<script src="<?= base_url('assets1/js/main.js') ?>"></script>
<?= isset($extraScript) ? $extraScript : '' ?>
</body>
</html>
