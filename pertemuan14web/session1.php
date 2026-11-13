<?php
/*
 * session1.php
 * Membuat session melalui proses login.
 * session_start() harus dipanggil sebelum HTML atau output apa pun.
 */
session_start();

if (isset($_POST['Login'])) {
    $user = trim($_POST['user'] ?? '');
    $pass = $_POST['pass'] ?? '';

    // Memeriksa username dan password.
    // Sesuai materi: username rahadian dan password 123.
    if ($user === "rahadian" && $pass === "123") {
        // Membuat session setelah login berhasil.
        $_SESSION['login'] = $user;

        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session2.php'>di sini (session2.php)</a> untuk menuju ke halaman pemeriksaan session.</h2>";
    } else {
        echo "<p style='color:red;'>Username atau password salah. Silakan coba lagi.</p>";
    }
}
?>

</html>