<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<a href="<?= BASE_URL; ?>/dashboard">Dashboard</a> |
<a href="<?= BASE_URL; ?>/mahasiswa">Data Mahasiswa</a> |
<a href="<?= BASE_URL; ?>/dosen">Data Dosen</a> |
<a href="<?= BASE_URL; ?>/logout">Logout</a>

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
                <a href="<?= BASE_URL; ?>/mahasiswa/detail?nim=<?= $mhs['nim']; ?>">
                    Detail
                </a>
            </td>
            <td><?= htmlspecialchars($mhs['nama_dosen'] ?? '-'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>