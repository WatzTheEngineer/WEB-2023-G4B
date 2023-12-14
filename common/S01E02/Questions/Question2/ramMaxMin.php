
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
    $result = $class->getMemory();
    
    echo "Mémoire utilisé : " . $result['memory_used'] . "<br>";
    echo "Limite actuelle de la mémoire : " . $result['memory_limit'] . "<br>";
    
    ?>
</body>
</html>