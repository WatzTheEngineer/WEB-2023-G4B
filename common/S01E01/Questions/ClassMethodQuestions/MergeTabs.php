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

        //On crée 2 tableaux
        $array1 = array('a' => 1, 'b' => 2, 'c' => 3);
        $array2 = array('d' => 4, 'e' => 5, 'f' => 6);

        //On combine les deux tableaux en préservant les clés
        $mergedArray = $x->mergeArraysPreserveKeys($array1, $array2);
        var_dump($mergedArray);
    ?>
</body>
</html>