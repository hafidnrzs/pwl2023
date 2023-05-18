<?php
session_start();
if (empty($_SESSION['cart']['arrCart']))
    $_SESSION['cart']['arrCart'] = array();
include "koneksi.php";
$sql = "SELECT * FROM barang";
$hasil = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=0">
    <link rel="stylesheet" href="css/shared.css">
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
    
</body>
</html>