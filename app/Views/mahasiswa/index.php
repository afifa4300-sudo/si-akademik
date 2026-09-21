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

<a href="<?= BASE_URL; ?>/mahasiswa/create">Tambah Mahasiswa</a>

<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Dosen Pembimbing</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= htmlspecialchars($mhs->getNim()); ?></td>
            <td><?= htmlspecialchars($mhs->getNama()); ?></td>
            <td><?= htmlspecialchars($mhs->getProdi()); ?></td>
            <td><?= htmlspecialchars($mhs->getNamaDosen() ?? '-'); ?></td>
            <td>
                <a href="<?= BASE_URL; ?>/mahasiswa/detail?nim=<?= $mhs->getNim(); ?>">Detail</a> |
                <a href="<?= BASE_URL; ?>/mahasiswa/edit?nim=<?= $mhs->getNim(); ?>">Edit</a> |
                <a href="<?= BASE_URL; ?>/mahasiswa/delete?nim=<?= $mhs->getNim(); ?>"
                   onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>