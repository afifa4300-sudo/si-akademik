<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <a href="<?= BASE_URL; ?>/mahasiswa">Kembali ke Data Mahasiswa</a>
    <br><br>

    <form method="post" action="<?= BASE_URL; ?>/mahasiswa/update">
        <input type="hidden" name="nim_lama" value="<?= htmlspecialchars($data->getNim()); ?>">

        <label>NIM</label><br>
        <input type="text" name="nim" value="<?= htmlspecialchars($data->getNim()); ?>" required><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($data->getNama()); ?>" required><br><br>

        <label>Program Studi</label><br>
        <input type="text" name="prodi" value="<?= htmlspecialchars($data->getProdi()); ?>" required><br><br>

        <label>Dosen Pembimbing</label><br>
        <select name="dosen_id">
            <option value="">-- Tidak ada --</option>
            <?php foreach ($dosen as $d): ?>
                <option value="<?= $d['id']; ?>" <?= $d['id'] == $data->getDosenId() ? 'selected' : ''; ?>>
                    <?= htmlspecialchars($d['nama']); ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>