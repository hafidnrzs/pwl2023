<!DOCTYPE html>
<html>
<body>

<?php
include "BuahHard.php";
include "BuahSoft.php";

$pear = new BuahHard("Pear", "Kuning");
$pear->message();
$pear->intro();
echo "<br>";

$raspberry = new BuahSoft("Raspberry", "Merah");
$raspberry->message();
$raspberry->intro();

// error karena hanya bisa diakses oleh Class itu sendiri/anaknya
$pear->printManfaat();
?>

</body>
</html>