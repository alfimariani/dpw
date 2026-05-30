<?php
include 'koneksi.php';

if (isset($_GET['kodeMK'])) {
    $kodeMK = mysqli_real_escape_string($link, $_GET['kodeMK']);
    $query  = "SELECT * FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
    if (!$data) {
        header("location:viewmatakuliah.php");
        exit;
    }
} else {
    header("location:viewmatakuliah.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="wrapper">
    <div class="page-header">
        <h1>Edit <span>Mata Kuliah</span></h1>
        <a href="viewmatakuliah.php" class="btn btn-secondary">← Kembali</a>
    </div>

    <div class="card">
        <h2>Form Edit Mata Kuliah</h2>
        <form action="proses_editmatakuliah.php" method="POST">
            <input type="hidden" name="kodeMK" value="<?= $data['kodeMK'] ?>">

            <div class="form-group">
                <label>Kode MK</label>
                <input type="text" value="<?= htmlspecialchars($data['kodeMK']) ?>" disabled>
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="namaMK"
                       value="<?= htmlspecialchars($data['namaMK']) ?>" required>
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input type="number" name="sks"
                       value="<?= htmlspecialchars($data['sks']) ?>" min="1" max="6">
            </div>
            <div class="form-group">
                <label>Jam</label>
                <input type="number" name="jam"
                       value="<?= htmlspecialchars($data['jam']) ?>" min="1">
            </div>
            <div class="form-actions">
                <button type="submit" name="update" class="btn btn-primary">Update Data</button>
                <a href="viewmatakuliah.php" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>