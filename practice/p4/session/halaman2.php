<?php
    session_start();
    $user = $_SESSION["username"];
    echo "<h1>Halaman 2</h1>";
    echo "<div>user: $user</div>";
    echo "<div><a href='login.php'>Link ke halaman login</a><div>"
?>