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

        // On crée un tableau $tab
        $tab = array();

        try {
            // On tente de remplir le tableau avec des valeurs aléatoires entre 0 et 1000
            $tab = array();

            for ($i = 0; $i < 1000; $i++) {
                $tab[$i] = random_int(0, 1000);
            }
        } catch (Exception $e) {
            // On affiche un message si une erreur apparait
            echo "Erreur lors du remplissage du tableau <br>";
        }

        // On affiche le tableau sous la forme []=>int()
        echo "var_dump(\$tab) pour afficher tout le tableau <br>";

        // On trie le tableau par clés
        ksort($tab);

        $firstPairKey = key($tab);
        $firstPairValue = reset($tab);

        echo "<br>Après avoir trié par clés : <br>";
        echo "La première paire de valeurs après le tri par valeur : Key=$firstPairKey, Value=$firstPairValue <br>";

        // On trie le tableau par valeurs en gardant les associations d'index
        // (Trie par ordre ascendant)
        asort($tab);

        $firstPairKey = key($tab);
        $firstPairValue = reset($tab);

        echo "<br>Après avoir trié par valeurs : <br>";
        echo "La première paire de valeurs après le tri par valeur : Key=$firstPairKey, Value=$firstPairValue <br>";

    ?>
</body>
</html>