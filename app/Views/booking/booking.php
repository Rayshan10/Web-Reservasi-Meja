<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Booking - Yummy Restaurant</title>
    
    <!-- Include the same assets as home page -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
    
    <style>
        .booking-form {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            margin: 50px 0;
        }
        
        .form-label {
            font-weight: 600;
            color: #333;
        }
        
        .form-control, .form-select {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        
        .table-preview {
            background: #fff;
            border: 2px solid #ce1212;
            border-radius: 15px;
            padding: 20px 15px;
            margin: 10px 0;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .table-preview:hover, .table-selected {
            background: #ce1212;
            color: #fff;
            transform: translateY(-3px);
        }
        
        .table-preview i {
            font-size: 24px;
            margin-bottom: 10px;
            color: #ce1212;
        }
        
        .table-preview:hover i,
        .table-selected i {
            color: #fff;
        }
        
        .btn-submit {
            background: #ce1212;
            color: #fff;
            padding: 15px 30px;
            border-radius: 50px;
            border: 0;
            font-weight: 600;
            transition: 0.3s;
        }
        
        .btn-submit:hover {
            background: #b31212;
            transform: translateY(-2px);
        }
        
        .section-title {
            margin-bottom: 50px;
            text-align: center;
        }
        
        .section-title h2 {
            font-size: 48px;
            font-weight: 700;
            font-family: 'Amatic SC', cursive;
            color: #000;
        }
        
        .section-title p {
            color: #ce1212;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <!-- Include Header -->
    
    <main id="main">
        <!-- Hero Section with Yummy style -->
        <section id="book-a-table" class="book-a-table section-bg">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Reservasi</h2>
                    <p>Booking mejamu <span>untuk merasakan nikmatnya hidangan kami</span></p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="booking-form" data-aos="fade-up">
                            <h3 class="text-center mb-4">Form Booking Meja</h3>
                    
                            <form id="bookingForm" action="<?= site_url('booking/store') ?>" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telepon" class="form-label">Nomor Telepon</label>
                                        <input type="tel" class="form-control" id="telepon" name="telepon" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="waktu" class="form-label">Waktu</label>
                                        <select class="form-select" id="waktu" name="waktu" required>
                                            <option value="" selected disabled>Pilih waktu</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="jumlah_tamu" class="form-label">Jumlah Tamu</label>
                                    <select class="form-select" id="jumlah_tamu" name="jumlah_tamu" required>
                                        <option value="" selected disabled>Pilih jumlah tamu</option>
                                        <option value="1">1 orang</option>
                                        <option value="2">2 orang</option>
                                        <option value="3">3 orang</option>
                                        <option value="4">4 orang</option>
                                        <option value="5">5 orang</option>
                                        <option value="6">6 orang</option>
                                        <option value="7+">7+ orang</option>
                                    </select>
                                </div>
                                
                                <label for="jumlah_tamu" class="form-label">Jumlah Tamu</label>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <div class="table-preview" data-table="1">
                                            <i class="fas fa-utensils mb-2"></i>
                                            <p class="mb-0">Meja 1</p>
                                            <small>Max 2 orang</small>
                                            <input type="radio" name="meja_id" value="1" class="d-none">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="table-preview" data-table="2">
                                            <i class="fas fa-utensils mb-2"></i>
                                            <p class="mb-0">Meja 2</p>
                                            <small>Max 4 orang</small>
                                            <input type="radio" name="meja_id" value="2" class="d-none">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="table-preview" data-table="3">
                                            <i class="fas fa-utensils mb-2"></i>
                                            <p class="mb-0">Meja 3</p>
                                            <small>Max 4 orang</small>
                                            <input type="radio" name="meja_id" value="3" class="d-none">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="table-preview" data-table="4">
                                            <i class="fas fa-utensils mb-2"></i>
                                            <p class="mb-0">Meja 4</p>
                                            <small>Max 6 orang</small>
                                            <input type="radio" name="meja_id" value="4" class="d-none">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="table-preview" data-table="5">
                                            <i class="fas fa-utensils mb-2"></i>
                                            <p class="mb-0">Meja 5</p>
                                            <small>Max 6 orang</small>
                                            <input type="radio" name="meja_id" value="5" class="d-none">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="table-preview" data-table="6">
                                            <i class="fas fa-utensils mb-2"></i>
                                            <p class="mb-0">Meja 6</p>
                                            <small>Max 8 orang</small>
                                            <input type="radio" name="meja_id" value="6" class="d-none">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="catatan" class="form-label">Catatan Khusus</label>
                                    <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Contoh: Alergi makanan, meja dekat jendela, dll."></textarea>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Konfirmasi Booking</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    
    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const tables = document.querySelectorAll('.table-preview');
    
    tables.forEach(table => {
        table.addEventListener('click', function() {
            // Reset all tables
            tables.forEach(t => t.classList.remove('table-selected'));
            
            // Select clicked table
            this.classList.add('table-selected');
            
            // Select the hidden radio button
            const radio = this.querySelector('input[type="radio"]');
            radio.checked = true;
        });
    });
    
    // Form validation
    const bookingForm = document.getElementById('bookingForm');
    bookingForm.addEventListener('submit', function(e) {
        // Check if table is selected
        const selectedTable = document.querySelector('input[name="meja_id"]:checked');
        if (!selectedTable) {
            e.preventDefault();
            alert('Silakan pilih meja terlebih dahulu');
            return false;
        }
        // Form will submit normally to the controller
    });
});
</script>
</body>
</html>