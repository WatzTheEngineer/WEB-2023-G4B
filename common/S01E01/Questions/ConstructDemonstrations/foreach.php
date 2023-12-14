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

        // Déclaration d'un tableau
        $arr = array(1, 2, 3, 4, 5);

        // Parcours du tableau avec foreach et affichage des valeurs
        echo "<b>Foreach :</b> <br><br>";
        foreach ($arr as $value) {
            echo "- La valeur est : $value <br>";
        }

        ?>
</body>
</html>