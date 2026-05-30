   <?php
      $nilai = 85; // bisa diganti

         echo "Nilai angka: " . $nilai . "<br>";

      if ($nilai >= 90 && $nilai <= 100) {
         echo "Nilai huruf: A";
      } elseif ($nilai >= 80 && $nilai <= 89) {
         echo "Nilai huruf: AB";
      } elseif ($nilai >= 70 && $nilai <= 79) {
         echo "Nilai huruf: B";
      } elseif ($nilai >= 60 && $nilai <= 69) {
         echo "Nilai huruf: BC";
      } elseif ($nilai >= 0 && $nilai <= 59) {
         echo "Nilai huruf: C";
      } else {
         echo "Nilai tidak valid";
      }

    ?>