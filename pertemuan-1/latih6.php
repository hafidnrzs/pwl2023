<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Variabel Static</title>
</head>
<body>
<?php
    function fungsi1(){
        static $x = 0;
        echo $x;
        $x++;
    }

    fungsi1();
    fungsi1();
    fungsi1();
?>
</body>
</html>