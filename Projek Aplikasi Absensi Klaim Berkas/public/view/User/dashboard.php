<?php session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'user') {
    header("Location: ../Auth/Login.php");
    exit;
}
echo "<a href='profile.php'>Profil</a>";
echo "<a href='submit_document.php'>Kirim Berkas</a>";

?>