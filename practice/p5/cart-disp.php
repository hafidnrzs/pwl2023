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
// testing print session array
echo "<pre>";
print_r($_SESSION["cart"]);
echo "</pre>";

if (!empty($_SESSION["cart"])) {
    echo "Jml data: " . sizeof($_SESSION["cart"]["arrCart"]) . 
    "<br><a href='cart-remove.php'>Kosongkan Cart</a><br><br><br>";
    
    $max = sizeof($_SESSION["cart"]["arrCart"]);
    for ($i = 0; $i < $max; $i++) {
        foreach ($_SESSION["cart"]["arrCart"][$i] as $key => $val) {
            echo "$key -> $val&nbsp";
        }
        echo "<br>";
    }

} else {
    echo "Cart kosong";
}
?>
</body>
</html>