<?php

$url = $_GET['url'] ?? 'mahasiswa';

switch ($url) {

    case 'mahasiswa':
        require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';

        $controller = new MahasiswaController();
        $controller->index();
        break;

    case 'mahasiswa/detail':
        require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';

        $controller = new MahasiswaController();
        $controller->detail();
        break;

    case 'dosen':
        require_once __DIR__ . '/../app/Controllers/DosenController.php';

        $controller = new DosenController();
        $controller->index();
        break;

    default:
        echo "Halaman tidak ditemukan";
        break;
}