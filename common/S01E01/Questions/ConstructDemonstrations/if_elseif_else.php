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

    $a = 14;
    $b = 16;

    echo "<b>If-ElseIf-Else :</b> <br><br>";
    // Structure conditionnelle if-elseif-else
    if ($a == $b) {
        echo "a est égal à b";
    } elseif ($a < $b) {
        echo "a est inférieur à b";
    } else {
        echo "a est supérieur à b";
    }

    ?>
</body>
</html>