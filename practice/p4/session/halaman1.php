<?php
    session_start();
    $user = $_SESSION["username"];
    echo "<h1>Halaman 1</h1>";
    echo "<div>user: $user</div>";
    echo "<div><a href='halaman2.php'>Link ke halaman 2</a><div>"
?>