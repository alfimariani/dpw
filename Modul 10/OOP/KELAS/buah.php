<?php
require_once ('mahasiswa.php');

$mhs1 = new mahasiswa("Alfi Mariani");
$mhs1->setNIM("253307033");
$mhs1->setKelas("2B");

// tampilkan nama nim dan kelas dari $mhs1
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "NIM: " . $mhs1->getNIM() . "<br>";
echo "Kelas: " . $mhs1->getKelas() . "<br>";
?>