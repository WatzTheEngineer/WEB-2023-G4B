<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Page</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
    <?php

        // On déclare une variable $a contenant le nombre 10
        $a = 10;

        // On déclare une variable $b contenant la chaine "10"
        $b = "10";

        // On affiche les résultat de la comparaison $a == $b
        echo("<br>(a=" . $a . ", b='" . $b . "') a == b : " . ($a == $b) . "<br>");

        // On affiche les résultats de la comparaison $a === $b
        echo("<br>(a=" . $a . ", b='" . $b . "') a === b : " . ($a === $b) . "<br>");

        // On affiche les résultats de la comparaison $a <=> $b
        echo("<br>(a=" . $a . ", b='" . $b . "') a <=> b : " . ($a <=> $b) . "<br>");

        // On assigne la valeur 20
        $b = 20;

        // Post-incrémente $a et affiche le résultat
        echo("<br>(a=" . $a . ", b=" . $b . ") a++ : " . ($a++) . "<br>");

        // Pré-incrémente $a et affiche le résultat
        echo("<br>(a=" . $a . ", b=" . $b . ") ++a : " . (++$a) . "<br>");

        // Post-décrémente $a et affiche le résultat
        echo("<br>(a=" . $a . ", b=" . $b . ") a-- : " . ($a--) . "<br>");

        // Pré-décrémente $a et affiche le résultat
        echo("<br>(a=" . $a . ", b=" . $b . ") --a : " . (--$a) . "<br>");

        // Opération OU logique entre $a et $b, affiche le résultat
        echo("<br>(a=" . $a . ", b=" . $b . ") a || b : " . ($a || $b) . "<br>");

        // Opération ET logique entre $a et $b, affiche le résultat
        echo("<br>(a=" . $a . ", b=" . $b . ") a && b : " . ($a && $b) . "<br>");

        // Opération ET bit à bit entre $a et $b, affiche le résultat
        echo("<br>(a=" . $a . ", b=" . $b . ") a & b : " . ($a & $b) . "<br>");

        // Opération OU bit à bit entre $a et $b, affiche le résultat
        echo("<br>(a=" . $a . ", b=" . $b . ") a | b : " . ($a | $b) . "<br>");

        // Opérateur de fusion null, affiche le résultat de $a s'il n'est pas nul, sinon affiche $b
        echo("<br>(a=" . $a . ", b=" . $b . ") a ?? b : " . ($a ?? $b) . "<br>");

        // Opérateur ternaire, affiche le résultat de $a s'il est vrai, sinon affiche $b
        echo("<br>(a=" . $a . ", b=" . $b . ") a ?: b : " . ($a ?: $b) . "<br>");

    ?>
</body>
</html>