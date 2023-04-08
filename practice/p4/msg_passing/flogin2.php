<!DOCTYPE html>
<html>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <div>User</div>
            <div><input type="text" name="tuser"></div>
        </div>
        <div>
            <div>Password</div>
            <div><input type="password" name="tpass"></div>
        </div>
        <div><button type="submit">login</button></div>
    </form>
</body>
</html>
<?php
    if (isset($_POST["tuser"])) {
        $user = $_POST["tuser"];
        $pass = $_POST["tpass"];
        if ($user == "admin" && $pass == "123") {
            header("location:halaman1.php?username=$user");
        } else {
            if ($user != "")
                echo "<div>User tidak valid..</div>";
        }
    }
?>