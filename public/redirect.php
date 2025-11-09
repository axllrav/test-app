<?php
session_start();
if (!isset($_SESSION['kelas']) && !isset($_SESSION['siswa'])) {
    header("Refresh:3; url=index.php");
    echo '
    <h2 style="text-align: center; font-family: Tahoma;">Data tidak ditemukan/kosong!</h2>
    <p style="text-align: center; font-family: Tahoma;">Anda akan diarahkan ke halaman utama dalam 3 detik...</p>
    ';
    exit;
}
