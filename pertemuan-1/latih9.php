<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Operator</title>
</head>
<body>

<?php
    // Arithmetic operator
    $x = 10;
    $y = 6;

    echo $x + $y;

    echo "<br>";
    // Assignment operator
    $x = 20;
    $x += 100; // $x = $x + 100;
    echo $x;

    echo "<br>";
    // Comparison operator
    $x = 100;
    $y = "100";
    
    var_dump($x == $y); // return true because the value are equal

    echo "<br>";
    // Increment / decrement
    $x = 10;
    echo ++$x;

    echo "<br>";
    // Logical operator
    $x = 100;
    $y = 60;

    if($x == 100 and $y == 60){
        echo "Hello world!";
    }
?>

</body>
</html>