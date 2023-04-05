<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "toko_bunga";

    $conn = new mysqli($host, $username, $password, $db);
    if (!$conn) {
        die("koneksi ke server dan database gagal");
    } else {
        // echo "koneksi ke server dan database berhasil";
    }
?>