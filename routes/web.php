<?php

require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Controllers/DashboardController.php';
require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

// ---------- Auth ----------
if ($url === 'login') {
    $controller = new AuthController();
    $controller->showLogin();
    exit;
}

if ($url === 'login/process' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AuthController();
    $controller->login();
    exit;
}

if ($url === 'logout') {
    $controller = new AuthController();
    $controller->logout();
    exit;
}

// ---------- Dashboard ----------
if ($url === 'dashboard') {
    AuthMiddleware::handle();
    $controller = new DashboardController();
    $controller->index();
    exit;
}

// ---------- Mahasiswa ----------
if ($url === 'mahasiswa') {
    AuthMiddleware::handle();
    $controller = new MahasiswaController();
    $controller->index();
    exit;
}

if ($url === 'mahasiswa/detail' && isset($_GET['nim'])) {
    AuthMiddleware::handle();
    $controller = new MahasiswaController();
    $controller->detail($_GET['nim']);
    exit;
}

// ---------- Dosen ----------
if ($url === 'dosen') {
    AuthMiddleware::handle();
    $controller = new DosenController();
    $controller->index();
    exit;
}

if ($url === 'dosen/create') {
    AuthMiddleware::handle();
    $controller = new DosenController();
    $controller->create();
    exit;
}

if ($url === 'dosen/store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    AuthMiddleware::handle();
    $controller = new DosenController();
    $controller->store();
    exit;
}

if ($url === 'dosen/edit' && isset($_GET['id'])) {
    AuthMiddleware::handle();
    $controller = new DosenController();
    $controller->edit($_GET['id']);
    exit;
}

if ($url === 'dosen/update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    AuthMiddleware::handle();
    $controller = new DosenController();
    $controller->update($_POST['id']);
    exit;
}

if ($url === 'dosen/delete' && isset($_GET['id'])) {
    AuthMiddleware::handle();
    $controller = new DosenController();
    $controller->delete($_GET['id']);
    exit;
}