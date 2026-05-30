<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="wrapper">
    <div class="page-header">
        <h1>Tambah <span>Mahasiswa</span></h1>
        <a href="viewmahasiswa.php" class="btn btn-secondary">← Kembali</a>
    </div>

    <div class="card">
        <h2>Form Input Mahasiswa</h2>
        <form action="proses_inputmahasiswa.php" method="POST">
            <div class="form-group">
                <label>NPM</label>
                <input type="number" name="npm" placeholder="Contoh: 2021001" required>
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="namaMhs" placeholder="Nama lengkap" required>
            </div>
            <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="prodi" placeholder="Contoh: Teknik Informatika">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" placeholder="Alamat lengkap">
            </div>
            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="noHP" placeholder="Contoh: 081234567890">
            </div>
            <div class="form-actions">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                <a href="viewmahasiswa.php" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>