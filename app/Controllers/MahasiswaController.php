<?php

require_once __DIR__ . '/../Repositories/MahasiswaRepository.php';
require_once __DIR__ . '/../Models/mahasiswa.php';
require_once __DIR__ . '/../Models/dosen.php';
require_once __DIR__ . '/../Core/Database.php';

class MahasiswaController
{
    private MahasiswaRepository $repo;

    /**
     * Controller tidak lagi membuat koneksi database sendiri.
     * Repository disuntikkan lewat constructor (Dependency Injection).
     */
    public function __construct()
    {
        $this->repo = new MahasiswaRepository(Database::getInstance());
    }

    public function index(): void
    {
        $mahasiswa = $this->repo->all();
        require_once __DIR__ . '/../Views/mahasiswa/index.php';
    }

    public function detail(string $nim): void
    {
        $data = $this->repo->findByNim($nim);

        if (!$data) {
            echo "Data mahasiswa tidak ditemukan";
            return;
        }

        require_once __DIR__ . '/../Views/mahasiswa/detail.php';
    }

    public function create(): void
    {
        $dosen = (new Dosen(Database::getInstance()->getConnection()))->getAll();
        require_once __DIR__ . '/../Views/mahasiswa/create.php';
    }

    public function store(): void
    {
        try {
            $mahasiswa = new Mahasiswa(
                $_POST['nim'] ?? null,
                $_POST['nama'] ?? null,
                $_POST['prodi'] ?? null,
                $_POST['dosen_id'] ?? null
            );
            $this->repo->create($mahasiswa);
        } catch (InvalidArgumentException $e) {
            $error = $e->getMessage();
            $dosen = (new Dosen(Database::getInstance()->getConnection()))->getAll();
            require_once __DIR__ . '/../Views/mahasiswa/create.php';
            return;
        }

        header('Location: ' . BASE_URL . '/mahasiswa');
        exit;
    }

    public function edit(string $nim): void
    {
        $data = $this->repo->findByNim($nim);

        if (!$data) {
            echo "Data mahasiswa tidak ditemukan";
            return;
        }

        $dosen = (new Dosen(Database::getInstance()->getConnection()))->getAll();
        require_once __DIR__ . '/../Views/mahasiswa/edit.php';
    }

    public function update(string $nimLama): void
    {
        try {
            $mahasiswa = new Mahasiswa(
                $_POST['nim'] ?? null,
                $_POST['nama'] ?? null,
                $_POST['prodi'] ?? null,
                $_POST['dosen_id'] ?? null
            );
            $this->repo->update($nimLama, $mahasiswa);
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage();
            return;
        }

        header('Location: ' . BASE_URL . '/mahasiswa');
        exit;
    }

    public function delete(string $nim): void
    {
        $this->repo->delete($nim);
        header('Location: ' . BASE_URL . '/mahasiswa');
        exit;
    }
}