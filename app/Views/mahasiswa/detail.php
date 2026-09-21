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

<p><strong>NIM:</strong> <?= htmlspecialchars($data->getNim()); ?></p>
<p><strong>Nama:</strong> <?= htmlspecialchars($data->getNama()); ?></p>
<p><strong>Program Studi:</strong> <?= htmlspecialchars($data->getProdi()); ?></p>
<p><strong>Dosen Pembimbing:</strong> <?= htmlspecialchars($data->getNamaDosen() ?? '-'); ?></p>

<br>

<a href="<?= BASE_URL; ?>/mahasiswa">Kembali</a>

</body>
</html>