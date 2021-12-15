<!DOCTYPE html>
<html>
<body>
<?php
$test1 = 10;
$test2 = 6;

if($test1 == $test2){
    echo"Gelijk";
}

echo "<br>";
if($test1 != $test2){
    echo"Ongelijk";
}

echo "<br>";
if($test1 === $test2){
    echo"Indentiek";
}

echo "<br>";
if($test1 > $test2) {
    echo"Test1 is groter than test2";
}

echo "<br>";
if($test1 < $test2){
    echo"Test1 is kleiner dan tset2";
}

echo "<br>";
if($test1 >= $test2){
    echo"Test1 is groter of gelijk aan test2";
}

echo "<br>";
if($test1 <= $test2){
    echo"test1 is kleiner of gelijk aan test2";
}

?>
</body>
</html>