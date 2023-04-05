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
    <h1>Input Data Mahasiswa</h1>
    <form action="insMhs.php" method="POST">
        <div class="formInput">
            <div><label>NIM</label></div>
            <div><input type="text" name="tnim"></div>
            <div><label>Nama</label></div>
            <div><input type="text" name="tnama"></div>
            <div><label>IPK</label></div>
            <div><input type="text" name="tipk"></div>
            <div><label>Kota Asal</label></div>
            <div><input type="text" name="tkota_asal"></div>
            <div><input type="submit" value="Simpan"></div>
        </div>
    </form>
</body>

</html>