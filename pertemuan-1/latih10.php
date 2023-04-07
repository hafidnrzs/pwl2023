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
// Operator String
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2; // $txt1 = $txt1 . $txt2
echo $txt1;

echo "<br>";
// Array operator
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

print_r($x + $y); // union of $x and $y

echo "<br>";
// Operator assignment kondisional
// if empty($user) = TRUE, set $status = "anonymous";
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "<br>";

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";

echo $user = $_GET["user"] ?? "anonymous";
echo "<br>";
?>

</body>
</html>