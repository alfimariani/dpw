<?php
$con = new mysqli("localhost","root","1","db_kampus");
if ($con->connect_error) {
    die("Connection failed: ". $con->connect_error);
    }
    // buat query yang akan dikirim ke database
    $q="CREATE TABLE t_login (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50),
    tgl_registrasi TIMEsTAMP DEAFULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
    )";

    //kirim kueri ke server basis data
    $hasil= $con->query($q);
    if ($hasil === TRUE) {
        echo "Tabel t_login berhasil dibuat";
    } else {
        echo "Tabel gagal dibuat: ".$con->error;
    }
    //menutup koneksi
    $con->close();
?>