<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
</head>
<body>

<a href="?url=mahasiswa">Data Mahasiswa</a>
<a href="?url=dosen">Data Dosen</a>

<br><br>

<h2>DATA DOSEN</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>NIDN</th>
        <th>Nama</th>
    </tr>

    <?php foreach ($dosen as $dsn): ?>
        <tr>
            <td><?= $dsn['nidn']; ?></td>
            <td><?= $dsn['nama']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>