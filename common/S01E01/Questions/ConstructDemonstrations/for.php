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


    echo "<b>For :</b> <br><br>";
    // Boucle for pour afficher les valeurs de 0 à 4
    for ($i = 0; $i < 5; $i++) {
        echo "- La valeur est : $i <br>";
    }

    ?>
</body>
</html>