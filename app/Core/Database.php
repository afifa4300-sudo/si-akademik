<?php

class Database
{
    private static ?Database $instance = null;
    private PDO $connection;

    /**
     * Constructor private -> tidak bisa di-new dari luar.
     * Ini bagian dari pola Singleton: hanya ada 1 koneksi PDO
     * yang dipakai bersama di seluruh aplikasi.
     */
    private function __construct()
    {
        $host     = 'localhost';
        $dbname   = 'si_akademik';
        $username = 'root';
        $password = '';

        $this->connection = new PDO(
            "mysql:host={$host};dbname={$dbname};charset=utf8mb4",
            $username,
            $password
        );
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }

    // Cegah instance digandakan lewat clone
    private function __clone() {}
}