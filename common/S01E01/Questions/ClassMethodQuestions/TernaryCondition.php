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

        //Retourne si une variable est vide avec une condition ternaire
        $var = "coucou";
        $var2 = "";

        $result1 = $x->isParameterEmpty($var);
        $result2 = $x->isParameterEmpty($var2);

        echo "variable : " . $var . "<br>" . $result1;
        echo "<br>";
        echo "<br>";
        echo "variable : " . $var2 . "<br>" . $result2;

    ?>
</body>
</html>