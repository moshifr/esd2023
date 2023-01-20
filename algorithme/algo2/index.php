<?php
    $jourActuel = $_GET['jourActuel'];
    $heureActuel = $_GET['heureActuel'];

    $tenue = '';

    if ($jourActuel == 'Dimanche') {
        $tenue = 'Pyjama';
    }
    elseif ($jourActuel == 'Samedi') {
        if ($heureActuel < 20) {
            $tenue = 'Jogging';
        } else {
            $tenue = 'Tenue de soirée';
        }
    }
    elseif ($heureActuel > 20 OR $heureActuel < 7) {
        $tenue = 'Pyjama';
    } else
    {
        $tenue = "Tenue d'école";
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

echo 'Jour : <strong>';
echo $jourActuel;
echo '</strong><br>';

echo 'Heure actuel : <strong>';
echo $heureActuel;
echo '</strong><br>';

echo '<h1>Tenue sera sera  <strong>';
echo  $tenue;
echo '</strong></h1>';

?>
<form action="">
    <select name="jourActuel" id="">
        <option value="">Choisir un jour</option>
        <option>Lundi</option>
        <option>Mardi</option>
        <option>Mercredi</option>
        <option>Jeudi</option>
        <option>Vendredi</option>
        <option>Samedi</option>
        <option>Dimanche</option>
    </select>
    <input type="text" name="heureActuel" placeholder="Heure actuel">

    <input type="submit" value="Envoyer">
</form>
</body>
</html>