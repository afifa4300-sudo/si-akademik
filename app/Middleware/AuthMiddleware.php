<?php

class AuthMiddleware
{
    /**
     * Cek apakah user sudah login.
     * Jika belum, lempar (redirect) ke halaman /login.
     */
    public static function handle()
    {
        if (empty($_SESSION['login']) || $_SESSION['login'] !== true) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }
    }
}