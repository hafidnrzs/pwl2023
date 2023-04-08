<?php
    if (isset($_GET["tnama"])) {
        $nama = $_GET["tnama"];
        echo $nama != "" ? "Nama Anda: <b>$nama</b>" : "";
    }
?>