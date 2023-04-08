<html>
<head>
    <title>Pengolahan Form</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Nama Anda: <input type="text" name="tnama"><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
// Contoh serangan Cross-site scripting (XSS)
// http://localhost/pwl2023/practice/p4/xss.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
// diterjemahkan http://localhost/pwl2023/practice/p4/xss.php/"><script>alert('hacked)</script>
if (isset($_POST["tnama"])) {
    $nama = $_POST["tnama"];
    echo $nama != "" ? "Nama Anda: <b>$nama</b>" : "";
}
?>