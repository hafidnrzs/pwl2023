<!DOCTYPE html>
<html>
<body>
<?php
function printArr($arr) {
    foreach ($arr as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
}
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
printArr($age);

echo "<br>";
echo "Setelah disortir berdasarkan value(umur)<br>";
asort($age);
printArr($age);

echo "<br>";
echo "Setelah disortir berdasarkan key(nama)<br>";
ksort($age);
printArr($age);
?>
</body>
</html>