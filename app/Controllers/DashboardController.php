<?php

class DashboardController
{
    public function index()
    {
        $username = $_SESSION['username'] ?? 'Guest';

        require_once __DIR__ . '/../Views/dashboard/index.php';
    }
}