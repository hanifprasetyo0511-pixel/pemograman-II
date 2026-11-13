<?php
/*
 * session2.php
 * Memeriksa apakah pengguna sudah login.
 */
session_start();

// Pemeriksaan session.
if (isset($_SESSION['login'])) {
    echo "<h1>Selamat Datang " . htmlspecialchars($_SESSION['login']) . "</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah login.</h2>";
    echo "<h2><a href='session3.php'>Klik di sini untuk LOGOUT</a></h2>";
} else {
    // Jika session belum ada, pengguna belum login.
    echo "Anda belum login! Anda tidak berhak masuk ke halaman ini. ";
    echo "Silakan login <a href='session1.php'>di sini</a>.";
}
?>