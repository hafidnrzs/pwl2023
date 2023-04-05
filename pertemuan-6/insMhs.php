<?php
    include "koneksi.php";
    $nim = $_POST["tnim"];
    $nama = $_POST["tnama"];
    $ipk = $_POST["tipk"];
    $kota_asal = $_POST["tkota_asal"];

    $sql = "INSERT INTO mhs (nim,nama,ipk,kota_asal) VALUES ('$nim','$nama','$ipk','$kota_asal')";
    $hasil = $conn -> query($sql);
    if (!$hasil) {
        echo "insert data gagal";
    } else {
        header("location:listMhs.php");
    }
?>