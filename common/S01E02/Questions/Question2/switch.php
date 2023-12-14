

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

    if($class->isVowelSwitch('a')) echo "a is a Voyel";
    else echo "a is not a Voyel";

    echo "<br>";

    if($class->isVowelSwitch('b')) echo "b is a Voyel";
    else echo "b is not a Voyel";

    ?>
</body>
</html>