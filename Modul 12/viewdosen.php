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
            $result = mysqli_query($link, $query);

            //mengecek apakah ada error ketika menjalakan query
            if(!$result) {
                die ("Query Error: ".mysqli_errno($link)."".mysqli_error($link));
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
                ?>  
        </table>
    </body>
</html>