<?php
include '../../../includes/session_helper.php';


if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    echo "Session tidak valid atau bukan admin";
    exit;
}

// if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
//     header("Location: ../Auth/Login.php");
//     exit;
// }

include '../header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<a href='manage_users.php'>Kelola Data Petugas</a>";
    echo "<a href='verify_documents.php'>Verifikasi Berkas</a>";
    echo "<a href='../Auth/Logout.php'>Logout</a>";
    ?>

</body>
</html>


<?php 
include '../footer.php'
?>
