<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Yummy Restaurant</title>
    <link href="<?= base_url('assets1/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets1/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Nunito', sans-serif;
        }
        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .register-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 450px;
        }
        .register-header {
            background: #ce1212;
            color: white;
            padding: 30px;
            text-align: center;
        }
        .register-header h2 {
            margin: 0;
            font-weight: 600;
        }
        .register-body {
            padding: 40px;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 20px;
        }
        .btn-register {
            background: #ce1212;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            font-weight: 600;
            margin-top: 10px;
        }
        .btn-register:hover {
            background: #b31111;
            color: white;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        .login-link a {
            color: #ce1212;
            text-decoration: none;
        }
        .form-floating > label {
            padding: 12px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <h2><i class="bi bi-person-plus me-2"></i>Register</h2>
                <p class="mb-0">Create your account</p>
            </div>
            <div class="register-body">
                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <li><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?= site_url('auth/createAccount') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <label for="username">Username</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm Password" required>
                        <label for="password_confirm">Confirm Password</label>
                    </div>

                    <button type="submit" class="btn btn-register">Register</button>
                </form>

                <div class="login-link">
                    <p>Already have an account? <a href="<?= site_url('auth/login') ?>">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
