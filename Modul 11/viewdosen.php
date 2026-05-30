<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                width: 840px;
                margin: auto;
            }
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Tabel Dosen</h1>
        <center><a href="input.php">Input Data</a></center>
        <br/>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Dosen</th>
                <th>No HP</th>
                <th>Pilihan</th>
            </tr>
            <?php
            //jalankan query untuk menampilkan semua data diurutkan ascending berdasarkan IdDosen
            $query ="SELECT * FROM t_dosen ORDER BY IdDosen ASC";
            $result = mysqli_query($con, $query);

            //mengecek apakah ada error ketika menjalakan query
            if(!$result) {
                die ("Query Error: ".mysqli_errno($con)."".mysqli_error($con));
            }

            //hasil query akan disimpan dalam variable 4data dalam bentuk array
            //kemudian di cetak dengan perulangan while
            while ($data = mysqli_fetch_assoc($result)) 
                {
                    //mencetak / menampilkan data
                    echo "<tr>";
                    echo "<td>$data[idDosen]</td>";
                    echo "<td>$data[namaDosen]</td>";
                    echo "<td>$data[noHP]</td>";
                    // membuat link untuk mengedit dan menghapus data
                    echo '<td>
                        <a href="editdosen.php?idDosen='/$data['idDosen'].'">Edit</a> /
                        <a href="hapusdosen.php?idDosen='/$data['idDosen'].'"
                        onclick="return confrim(\'Anda yakin akan menghapus data?\')">Hapus</a>
                    </td>';
                    echo "</tr>";  
                }

$con = new mysqli("localhost","root","1","db_kampus");
if ($con->connect_error) {
    die("Connection failed: ". $con->connect_error);
    }

    // filter input dari metode GET unruk string query
    $input=$con->escape_string($_GET["id"]);
    // membuat query dengan prepared statment
    $statment=$con->prepare("select * from t_dosen where idDosen=?");
    // merubah ? sesuai dengan tipe data input yang dibutuhkan
    // i = integer, s=string, d=double, b=blob
    $statment->bind_param("i", $input);
    // mengeksekusi query ke basis data
    $statment->execute();
    // mendapatkan hasil dari eksekusi query
    $result = $statment->get_result();
    // perulangan untuk mendapatkan gais da
    while($baris = $result->fetch_assoc()){
            // filter data tampilan untuk data text saja tanpa kode html
            echo(htmlspecialchars($baris['namaDosen'])."<br>");

    }
            
    $con->close();

                ?>  
        </table>
    </body>
</html>