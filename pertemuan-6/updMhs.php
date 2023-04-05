<?php
    include "koneksi.php";
    $nim = $_POST["tnim"];
    $nama = $_POST["tnama"];
    $ipk = $_POST["tipk"];
    $kota_asal = $_POST["tkota_asal"];

    $sql = "UPDATE mhs SET nama='$nama', ipk='$ipk', kota_asal='$kota_asal' WHERE nim='$nim'";
    $hasil = $conn -> query($sql);
    if (!$hasil) {
        echo "update data gagal";
    } else {
        header("location:listMhs.php");
    }
?>