<?php

session_start();

// Alamat dasar project ini (sesuaikan dengan nama folder di htdocs/XAMPP kamu)
define('BASE_URL', '/si-akademik/public');

// Koneksi database (file ini membuat variabel $pdo)
require_once __DIR__ . '/../config/database.php';

// Ambil path dari URL, buang query string (?id=... dsb)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Buang BASE_URL dari depan path, sisanya adalah "nama route"
if (strpos($uri, BASE_URL) === 0) {
    $uri = substr($uri, strlen(BASE_URL));
}
$url = trim($uri, '/');

if ($url === '') {
    $url = 'login';
}

// Jalankan daftar route (isinya blok if, tiap blok yang cocok akan exit)
require __DIR__ . '/../routes/web.php';

// Kalau tidak ada satupun blok if di routes/web.php yang cocok
http_response_code(404);
echo "Halaman tidak ditemukan";