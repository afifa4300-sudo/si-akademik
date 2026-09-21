<?php

class Mahasiswa
{
    private ?string $nim;
    private ?string $nama;
    private ?string $prodi;
    private ?int $dosenId;
    private ?string $namaDosen = null; // hasil JOIN, khusus untuk ditampilkan

    public function __construct(?string $nim = null, ?string $nama = null, ?string $prodi = null, $dosenId = null)
    {
        $this->setNim($nim);
        $this->setNama($nama);
        $this->setProdi($prodi);
        $this->setDosenId($dosenId);
    }

    // ---------- Getter ----------
    public function getNim(): ?string { return $this->nim; }
    public function getNama(): ?string { return $this->nama; }
    public function getProdi(): ?string { return $this->prodi; }
    public function getDosenId(): ?int { return $this->dosenId; }
    public function getNamaDosen(): ?string { return $this->namaDosen; }

    // ---------- Setter + Validasi ----------
    public function setNim(?string $nim): void
    {
        if ($nim !== null && $nim !== '' && !ctype_digit($nim)) {
            throw new InvalidArgumentException('NIM harus berupa angka.');
        }
        $this->nim = $nim;
    }

    public function setNama(?string $nama): void
    {
        if ($nama === null || trim($nama) === '') {
            throw new InvalidArgumentException('Nama mahasiswa tidak boleh kosong.');
        }
        $this->nama = $nama;
    }

    public function setProdi(?string $prodi): void
    {
        $this->prodi = $prodi;
    }

    public function setDosenId($dosenId): void
    {
        $this->dosenId = ($dosenId === '' || $dosenId === null) ? null : (int) $dosenId;
    }

    public function setNamaDosen(?string $namaDosen): void
    {
        $this->namaDosen = $namaDosen;
    }

    // ---------- Helper konversi ----------
    public static function fromArray(array $row): self
    {
        $entity = new self($row['nim'], $row['nama'], $row['prodi'], $row['dosen_id'] ?? null);
        if (!empty($row['nama_dosen'])) {
            $entity->setNamaDosen($row['nama_dosen']);
        }
        return $entity;
    }
}