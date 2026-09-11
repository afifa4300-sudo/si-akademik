<?php

session_start();

// Alamat dasar project ini (sesuaikan dengan nama folder di htdocs/XAMPP kamu)
define('BASE_URL', '/si-akademik/public');

// Load semua Middleware yang dibutuhkan
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

// Load daftar route
$routes = require __DIR__ . '/../routes/web.php';

// Ambil path dari URL, buang query string (?nim=... dsb)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Buang BASE_URL dari depan path, sisanya adalah "nama route"
if (strpos($uri, BASE_URL) === 0) {
    $uri = substr($uri, strlen(BASE_URL));
}
$uri = trim($uri, '/');

if ($uri === '') {
    $uri = 'login';
}

// Jika route tidak terdaftar -> 404
if (!array_key_exists($uri, $routes)) {
    http_response_code(404);
    echo "Halaman tidak ditemukan";
    exit;
}

$route = $routes[$uri];

// Jalankan middleware yang terdaftar pada route ini
foreach ($route['middleware'] as $middlewareClass) {
    $middleware = new $middlewareClass();
    $middleware->handle();
}

// Load & jalankan Controller
require_once __DIR__ . '/../app/Controllers/' . $route['controller'] . '.php';

$controllerClass = $route['controller'];
$controller = new $controllerClass();

$method = $route['method'];
$controller->$method();