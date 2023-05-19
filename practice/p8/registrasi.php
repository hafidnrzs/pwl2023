<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registrasi</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Registrasi Member</h1>
                <form action="insMember.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="l1" class="form-label">Nama Member</label>
                        <input type="text" class="form-control" id="nama" name="tnama_member" placeholder="Nama Member">
                    </div>
                    <div class="mb-3">
                        <label for="l2" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="temail" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="l3" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="talamat" placeholder="Alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="l4" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="tkota" placeholder="Kota">
                    </div>
                    <div class="mb-3">
                        <label for="l5" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="prov" name="tprovinsi" placeholder="Provinsi">
                    </div>
                    <div class="mb-3">
                        <label for="l6" class="form-label">User name</label>
                        <input type="text" class="form-control" id="username" name="tnama_member" placeholder="User name">
                    </div>
                    <div class="mb-3">
                        <label for="l7" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="tpassword" placeholder="Password">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->
</body>
</html>