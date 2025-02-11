<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// $pageTitle = "Dashboard";
include '../public/view/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: '../public/assets/Background.jpg';
        }
    </style>
</head>
<body background="img='../public/assets/Background.jpg'">
    
<p>Halo bang </p>

</body>
</html>

<?php 
include '../public/view/footer.php'
?>