<?php
session_start();
if (empty($_SESSION["cart"]["arrCart"]))
    $_SESSION["cart"]["arrCart"] = array();
?>
<!DOCTYPE html>
<html>
<body>
    <table>
        <tr>
            <td><a href="addCart.php?brg=produk1&hrg=5000&jml=1">Produk 1</a>: 5000</td>
        </tr>
    </table>
</body>
</html>