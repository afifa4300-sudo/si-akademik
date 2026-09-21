<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <a href="<?= BASE_URL; ?>/mahasiswa">Kembali ke Data Mahasiswa</a>
    <br><br>

    <?php if (!empty($error)): ?>
        <p style="color:red;"><?= htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form method="post" action="<?= BASE_URL; ?>/mahasiswa/store">
        <label>NIM</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Program Studi</label><br>
        <input type="text" name="prodi" required><br><br>

        <label>Dosen Pembimbing</label><br>
        <select name="dosen_id">
            <option value="">-- Tidak ada --</option>
            <?php foreach ($dosen as $d): ?>
                <option value="<?= $d['id']; ?>"><?= htmlspecialchars($d['nama']); ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>