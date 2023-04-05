<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<style>
    table {
        margin: auto;
        border-collapse: collapse;
        width: 70%;
        margin-top: 100px;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}

    th {
        background-color: #04AA60;
        color: white;
    }

    .tombol {
        width: 100px;
        padding: 8px;
        margin-left: 200px;
        text-decoration: none;
        background: blue;
        color: white;
    }
</style>
<body>
<?php
    include "koneksi.php";
    $sql = "SELECT * FROM mhs";

    echo "<a href='addMhs.php' class='tombol'>Tambah Data</a>";
    echo "<table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>IPK</th>
                <th>Kota Asal</th>
                <th colspan='2'>Aksi</th>
            </tr>";
    $hasil = $conn -> query($sql);
    while ($rec = $hasil -> fetch_assoc()) {
        echo "<tr>
                <td>". $rec["nim"] ."</td>
                <td>". $rec["nama"] ."</td>
                <td>". $rec["ipk"] ."</td>
                <td>". $rec["kota_asal"] ."</td>
                <td><a href='delMhs.php?nim=". $rec["nim"] ."' class='tombol'>Del</a></td>
                <td><a href='editMhs.php?nim=". $rec["nim"] ."' class='tombol'>Edit</a></td>
            </tr>";
    }
    echo "</table>";
    $conn -> close();
?>
</body>
</html>