


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

    $param1 = 42;
    $param2 = "Hello World";
    $param3 = ['apple', 'orange', 'banana'];

    $type1 = $class->getType($param1);
    $type2 = $class->getType($param2);
    $type3 = $class->getType($param3);

    echo "Type of " . $param1 . " : " . $type1 . "<br>";
    echo "Type of '" . $param2 . "' : " . $type2 . "<br>";
    echo "Type of ['apple', 'orange', 'banana'] : " . $type3 . "<br>";

    ?>
</body>
</html>