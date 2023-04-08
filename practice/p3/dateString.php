<!DOCTYPE html>
<html>
<body>

<?php
$dd = strtotime("10:30 April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $dd) . "<br>";

$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+ 3 months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

</body>
</html>