<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="wrapper">
    <div class="page-header">
        <h1>Tambah <span>Mata Kuliah</span></h1>
        <a href="viewmatakuliah.php" class="btn btn-secondary">← Kembali</a>
    </div>

    <div class="card">
        <h2>Form Input Mata Kuliah</h2>
        <form action="proses_inputmatakuliah.php" method="POST">
            <div class="form-group">
                <label>Kode MK</label>
                <input type="number" name="kodeMK" placeholder="Contoh: 101" required>
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="namaMK" placeholder="Nama lengkap mata kuliah" required>
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input type="number" name="sks" placeholder="Contoh: 3" min="1" max="6">
            </div>
            <div class="form-group">
                <label>Jam</label>
                <input type="number" name="jam" placeholder="Jumlah jam per minggu" min="1">
            </div>
            <div class="form-actions">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                <a href="viewmatakuliah.php" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>