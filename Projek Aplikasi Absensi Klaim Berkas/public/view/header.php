<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title><?php echo $pageTitle ?? 'Dashboard'; ?></title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }
        nav {
            background: linear-gradient(90deg, #4e54c8, #8f94fb);
        }
        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }
        .nav-link {
            color: white !important;
            margin-right: 15px;
        }
        .nav-link:hover {
            color: #d1c4ff !important;
        }
        .container-custom {
            margin-top: 20px;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">MyApplication</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="document.php">Document</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white py-1 px-3" href="logout.php" style="border-radius: 12px;">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container container-custom">
