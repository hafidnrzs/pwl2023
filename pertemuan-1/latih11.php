<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Kondisional</title>
</head>
<body>

<?php
    // If, elseif, else
    $t = date("H");
    echo "</p>The hour (of the server) is " . $t;
    echo ", and will give you following message:</p>";

    if ($t < "10"){
        echo "Have a good morning!";
    } elseif ($t < "20"){
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }

    echo "<br>";
    // Switch
    $favcolor = "red";
    switch($favcolor){
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
?>

</body>
</html>