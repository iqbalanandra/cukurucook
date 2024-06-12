<?php
session_start();

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Gunakan prepared statements untuk mencegah SQL injection
    $stmt = $koneksi->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        die("Query Error: " . $koneksi->error);
    }

    $cek = $result->num_rows;

    if ($cek > 0) {
        $data = $result->fetch_assoc();

        // Periksa status akun
        if ($data['status'] == 'active') {
            // Set session
            $_SESSION['username'] = $data['username']; 
            $_SESSION['nama'] = $data['nama'];         
            $_SESSION['level'] = $data['level'];

            // Update status pengguna menjadi 'online'
            $stmt_update = $koneksi->prepare("UPDATE users SET status='online' WHERE username=?");
            $stmt_update->bind_param("s", $username);
            $stmt_update->execute();

            // Redirect berdasarkan level pengguna
            switch ($data['level']) {
                case "admin":
                    header("location:../public/index.php");
                    break;
                case "user":
                    header("location:../public/index.php");
                    break;
                default:
                    $error_message = "Level user tidak dikenal.";
            }
        } else {
            $error_message = "Akun Anda dinonaktifkan.";
            header("location:../public/login.php?error=" . urlencode($error_message));
        }
    } else {
        $error_message = "Username atau password salah.";
        header("location:../public/login.php?error=" . urlencode($error_message));
    }
} else {
    header("location:../public/login.php");
}
?>
