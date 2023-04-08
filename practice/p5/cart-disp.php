<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar isi Cart</title>
</head>
<body>
<?php
if (!empty($_SESSION["cart"])) {
    echo "Jml data: " . sizeof($_SESSION["cart"]["arrCart"]) . "<br>
    <a href='cart-remove.php'>Kosongkan Cart</a><br><br><br>";
    $max = sizeof($_SESSION["cart"]["arrCart"]);
    for ($i = 0; $i < $max; $i++) {
        while(list($key, $val) = each ($_SESSION["cart"]["arrCart"][$i])) {
            echo "$key -> $val &nbsp";
        }
        echo "<br>";
    }
} else {
    echo "Cart kosong";
}
?>
</body>
</html>