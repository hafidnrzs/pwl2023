<!DOCTYPE html>
<html>
<body>
<?php
function printArr($x) {
    $p = count($x);
    for ($i = 0; $i < $p; $i++) {
        echo $x[$i];
        echo "<br>";
    }
}
$cars = array("Volvo", "BMW", "Toyota");
printArr($cars);

rsort($cars);
echo "<br>";
echo "Setelah disortir desc <br>";
printArr($cars);
?>
</body>
</html>