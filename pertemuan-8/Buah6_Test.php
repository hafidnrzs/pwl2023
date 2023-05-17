<!DOCTYPE html>
<html>
<body>

<?php
include "BuahHard.php";
include "BuahSoft1.php";

$pear = new BuahHard("Pear", "Kuning");
$pear->message();
$pear->intro();
echo "<br>";

$raspberry = new BuahSoft("Raspberry", "Merah", 30);
$raspberry->message();
$raspberry->intro();
?>

</body>
</html>