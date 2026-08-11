<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Yummy Restaurant</title>
    <link href="<?= base_url('assets1/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets1/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Nunito', sans-serif;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 400px;
        }
        .login-header {
            background: #ce1212;
            color: white;
            padding: 30px;
            text-align: center;
        }
        .login-header h2 {
            margin: 0;
            font-weight: 600;
        }
        .login-body {
            padding: 40px;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 20px;
        }
        .btn-login {
            background: #ce1212;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            font-weight: 600;
            margin-top: 10px;
        }
        .btn-login:hover {
            background: #b31111;
            color: white;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        .register-link a {
            color: #ce1212;
            text-decoration: none;
        }
        .form-floating > label {
            padding: 12px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2><i class="bi bi-person-circle me-2"></i>Login</h2>
                <p class="mb-0">Welcome back to Yummy</p>
            </div>
            <div class="login-body">
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                
                <form action="<?= site_url('auth/authenticate') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                    </div>
                    
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <button type="submit" class="btn btn-login">Login</button>
                </form>

                <div class="register-link">
                    <p>Don't have an account? <a href="<?= site_url('auth/register') ?>">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
