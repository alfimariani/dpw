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

    $txt = "Selamat datanf !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi Variable txt adalah: $txt</p>";
    echo "<p>isi Variable x adalah: $x</p>";
    echo "<p>isi Variable y adalah: $y</p>";
    echo "Belajar PHP di" . $txt2 . "<br>";
    echo $x + $y;

    define("nama_konstanta", "{Alfi_Mariani}");
    echo "<br>".nama_konstanta;
    ?>
</body>
</html>