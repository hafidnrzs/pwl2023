<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Loop</title>
</head>
<body>

<?php
// While
$x = 1;

while($x <= 5){
    echo "The number is: $x <br>";
    $x++;
}

echo "<hr>";
// do while
$x = 1;

do {
    echo "The number is $x <br>";
    $x++;
} while ($x <= 5);

echo "<hr>";
// For
for($x = 1; $x <= 10; $x++){
    echo "The number is $x <br>";
}

echo "<hr>";
// Foreach
$colors = array("red", "green", "blue", "yellow");

foreach($colors as $value){
    echo "$value <br>";
}

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach($age as $x => $val){
    echo "$x = $val <br>";
}

echo "<hr>";
// Break, continue
for($x = 0; $x < 10; $x++){
    if($x == 4){
        break;
    }
    echo "The number is: $x <br>";
}

echo "<hr>";
for($x = 0; $x < 10; $x++){
    if($x == 4){
        continue;
    }
    echo "The number is $x <br>";
}
?>

</body>
</html>