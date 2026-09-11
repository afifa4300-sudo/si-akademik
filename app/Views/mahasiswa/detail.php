<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>

<h2>Detail Mahasiswa</h2>

<p><strong>NIM:</strong> <?= $data['nim']; ?></p>
<p><strong>Nama:</strong> <?= $data['nama']; ?></p>
<p><strong>Program Studi:</strong> <?= $data['prodi']; ?></p>

<br>

<a href="?url=mahasiswa">Kembali</a>

</body>
</html>