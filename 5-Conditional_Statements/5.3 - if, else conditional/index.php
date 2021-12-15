<!DOCTYPE html>
<html>
<body>
<?php
$test1 = 3;
$test2 = 6;

if($test1 == $test2){
    echo "GElijk";
}
else{
    echo "Niet gelijk";
}

echo "<br>";
if($test1 != $test2){
    echo "Ongelijk";
}
else{
    echo "Gelijk";
}

echo "<br>";
if($test1 === $test2){
    echo "Identiek";
}
else{
    echo "Het is niet identiek";
}

echo "<br>";
if($test1 > $test2){
    echo "test1 is groter dan test2";
}
else{
    echo "Het is niet groter dan test2";
}

echo "<br>";
if($test1 < $test2){
    echo "test1 is kleiner dan test2";
}
else{
    echo "Het is niet kleiner dan test2";
}

echo "<br>";
if($test1 >= $test2){
    echo "test 1 is groter of gelijk aan test2";
}
else{
    echo "Niet groter of gelijk aan test2";
}

echo "<br>";
if($test1 <= $test2){
    echo "test1 is kleiner of gelijk aan test2";
}
else{
    echo "Het is niet kleiner of gelijk aan test2";
}

?>
</body>
</html>