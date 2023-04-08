<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Form</title>
</head>
<body>
<h2>Registrasi</h2>
<form action="prosesPost.php" method="post">
Nama Depan: <input type="text" name="namaDpn"><br>
Nama Belakang: <input type="text" name="namaBlk"><br>
Email: <input type="text" name="email"><br>
Jenis Member:
    <input type="checkbox" name="cPengHobby" value="pengHobby" checked>pengHobby
    <input type="checkbox" name="cPetani" value="petani">Petani
    <input type="checkbox" name="cPedagang" value="pedagang">Pedagang
    <input type="checkbox" name="cSales" value="sales">Sales
    <input type="checkbox" name="cPengamat" value="pengamat">Pengamat<br>
Pendidikan:
    <select name="cbPendidikan">
        <option value="TdkLulusSD">TdkLulusSD</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="Diploma">Diploma</option>
        <option value="Sarjana">Sarjana</option>
        <option value="Magister">Magister</option>
        <option value="Doktor">Doktor</option>
    </select><br>
Gender:<br>
    <input type="radio" name="rGender" value="pria" checked>Pria<br>
    <input type="radio" name="rGender" value="wanita">Wanita<br>
Masukan terhadap kami: <textarea name="saran" cols="40" row="5"></textarea><br>
    <input type="submit">
</form>
</body>
</html>