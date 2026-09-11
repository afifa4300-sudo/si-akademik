<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>

<a href="<?= BASE_URL; ?>/dashboard">Dashboard</a> |
<a href="<?= BASE_URL; ?>/mahasiswa">Data Mahasiswa</a> |
<a href="<?= BASE_URL; ?>/dosen">Data Dosen</a> |
<a href="<?= BASE_URL; ?>/logout">Logout</a>

<br><br>

<h2>Detail Mahasiswa</h2>

<p><strong>NIM:</strong> <?= $data['nim']; ?></p>
<p><strong>Nama:</strong> <?= $data['nama']; ?></p>
<p><strong>Program Studi:</strong> <?= $data['prodi']; ?></p>

<br>

<a href="<?= BASE_URL; ?>/mahasiswa">Kembali</a>

</body>
</html>