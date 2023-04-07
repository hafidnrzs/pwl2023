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
    $siswa = array('Arif', 'Beta', 'Cici');
    echo '<pre>';
    print_r($siswa);
    echo '</pre>';
?>
<br>
<?php
    $nama = 'Agus';
    var_dump($nama);

    $siswa = array(
        'nama'=>array('Arif','Beta','Cici'),
        'jurusan'=>'Informatika',
        'semester'=>1,
        1=>'Jakarta',
        2=>'Surabaya'
    );

    echo '<pre>'; var_dump($siswa); echo '</pre>';

//ini teks yang tidak dieksekusi oleh engine php
/*
ini adalah blok
baris
komentar
*/
?>
</body>
</html>