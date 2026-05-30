<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{253307033}">
    <meta name="author" content="{Alfi Mariani}">
</head>
<body>
    <h1>Halaman PHP saya</h1>
    <?php
    /* Operator logika yang bisa digunakan
    * ==    Sama Dengan        $x == $y
    * ===   Identical          $x === $y
    * !=    Tidak sama dengan  $x != $y
    * <>    Tidak sama dengan  $x <> $y
    * !==   Not identical      $x !== $y
    * >     Lebih Besar dari   $x > $y
    * <     Kurang Dari        $x < $y
    * >=    Lebih besar atau Sama dengan $x >= $y
    * >=    Kurang dari atau sama dengan $x <= $y
    * <=>   Spaceship          $x <=> $y
    */

    $t = date ("H");  // mendapatkan jam dengan format 1-24
    echo "if";
    if ($t <16) {
        echo "selamat siang!";
    } 

    
    $t = date ("H");  // mendapatkan jam dengan format 1-24
    echo "<br> if dan Else <br>";
    if ($t < 20) {
        echo "selamat siang!";
    } else {
       echo "Selamat malam!"; 
    }

    echo "<br> Nested If <br>";
    if ($t <16) {
        echo "Selamat pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    }else {
        echo "Selamat Malam!";
    }

    ?>
</body>
</html>