<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Dosen</title>
</head>
<body>
    <h1>Edit Dosen</h1>
    <a href="<?= BASE_URL; ?>/dosen">Kembali ke Data Dosen</a>
    <br><br>

    <form method="post" action="<?= BASE_URL; ?>/dosen/update">
        <input type="hidden" name="id" value="<?= htmlspecialchars($dosen['id']) ?>">

        <label>NIDN</label><br>
        <input type="text" name="nidn"
               value="<?= htmlspecialchars($dosen['nidn']) ?>" required><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama"
               value="<?= htmlspecialchars($dosen['nama']) ?>" required><br><br>

        <label>Bidang Keahlian</label><br>
        <input type="text" name="bidang_keahlian"
               value="<?= htmlspecialchars($dosen['bidang_keahlian']) ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>