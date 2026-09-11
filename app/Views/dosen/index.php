<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
</head>
<body>

<a href="<?= BASE_URL; ?>/dashboard">Dashboard</a> |
<a href="<?= BASE_URL; ?>/mahasiswa">Data Mahasiswa</a> |
<a href="<?= BASE_URL; ?>/dosen">Data Dosen</a> |
<a href="<?= BASE_URL; ?>/logout">Logout</a>

<br><br>

<h2>DATA DOSEN</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Program Studi</th>
    </tr>

    <?php foreach ($dosen as $dsn): ?>
        <tr>
            <td><?= $dsn['nidn']; ?></td>
            <td><?= $dsn['nama']; ?></td>
            <td><?= $dsn['prodi']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>