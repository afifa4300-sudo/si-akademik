<body>

<a href="?url=mahasiswa">Data Mahasiswa</a>
<a href="?url=dosen">Data Dosen</a>

<br><br>

<h2>DATA MAHASISWA</h2>
<h3>Politeknik Negeri Jember</h3>

<table border="1" cellpadding="8">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['prodi']; ?></td>
            <td>
                <a href="?url=mahasiswa/detail&nim=<?= $mhs['nim']; ?>">
                    Detail
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
