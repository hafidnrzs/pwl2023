<?php
    $str = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We' crossorigin='anonymous'>
    <title>". $data['title'] ."</title>
    <style>
        .jumbotron {
            position: relative;
            background: #000 url('img/tmn3.jpg') center center;
            width: 90%;
            height: 70vh;
            background-size: cover;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <div class='container-fluid'>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='".BASEURL."/home'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='".BASEURL."/produk'>Produk</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Order</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Member</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='".BASEURL."/about'>About</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='".BASEURL."/user/logout'>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> ";
    echo $str;
?>