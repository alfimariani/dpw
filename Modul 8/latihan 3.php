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

    $x = 5;
    $y = 10;

    //Arithmetic operators
    echo "Penambahan".$x + $y. "<br>";
    echo "Pengurangan".$x - $y. "<br>";
    echo "Perkalian".$x * $y. "<br>";
    echo "Pembagian".$x / $y. "<br>";
    echo "Modulus".$x % $y. "<br>";
    echo "Exponensial ".$x ** $y. "<br>";
    echo("<br>");

    //Asignment operators
    $x += 2; // $x = $x + 2
    $y *= 2; // $x = $x + 2
    echo "Penambahan x ".$x. "<br>";
    echo "Penambahan y ".$y. "<br>";
    echo("<br>");

    //Increment/Decrement operators
    echo "Isi ++x = ".++$x. "<br>";
    echo "Isi x++ = ".$x++. "<br>";
    echo "Isi x = ".$x. "<br>";
    echo("<br>");
    echo "Isi --x = ".--$x. "<br>";
    echo "Isi y-- = ".$y--. "<br>";
    echo "Isi y = ".$y. "<br>";
    echo("<br>");

    //Conditional assignment operators
    $user ="Andi darmawan";
    // <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
    $status = (empty($user)) ? "kosong" : "Ada isi";
    echo $status."<br>";
    // variable $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";

    ?>
</body>
</html>