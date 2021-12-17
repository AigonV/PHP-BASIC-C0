<!DOCTYPE html>
<html>
<body>
<?php
function mijnNaamIsGroot(){
    $voornaam = "Mohammed";
    $achternaam = "Ahmed";
    $geheleNaam= "Mijn naam is $voornaam $achternaam";
    echo strtoupper($geheleNaam);
}
mijnNaamIsGroot();

?>
</body>
</html>