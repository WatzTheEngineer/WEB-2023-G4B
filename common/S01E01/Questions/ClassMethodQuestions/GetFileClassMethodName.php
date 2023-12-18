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
        use S01E01\FirstClass;
        require "../../Classes/FirstClass.php";
        $x = new FirstClass(); //Créer un objet basé sur la classe FirstClass

        //On récupère le nom du fichier, de la classe, et de la méthode
        $result = $x->getMethodInfo();
        var_dump($result);
        echo "<br>";
        echo "curent file name : ".$result['file']." current class name : " . $result['class'] . " current method : " .$result['method'];
        echo "<br>";
    ?>
</body>
</html>