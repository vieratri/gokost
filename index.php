<?php
session_start();

// Jika sudah login, langsung arahkan ke dashboard sesuai role
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['role'] === 'admin') {
        header("Location: admin/login.php");
        exit;
    } else {
        header("Location: user/login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gokost - Layanan Pesanan & Kurir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            background: #f8f9fa;
        }
        .hero {
            padding: 100px 20px;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            text-align: center;
        }
        .hero h1 {
            font-weight: 700;
        }
        .feature-box {
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .feature-box:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<!-- HERO SECTION -->
<section class="hero">
    <h1>Selamat Datang di Gokost</h1>
    <p class="lead">Layanan pemesanan makanan & pengantaran cepat dalam satu aplikasi.</p>
   <a href="login.php" class="btn btn-outline-secondary">Masuk Sekarang</a>
</section>

<!-- FEATURES SECTION -->
<div class="container my-5">
    <h2 class="text-center mb-4">Kenapa Memilih Gokost?</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-box text-center">
                <h4>📦 Pengantaran Cepat</h4>
                <p>Pesanan makanan atau barang dikirim secara real-time dan aman.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box text-center">
                <h4>📊 Dashboard Lengkap</h4>
                <p>Admin & user memiliki tampilan dashboard yang berbeda dan real-time sinkron.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box text-center">
                <h4>🔐 Keamanan Terjamin</h4>
                <p>OTP, sistem login aman, dan manajemen pesanan terintegrasi.</p>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center py-3 bg-light mt-5">
    <small>© <?= date('Y'); ?> Gokost. All Rights Reserved.</small>
</footer>

</body>
</html>
