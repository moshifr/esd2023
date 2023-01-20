<?php
    $age = $_GET['age'];

    $montant = 15;

    if ($age >= 18) {
        $montant = 25;
    }
    elseif ($age < 3) {
        $montant = 0;
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

echo 'AGE : <strong>';
echo $age;
echo '</strong><br>';


echo '<h1>Le prix sera <strong>';
if ($montant == 0) {
    echo 'gratuit';
} else {
    echo $montant;
}
echo '</strong></h1>';

?>
<form action="">
    <input type="text" name="age" placeholder="Age">

    <input type="submit" value="Envoyer">
</form>
</body>
</html>