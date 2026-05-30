<?php
include 'koneksi.php';

if (isset($_GET['kodeMK'])) {
    $kodeMK = mysqli_real_escape_string($link, $_GET['kodeMK']);
    $query  = "DELETE FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $hasil  = mysqli_query($link, $query);

    if (!$hasil) {
        die("Gagal menghapus data: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("location:viewmatakuliah.php");
?>