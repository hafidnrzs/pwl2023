<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $productid = $_GET['productid'];
    $brg = $_GET['nama'];
    $hrg = $_GET['harga'];
    $jml = $_GET['jml'];
    if (!empty($_SESSION['cart']['arrCart'])) {
        $max = sizeof($_SESSION['cart']['arrCart']);
        $find = false;
        for ($i = 0; $i < $max; $i++) {
            $cari = array_search($brg, $_SESSION['cart']['arrCart'][$i]);
            if ($cari) {
                $_SESSION['cart']['arrCart'][$i]['jml'] += 1;
                $find = true;
                break;
            }
        }
    }
    if (!$find) {
        $item = array('productId'=>$productid, 'nmBrg'=>$brg, 'jml'=>$jml, 'hrg'=>$hrg);
        array_push($_SESSION['cart']['arrCart'], $item);
    }
}
header("Location: cart-disp.php")
?>