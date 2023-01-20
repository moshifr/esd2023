<?php
    $notes = $_GET['notes'];

    $moyenne = 0;
    $nombreDeNotes = 0;

    if ($notes) {
        foreach (explode(',', $notes) as $note) {
            $nombreDeNotes = $nombreDeNotes + 1;
            $moyenne = $moyenne + $note;
        }
        $age = 15;

        $moyenne = $moyenne / $nombreDeNotes;
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

echo 'Notes : <strong>';
echo $notes;
echo '</strong><br>';


echo '<h1>Votre moyenne sera de  <strong>';
echo  $moyenne;
echo '</strong></h1>';

?>
<form action="">
    <input type="text" name="notes" placeholder="Notes séparés par des virgules">

    <input type="submit" value="Envoyer">
</form>
</body>
</html>