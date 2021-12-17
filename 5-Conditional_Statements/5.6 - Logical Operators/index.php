<!DOCTYPE html>
<html>
<body>
<?php
$var1= 22;
$var2= 22;
if($var1 <10 && $var2<10) {
    echo"beide getalen zijn kleiner dan 10 ";
} else {
    echo "beide getalen zijn groter dan 10";
}
echo"<br>";

$var1= 2;
$var2= 22;
if($var1 <10 || $var2<10) {
    echo"beide getalen zijn kleiner dan 10 ";
} else {
    echo"beide getalen zijn groter dan 10";
}
echo"<br>";

$var1= 55;
$var2= 33;
if($var1 <10 xor $var2<10) {
    echo"beide getalen zijn kleiner dan 10 ";
} else {
    echo"beide getalen zijn groter dan 10";
}
echo"<br>";

$var1= 9;
$var2= 11;
if($var1 !== $var2) {
    echo"De getalen zijn niet het zelfde ";
} else {
    echo"De getalen zijn het zelfde ";
}
?>
</body>
</html> 