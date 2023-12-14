
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Page</title>
    <link rel="stylesheet" href="../../../../css/style.css">
</head>
<body>
<?php

    // Assignation de valeurs à $c et $d
    $c = 10;
    $d = 20;

    echo "<b>Ternaire :</b> <br><br>";

    // Affichage de la valeur de $c avec opérateur de coalescence null
    echo "La valeur de c est : " . ($c ?? $d);

    // Assignation de valeurs à $e et $f
    $e = null;
    $f = 20;

    // Affichage de la valeur de $e avec opérateur ternaire
    echo "<br>La valeur de e est : " . ($e ?: $f);
    ?>
</body>
</html>