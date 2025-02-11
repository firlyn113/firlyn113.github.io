<?php

// Jika user sudah login, arahkan ke dashboard sesuai role

    if (isset($_SESSION['user_id'])) {
        echo "Session Role: " . $_SESSION['role'];
        exit;
    if ($_SESSION['role'] === 'admin') {
        header("Location: Admin/dashboard.php");
    } else {
        header("Location: User/dashboard.php");
    }
    exit;
    
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Aplikasi Absensi dan Pengajuan Berkas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Absensi & Pengajuan Berkas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-primary nav-link" href="auth/Login.php">Login</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-primary nav-link text-white" href="auth/Register.php">Register</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-4">Selamat Datang di Aplikasi Absensi dan Pengajuan Berkas</h1>
                <p class="lead mt-3">Aplikasi ini mempermudah pengelolaan absensi dan pengajuan dokumen dengan fitur yang mudah digunakan.</p>
                <div class="mt-4">
                    <a href="auth/Login.php" class="btn btn-primary btn-lg">Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 mt-5">
        <p>&copy; <?= date('Y') ?> Aplikasi Absensi dan Pengajuan Berkas. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
