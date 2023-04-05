<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Data MHS</title>
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        .formInput {
            width: 80%;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php
        include "koneksi.php";
        $nim = $_GET["nim"];
        $sql = "SELECT * FROM mhs WHERE nim = '$nim'";
        $hasil = $conn -> query($sql);
        while ($rec = $hasil -> fetch_assoc()) {
            $nama = $rec["nama"];
            $ipk = $rec["ipk"];
            $kota_asal = $rec["kota_asal"];
        }
    ?>
    <h1>Edit Data Mahasiswa</h1>
    <form action="updMhs.php" method="POST">
        <div class="formInput">
            <div><label>NIM</label></div>
            <div><input type="text" name="tnim" value="<?=$nim ?>" readonly></div>
            <div><label>Nama</label></div>
            <div><input type="text" name="tnama" value="<?=$nama ?>"></div>
            <div><label>IPK</label></div>
            <div><input type="text" name="tipk" value="<?=$ipk ?>"></div>
            <div><label>Kota Asal</label></div>
            <div><input type="text" name="tkota_asal" value="<?=$kota_asal ?>"></div>
            <div><input type="submit" value="Simpan"></div>
        </div>
    </form>
</body>

</html>