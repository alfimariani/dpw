   <?php
   $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

    echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

    echo "Saya suka " . $namaBuah[1] . "<br>";

    echo "Saya suka " . $namaBuah[2] . "<br>";

    echo "Saya suka " . $namaBuah[3] . "<br>";

    echo "Saya suka " . $namaBuah[4] . "<br>";

    $umur = array(
        "Alfi" => "18 Tahun",
        "Mariani" => "19 Tahun",
        "Mariana" => "20 Tahun"
);

    $umur['Alfi Mariani'] = "19 Tahun";

        echo "Umur Alfi adalah " . $umur['Alfi'] . "<br>";

    foreach ($umur as $nama => $usia) {
    echo "Umur $nama adalah $usia <br>";
}

    ?>