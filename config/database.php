<?php

require_once __DIR__ . '/../app/Core/Database.php';

// $pdo tetap tersedia secara global untuk modul yang belum direfactor (Dosen, Auth, Dashboard)
$pdo = Database::getInstance()->getConnection();