<!DOCTYPE html>
<html>
<body>
<?php
function mijnNaamIsGroot(){
    $voornaam = "Aydin";
    $achternaam = "Maleki";
    $geheleNaam= "Mijn naam is $voornaam $achternaam";
    echo strtoupper($geheleNaam);
}
mijnNaamIsGroot();

?>
</body>
</html>