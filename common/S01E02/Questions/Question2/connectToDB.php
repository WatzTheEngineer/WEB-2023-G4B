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

    require "../../SomeClass.php";

    $class = new SomeClass();

    $result = $class->connectDBWithPDOAndCreateTable();

    echo "<br>Table :";
    echo "<br><br>" . $result;

    ?>
</body>
</html>