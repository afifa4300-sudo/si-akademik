<?php

require_once __DIR__ . '/../Models/mahasiswa.php';
require_once __DIR__ . '/../Core/Database.php';

class MahasiswaRepository
{
    private PDO $pdo;

    /**
     * Constructor Dependency Injection:
     * Repository TIDAK membuat koneksi sendiri, tapi menerima
     * objek Database dari luar (di-"suntik").
     */
    public function __construct(Database $database)
    {
        $this->pdo = $database->getConnection();
    }

    public function all(): array
    {
        $sql = "SELECT mahasiswa.*, dosen.nama AS nama_dosen
                FROM mahasiswa
                LEFT JOIN dosen ON mahasiswa.dosen_id = dosen.id
                ORDER BY mahasiswa.nama ASC";

        $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return array_map(fn($row) => Mahasiswa::fromArray($row), $rows);
    }

    public function findByNim(string $nim): ?Mahasiswa
    {
        $sql = "SELECT mahasiswa.*, dosen.nama AS nama_dosen
                FROM mahasiswa
                LEFT JOIN dosen ON mahasiswa.dosen_id = dosen.id
                WHERE mahasiswa.nim = :nim";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['nim' => $nim]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ? Mahasiswa::fromArray($row) : null;
    }

    public function create(Mahasiswa $mahasiswa): bool
    {
        $sql = "INSERT INTO mahasiswa (nim, nama, prodi, dosen_id)
                VALUES (:nim, :nama, :prodi, :dosen_id)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            'nim'      => $mahasiswa->getNim(),
            'nama'     => $mahasiswa->getNama(),
            'prodi'    => $mahasiswa->getProdi(),
            'dosen_id' => $mahasiswa->getDosenId(),
        ]);
    }

    public function update(string $nimLama, Mahasiswa $mahasiswa): bool
    {
        $sql = "UPDATE mahasiswa
                SET nim = :nim_baru, nama = :nama, prodi = :prodi, dosen_id = :dosen_id
                WHERE nim = :nim_lama";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            'nim_baru' => $mahasiswa->getNim(),
            'nama'     => $mahasiswa->getNama(),
            'prodi'    => $mahasiswa->getProdi(),
            'dosen_id' => $mahasiswa->getDosenId(),
            'nim_lama' => $nimLama,
        ]);
    }

    public function delete(string $nim): bool
    {
        $stmt = $this->pdo->prepare("DELETE FROM mahasiswa WHERE nim = :nim");
        return $stmt->execute(['nim' => $nim]);
    }
}