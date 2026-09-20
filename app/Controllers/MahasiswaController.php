<?php

require_once __DIR__ . '/../Models/Mahasiswa.php';

class MahasiswaController
{
    public function index()
    {
        global $pdo;
        $model = new Mahasiswa($pdo);
        $mahasiswa = $model->getAll();

        require_once __DIR__ . '/../Views/mahasiswa/index.php';
    }

    public function detail($nim)
    {
        global $pdo;
        $model = new Mahasiswa($pdo);
        $data = $model->getByNim($nim);

        if (!$data) {
            echo "Data mahasiswa tidak ditemukan";
            return;
        }

        require_once __DIR__ . '/../Views/mahasiswa/detail.php';
    }
}