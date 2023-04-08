<!DOCTYPE html>
<html>
<body>
<?php
$cars = array(
    array("Volvo", 22, 18), array("BMW", 15, 13), array("Saab", 5, 2), array("Land Rover", 17, 15)
);
echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . "<br>";
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number " . ($row + 1) . "</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>