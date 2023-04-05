<?php
    include "koneksi.php";
    $nim = $_GET["nim"];
    $sql = "DELETE FROM mhs WHERE nim='$nim'";
    $hasil = $conn -> query($sql);
    if (!$hasil) {
        echo "hapus data gagal";
    } else {
        header("location:listMhs.php");
    }
?>