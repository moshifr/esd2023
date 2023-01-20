<?php
    $anneeActuelle = $_GET['anneeActuelle'];
    $ageActuel = $_GET['ageActuel'];

    $ageTotal = 2100 - $anneeActuelle + $ageActuel;
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affiche Année</title>
</head>
<body>
<?php

echo '<h1>Votre age en 2100 sera de ';
echo $ageTotal;
echo '</h1>';

?>
<form action="">
    <input type="text" name="anneeActuelle" placeholder="Année actuelle">
    <input type="text" name="ageActuel" placeholder="Age actuel">

    <input type="submit" value="Envoyer">
</form>
</body>
</html>