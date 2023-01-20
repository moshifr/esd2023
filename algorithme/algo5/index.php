<?php
$nombreDepart = $_GET['nombreDepart'];
$nombreIncrement = 0;
if ($nombreDepart) {
    while ($nombreIncrement <= 10) {
        $nombreIncrement = $nombreIncrement +1 ;
        $suite .= $nombreDepart + $nombreIncrement . ',';
    }
}

?>
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

echo 'Nombre de départ : <strong>';
echo $nombreDepart;
echo '</strong><br>';


echo '<h1>Votre suite sera <strong>';
echo  $suite;
echo '</strong></h1>';

?>
<form action="">
    <input type="text" name="nombreDepart" placeholder="Votre nombre de départ">

    <input type="submit" value="Envoyer">
</form>
</body>
</html>