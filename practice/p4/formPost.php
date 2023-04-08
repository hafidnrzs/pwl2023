<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h2>Registrasi</h2>
        <form action="prosesPost.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="namaDpn">Nama Depan: </label>
                <input class="form-control" type="text" name="namaDpn" id="namaDpn">
            </div>
            <div class="mb-3">
                <label for="namaBlk" class="form-label">Nama Belakang:</label>
                <input class="form-control" type="text" name="namaBlk">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input class="form-control" type="text" name="email">
            </div>
            Jenis Member:
            <div class="form-check mb-3">
                <div class="form-check">
                    <input type="checkbox" name="cPengHobby" id="cPengHobby" value="pengHobby" checked class="form-check-input">
                    <label class="form-check-label" for="cPengHobby">pengHobby</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cPetani" id="cPetani" value="petani" class="form-check-input">
                    <label class="form-check-label" for="cPetani">Petani</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cPedagang" id="cPedagang" value="pedagang" class="form-check-input">
                    <label class="form-check-label" for="cPedagang">Pedagang</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cSales" id="cSales" value="sales" class="form-check-input">
                    <label class="form-check-label" for="cSales">Sales</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cPengamat" id="cPengamat" value="pengamat" class="form-check-input">
                    <label class="form-check-label" for="cPengamat">pengamat</label>
                </div>
            </div>
            <label for="cbPendidikan">Pendidikan:</label>
            <select class="form-select" name="cbPendidikan" id="cbPendidikan">
                <option value="TdkLulusSD">TdkLulusSD</option>
                <option value="SD">SD</option>
                <option value="SMA">SMP</option>
                <option value="SMP">SMA</option>
                <option value="Diploma">Diploma</option>
                <option value="Sarjana">Sarjana</option>
                <option value="Magister">Magister</option>
                <option value="Doktor">Doktor</option>
            </select><br>
            Gender:<br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rGender" id="pria" value="pria" checked>Pria
                    <label class="form-check-label" for="pria">Pria</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rGender" id="wanita" value="wanita">
                    <label class="form-check-label" for="wanita">Wanita</label>
                </div>
                <div class="mb-3">
                    <label for="saran" class="form-label">Masukan terhadap kami:</label>
                    <textarea class="form-control" id="saran" name="saran" cols="40" row="5"></textarea>
                </div>
                <input type="submit" class="btn btn-primary">
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>