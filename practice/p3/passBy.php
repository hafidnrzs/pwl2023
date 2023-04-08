<?php
// Pass-by-reference and pass-by-value

$a = 10;
$b = 5;
function tambah(int $x, int $y) {
    $a = $a + 10;
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . tambah(5, 10) . "<br>";
echo "7 + 13 = " . tambah(7, 13) . "<br>";
echo "$a + $b = " . tambah($a, $b);
echo $a;

?>