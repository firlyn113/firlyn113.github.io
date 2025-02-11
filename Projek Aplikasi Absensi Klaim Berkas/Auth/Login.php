<?php
// Include koneksi database
include '../includes/Koneksi.php';
include '../includes/session_helper.php';

// Proses login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mendapatkan data user berdasarkan email
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

   // Verifikasi password dan set session jika login berhasil
if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];

    // echo "Role: " . $_SESSION['role']; // Debug role
    // exit;
    // Redirect berdasarkan role
    if ($user['role'] == 'admin') {
        header("Location: ../public/view/Admin/dashboard.php");
    } else {
        header("Location: ../public/view/User/dashboard.php");
    }
    exit;
} else {
    $error = "Email atau password salah!";
}
}

// Jika user sudah login, redirect ke dashboard
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: ../public/view/Admin/dashboard.php");
    } else {
        header("Location: ../public/view/User/dashboard.php");
    }
    exit;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Absensi</title>
    <link href="../public/css/style.css" rel="stylesheet">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <?php if (isset($_GET['register']) && $_GET['register'] == 'success'): ?>
            <p style="color: green; text-align: center;">Registrasi berhasil! Silakan login.</p>
            <?php endif; ?>

            <form method="POST" action="Login.php">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="********" required>
                <button type="submit" class="login-btn">Log in</button>
                <p><a href="Register.php">Belum punya akun? Registrasi</a></p>
            </form>
            <?php if (isset($error)): ?>
                <p style="color: red; text-align: center;"><?= $error ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
