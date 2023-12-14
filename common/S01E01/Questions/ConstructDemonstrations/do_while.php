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

    $b = 15;

    echo "<b>Do-While :</b> <br><br>";
    // Boucle do-while
    do {
        echo "b est : $b <br>";
        $b--;
    } while ($b > 10);
    echo "b est : $b <br>";

    ?>
</body>
</html>