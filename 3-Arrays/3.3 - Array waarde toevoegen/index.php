<!DOCTYPE html>
<html>
<body>

<?php
$myheroes = array ('<li>Spiderman</li>' , '<li>Wolverine</li>' , '<li>Black Panther</li>');
$myheroes[3] = '<li>Valkyrie</li>';

array_push ($myheroes, '<li>Deadpool</li>');

echo $myheroes[0];
echo $myheroes[1];
echo $myheroes[2];
echo $myheroes[3];
echo $myheroes[4];
?>

</body>
</html> 