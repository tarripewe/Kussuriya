<?php
// Ambil parameter "page" dari URL, default ke "mahasiswa"
$page = isset($_GET['page']) ? $_GET['page'] : 'mahasiswa';

// Tentukan path file yang akan dimuat
$file = "views/$page.php";

// Cek apakah file ada, jika tidak tampilkan 404
if (file_exists($file)) {
    include 'includes/header.php'; // Header (Opsional)
    include 'includes/sidebar.php'; // Sidebar (Opsional)
    include $file; // Muat halaman sesuai request
    include 'includes/footer.php'; // Footer (Opsional)
} else {
    echo "<h1>404 - Halaman Tidak Ditemukan</h1>";
}
?>
