<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="wrapper">
    <div class="page-header">
        <h1>Dashboard <span>Akademik</span></h1>
    </div>

    <?php
    // Hitung total data setiap tabel
    $jml_dosen   = mysqli_fetch_row(mysqli_query($link, "SELECT COUNT(*) FROM t_dosen"))[0];
    $jml_mhs     = mysqli_fetch_row(mysqli_query($link, "SELECT COUNT(*) FROM t_mahasiswa"))[0];
    $jml_mk      = mysqli_fetch_row(mysqli_query($link, "SELECT COUNT(*) FROM t_matakuliah"))[0];
    ?>

    <div class="stats-row">
        <div class="stat-card">
            <div class="label">Total Dosen</div>
            <div class="value"><?= $jml_dosen ?></div>
        </div>
        <div class="stat-card">
            <div class="label">Total Mahasiswa</div>
            <div class="value"><?= $jml_mhs ?></div>
        </div>
        <div class="stat-card">
            <div class="label">Mata Kuliah</div>
            <div class="value"><?= $jml_mk ?></div>
        </div>
    </div>

    <p style="color: var(--muted); font-size: 14px;">
        Gunakan menu navigasi di atas untuk mengelola data dosen, mahasiswa, dan mata kuliah.
    </p>
</div>

</body>
</html>