
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

    $a = 15;

    echo "<b>While :</b> <br><br>";
    // Boucle while
    while ($a < 20) {
        echo "a est : $a <br>";
        $a++;
    }

    ?>
</body>
</html>