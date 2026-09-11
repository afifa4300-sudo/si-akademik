<?php

class AuthController
{
    public function showLogin()
    {
        $error = null;
        require_once __DIR__ . '/../Views/auth/login.php';
    }

    public function login()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === 'admin' && $password === '12345') {
            $_SESSION['login']    = true;
            $_SESSION['username'] = $username;

            header('Location: ' . BASE_URL . '/dashboard');
            exit;
        }

        $error = 'Username atau password salah.';
        require_once __DIR__ . '/../Views/auth/login.php';
    }

    public function logout()
    {
        // Hapus semua data session
        $_SESSION = [];
        session_unset();
        session_destroy();

        header('Location: ' . BASE_URL . '/login');
        exit;
    }
}