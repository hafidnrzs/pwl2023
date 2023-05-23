<?php
session_start();
$id = $_SESSION["id"];
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="../css/shared.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/cout.css">
</head>
<body>
    <header>
        <div id="page-logo"><a href="../index.html">Toko ABC</a></div>
        <nav>
            <ul>
                <li><a href="../product.php">Product</a></li>
                <li><a href="cart-disp.php">Cart</a></li>
                <li><a href="../about.html">About</a></li>
            </ul>
        </nav>
    </header>
    <div class="grid-container">
        <div class="grid-item">
        <?php
        if (!empty($_SESSION['cart'])) {
            echo "Jumlah data: ". sizeof($_SESSION['cart']['arrCart']);
            $max = sizeof($_SESSION['cart']['arrCart']);
            $text = "<table class='cartTable'>
                <thead>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Kode</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Jumlah</th>
                        <th scope='col'>Harga</th>
                        <th scope='col'>Bayar</th>
                    </tr>
                </thead>
                <tbody>";
            $sum = 0;
            for ($i = 0; $i < $max; $i++) {
                $text .= "<tr><td>". $i + 1 ."</td>";
                $jml = 0; $hrg = 0;
                $brg = "";
                foreach ($_SESSION['cart']['arrCart'][$i] as $key => $val) {
                        // echo "$key -> $val &nbsp";
                        // $text .= "<td>". $i + 1 ."</td><td>". $val ."</td>";
                        if ($key == "hrg")
                            $hrg = $val;
                        if ($key == "jml")
                            $jml = $val;
                        if ($key = "nmBrg")
                            $brg = $key;
                        $tothrg = $hrg * $jml;
                        if ($key == "jml" || $key == "hrg")
                            $text .= "<td>". number_format($val, 0) ."</td>";
                        else
                            $text .= "<td>". $val ."</td>";
                    }
                    $sum += $tothrg;
                    $text .= "<td>". number_format($tothrg, 0) ."</td>";
                    $text .= "</tr>";
                }
                $text .= "<tr><td colspan=5>Total harga: ". number_format($sum, 0) ."</td></tr>";
                $text .= "</tbody></table>";
                echo $text;
            } else
                echo "Cart kosong";
                ?>
            </div>
            <div class="grid-item">
            <?php
            $sql = "SELECT * FROM member WHERE id='$id'";
            $hasil = $conn->query($sql);
            while ($rec = $hasil->fetch_assoc()) {
                $nama_member = $rec["nama_member"];
                $alamat = $rec["alamat"] .", ". $rec["kota"] .", ". $rec["provinsi"];
            }
            // echo $sql;
            ?>
            <form action="ins-checkout.php" method="POST">
                <input type="hidden" name="hidmember" value="<?= $id; ?>">
                <div><label for="lbMember">Nama</label></div>
                <div><input type="text" name="tnama_member" value="<?= $nama_member; ?>" readonly></div>
                <div><label for="lbNama">Alamat</label></div>
                <div><input type="text" name="talamat" value="<?= $alamat; ?>" readonly></div>
                <div><label for="lbJmlBeli">Jumlah Pembelian</label></div>
                <div><input type="text" name="tpembelian" value="<?= $sum; ?>" readonly></div>
                <div><label for="lbeksped">Ekspedisi</label></div>
                <div><input type="text" name="tekspedisi"></div>
                <div><label for="lbBiayaKirim">Biaya Kirim</label></div>
                <div><input type="text" name="tbiayaKirim"></div>
                <div><label for="lbtot_byr">Total Pembayaran</label></div>
                <div><input type="text" name="ttotalByr"></div>
                <div><label for="lbljnsByr">Jenis Pembayaran</label></div>
                <div><input type="text" name="tjenisByr"></div>

                <div><input type="submit" value="Submit"></div>
            </form>
        </div>
    </div>
    <footer>
        <ul>
            <li>
                <a href="https://www.instagram.com">
                    <img src="../images/icons/instagram.png" alt="instagram">
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com">
                    <img src="../images/icons/fb.png" alt="fb">
                </a>
            </li>
        </ul>
    </footer>
</body>
</html>