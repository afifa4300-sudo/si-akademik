<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Sistem Informasi Akademik</h2>
<p>Selamat datang, <?= htmlspecialchars($username); ?>.</p>

<h3>Menu</h3>
<ul>
    <li><a href="<?= BASE_URL; ?>/mahasiswa">Mahasiswa</a></li>
    <li><a href="<?= BASE_URL; ?>/logout">Logout</a></li>
    <li><a href="/si-akademik/public/dosen">Data Dosen</a></li>
</ul>

</body>
</html>