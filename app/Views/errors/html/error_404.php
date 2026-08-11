<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan | Yummy Restaurant</title>

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="/yummy/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/yummy/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Roboto', sans-serif;
            background: #f9f9f9;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ── Navbar ── */
        .top-bar {
            background: #fff;
            border-bottom: 1px solid #eee;
            padding: 14px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .top-bar .brand {
            font-family: 'Amatic SC', cursive;
            font-size: 2rem;
            font-weight: 700;
            color: #37373f;
            text-decoration: none;
        }
        .top-bar .brand span { color: #ce1212; }

        /* ── Main ── */
        .error-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
        }
        .error-card {
            text-align: center;
            max-width: 520px;
        }
        .error-number {
            font-family: 'Amatic SC', cursive;
            font-size: 9rem;
            font-weight: 700;
            color: #ce1212;
            line-height: 1;
            letter-spacing: 4px;
        }
        .error-icon {
            font-size: 3.5rem;
            color: #ce1212;
            display: block;
            margin: 10px 0 20px;
            opacity: .7;
        }
        .error-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: #37373f;
            margin-bottom: 12px;
        }
        .error-desc {
            color: #7f7f90;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 36px;
        }
        .btn-home {
            background: #ce1212;
            color: #fff;
            padding: 12px 36px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            font-size: .95rem;
            transition: .3s;
            display: inline-block;
        }
        .btn-home:hover {
            background: #b01010;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(206,18,18,.3);
        }
        .btn-back {
            background: transparent;
            color: #ce1212;
            border: 1.5px solid #ce1212;
            padding: 12px 36px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            font-size: .95rem;
            transition: .3s;
            display: inline-block;
        }
        .btn-back:hover {
            background: #ce1212;
            color: #fff;
        }

        /* ── Divider ── */
        .divider {
            width: 60px;
            height: 3px;
            background: #ce1212;
            border-radius: 4px;
            margin: 0 auto 24px;
        }

        /* ── Footer ── */
        .bottom-bar {
            text-align: center;
            padding: 16px;
            color: #aaa;
            font-size: .82rem;
            border-top: 1px solid #eee;
            background: #fff;
        }
        .bottom-bar strong { color: #ce1212; }
    </style>
</head>
<body>

    <!-- Top bar -->
    <div class="top-bar">
        <a href="/yummy/public/home" class="brand">Yummy<span>.</span></a>
        <a href="/yummy/public/home" style="color:#ce1212;font-size:.88rem;text-decoration:none;font-weight:500;">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
        </a>
    </div>

    <!-- Error Content -->
    <div class="error-section">
        <div class="error-card">
            <div class="error-number">404</div>
            <i class="bi bi-emoji-frown error-icon"></i>
            <div class="divider"></div>
            <h1 class="error-title">Halaman Tidak Ditemukan</h1>
            <p class="error-desc">
                Ups! Sepertinya halaman yang kamu cari sudah pindah, dihapus,<br>
                atau mungkin kamu salah mengetik alamatnya.<br><br>
                Tenang, menu lezat kami masih menunggumu di beranda!
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/yummy/public/home" class="btn-home">
                    <i class="bi bi-house me-2"></i>Ke Beranda
                </a>
                <a href="/yummy/public/booking" class="btn-back">
                    <i class="bi bi-calendar2-plus me-2"></i>Book a Table
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="bottom-bar">
        &copy; <?= date('Y') ?> <strong>Yummy Restaurant</strong>. All Rights Reserved.
    </div>

</body>
</html>
