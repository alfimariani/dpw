<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
    $npm   = mysqli_real_escape_string($link, $_GET['npm']);
    $query = "DELETE FROM t_mahasiswa WHERE npm='$npm'";
    $hasil = mysqli_query($link, $query);

    if (!$hasil) {
        die("Gagal menghapus data: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("location:viewmahasiswa.php");
?>