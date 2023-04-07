<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

<?php
    // Array
    $mobil = array("Mitsubishi", "Daihatsu", "Toyota");
    var_dump($mobil);

    echo "<br>";
    // Object
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
    $myCar = new Car("black", "Volvo");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car("red","Toyota");
    echo $myCar -> message();

    echo "<br>";
    // Null
    $x = "Hello world!";
    $x = null;
    var_dump($x);

    // Tipe Data - Resource
    /*
    bukan merupakan tipe data sebenarnya
    bertindak sebagai referensi untuk mengakses data sumber daya lain

    $conn = mysqli_connect("localhost","root","admin","buku");
    $fp = fopen("index.php","r");
    */

    echo "<br>";
    // Konstanta
    define("SALAM","Selamat Pagi ");

    define("mobil", [
        "Honda",
        "Daihatsu",
        "Toyota"
    ]);

    function fungsi1(){
        echo SALAM;
    }
    fungsi1();

    echo mobil[0];
?>

</body>
</html>