<?php
session_start();

include 'koneksi.php';

// Dapatkan username dari sesi
$username = $_SESSION['username'];

// Update status pengguna menjadi offline
if ($username) {
    $stmt = $koneksi->prepare("UPDATE users SET status='offline' WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->close();
}

// Hapus semua sesi
session_unset();
session_destroy();

// Redirect ke halaman login
header("location:../public/login.php");
exit();
?>
