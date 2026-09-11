<?php

class Dosen
{
    public function getAll()
    {
        return [
            [
                'nidn' => '001',
                'nama' => 'Bapak Ahmad',
                'prodi' => 'Teknik Informatika',
            ],
            [
                'nidn' => '002',
                'nama' => 'Ibu Siti',
                'prodi'=> 'Sistem Informasi'
            ],
            [
                'nidn'  => '003',                  // ⬅️ data baru (dosen ke-3 sudah ditambahkan)
                'nama'  => 'Budi',
                'prodi' => 'Teknik Informatika'
            ]
        ];
    }
}