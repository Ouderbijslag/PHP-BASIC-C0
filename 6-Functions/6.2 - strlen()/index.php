<!DOCTYPE html>
<html>
<body>

<?php
function mijnNaamisGroot(){
    $voornaam = "Kerim";
    $achternaam = "Husejnovic";
    $gehelenaam = "Mijn naam is $voornaam $achternaam";
    strtoupper($gehelenaam);
    echo $gehelenaam;
}
mijnNaamisGroot();
?>
</body>
</html> 