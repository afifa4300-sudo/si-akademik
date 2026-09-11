<?php

require_once __DIR__ . '/../Models/Mahasiswa.php';

class MahasiswaController
{
    public function index()
    {
        $model = new Mahasiswa();
        $mahasiswa = $model->getAll();

        require_once __DIR__ . '/../Views/mahasiswa/index.php';
    }

    public function detail()
    {
        $nim = $_GET['nim'] ?? null;

        $model = new Mahasiswa();
        $mahasiswa = $model->getAll();

        $data = null;

        foreach ($mahasiswa as $mhs) {
            if ($mhs['nim'] == $nim) {
                $data = $mhs;
                break;
            }
        }

        if ($data == null) {
            echo "Data mahasiswa tidak ditemukan";
            return;
        }

        require_once __DIR__ . '/../Views/mahasiswa/detail.php';
    }
}