<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Variabel Global</title>
</head>
<body>
<?php
// Variabel global
$x = 5;
$y = 10;

function fungsi1() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

fungsi1();
echo $y; // hasil = 15
?> 
</body>
</html>