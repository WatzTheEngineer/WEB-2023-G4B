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
    $testValue = $class->getTest();

    echo "Value of 'test': " . ($testValue !== null ? $testValue : 'null');

    ?>
</body>
</html>