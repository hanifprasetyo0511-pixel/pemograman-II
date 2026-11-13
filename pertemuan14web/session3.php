<?php
/*
 * session3.php
 * Menghapus session (logout).
 */
session_start();

if (isset($_SESSION['login'])) {
    // Menghapus seluruh data session.
    $_SESSION = [];
    session_destroy();

    echo "<h1>Anda sudah berhasil LOGOUT</h1>";
    echo "<h2><a href='session1.php'>Klik di sini untuk LOGIN kembali</a></h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman ";
    echo "<a href='session2.php'>session2.php</a> lagi tanpa login.</h2>";
} else {
    echo "<h1>Anda belum login atau sudah logout.</h1>";
    echo "<a href='session1.php'>Kembali ke halaman login</a>";
}
?>