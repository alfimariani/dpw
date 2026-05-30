<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
    $npm    = mysqli_real_escape_string($link, $_GET['npm']);
    $query  = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
    if (!$data) {
        header("location:viewmahasiswa.php");
        exit;
    }
} else {
    header("location:viewmahasiswa.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="wrapper">
    <div class="page-header">
        <h1>Edit <span>Mahasiswa</span></h1>
        <a href="viewmahasiswa.php" class="btn btn-secondary">← Kembali</a>
    </div>

    <div class="card">
        <h2>Form Edit Mahasiswa</h2>
        <form action="proses_editmahasiswa.php" method="POST">
            <!-- Hidden field untuk npm -->
            <input type="hidden" name="npm" value="<?= $data['npm'] ?>">

            <div class="form-group">
                <label>NPM</label>
                <input type="text" value="<?= htmlspecialchars($data['npm']) ?>" disabled>
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="namaMhs"
                       value="<?= htmlspecialchars($data['namaMhs']) ?>" required>
            </div>
            <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="prodi"
                       value="<?= htmlspecialchars($data['prodi']) ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat"
                       value="<?= htmlspecialchars($data['alamat']) ?>">
            </div>
            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="noHP"
                       value="<?= htmlspecialchars($data['noHP']) ?>">
            </div>
            <div class="form-actions">
                <button type="submit" name="update" class="btn btn-primary">Update Data</button>
                <a href="viewmahasiswa.php" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>