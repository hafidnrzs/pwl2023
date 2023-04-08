<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <main class="container mt-4">
        <div class="card text-center">
            <div class="card-header text-body-secondary">
                Member Baru
            </div>
            <?php
            //proses textBox
            $namaDpn = $_POST["namaDpn"];
            $namaBlk = $_POST["namaBlk"];
            $email = $_POST["email"];
            echo "<div class='card-body'>";
            echo "<h2 class='card-title'>$namaDpn $namaBlk</h2>";
            echo "<p class='card-text'>$email</p>";

            //proses comboBox
            $pendidikan = $_POST["cbPendidikan"];
            echo "<p class='card-text'>$pendidikan</p>";

            //proses radio
            $gender = $_POST["rGender"];
            echo "<p class='card-text'>$gender</p>";
            echo "<p class='card-text'>Masukan:</p>";
            //nl2br: untuk menyisipkan <br> pada string yang terdapat \n
            $saran = nl2br($_POST["saran"]);
            echo "<p class='card-text'>$saran</p>";
            echo "</div>";

            echo "<div class='card-footer text-body-secondary'>";
            //proses checkBox
            $jenis = "";
            if (isset($_POST["cPengHobby"])) {
                $pengHobby = $_POST['cPengHobby'];
                $jenis .= $pengHobby . " ";
            }
            if (isset($_POST["cPetani"])) {
                $petani = $_POST['cPetani'];
                $jenis .= $petani . " ";
            }
            if (isset($_POST["cPedagang"])) {
                $pedagang = $_POST['cPedagang'];
                $jenis .= $pedagang . " ";
            }
            if (isset($_POST["cSales"])) {
                $sales = $_POST['cSales'];
                $jenis .= $sales . " ";
            }
            if (isset($_POST["cPengamat"])) {
                $pengamat = $_POST['cPengamat'];
                $jenis .= $pengamat . " ";
            }
            $jenis = trim($jenis);
            echo $jenis;
            echo "</div>";
            ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>