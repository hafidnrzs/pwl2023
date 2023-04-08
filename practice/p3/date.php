<!DOCTYPE html>
<html>
<head></head>
<body>
    
<?php
/*
parameter format:
d - Represent day of the month (01 to 31)
m - Represent a month (01 to 12)
Y - Represents a year (in four digits)
l - Represents the day of the week (Monday, Tuesday, ...)

H - 24 hour format of hour (00 to 23)
h - 12 hour format of an hour (01 to 12)
i - minutes (00 to 59)
s - seconds (00 to 59)
a - lowercase Ante meridiem / Post meridiem (am / pm)
*/
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";

echo "The time is " . date("h:i:sa");
?>

</body>
</html>