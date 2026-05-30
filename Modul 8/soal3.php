<?php
   $data_siswa = [
         1 => ["nama" => "Adi",   "poin" => 75],
         2 => ["nama" => "Joni",  "poin" => 80],
         3 => ["nama" => "Jihan", "poin" => 65],
         4 => ["nama" => "Aya",   "poin" => 70],
         5 => ["nama" => "Ita",   "poin" => 85],
         6 => ["nama" => "Budi",  "poin" => 90],
         7 => ["nama" => "Tini",  "poin" => 95],
         8 => ["nama" => "Sari",  "poin" => 65]
];

         echo "a) Poin siswa nomor urut 5: " . $data_siswa[5]["poin"] . "<br><br>";

         echo "b) Nama siswa dengan poin 90:<br>";
   $ada90 = false;

   foreach ($data_siswa as $siswa) {
      if ($siswa["poin"] == 90) {
         echo $siswa["nama"] . "<br>";
      $ada90 = true;
    }
}

   if (!$ada90) {
         echo "Tidak ada<br>";
}

         echo "<br>";

         echo "c) Nama siswa dengan poin 100:<br>";
   $ada100 = false;

   foreach ($data_siswa as $siswa) {
      if ($siswa["poin"] == 100) {
         echo $siswa["nama"] . "<br>";
      $ada100 = true;
    }
}

   if (!$ada100) {
         echo "Tidak ada";
}

 ?>