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

        try {
            $x->valueMustBeInfThan3(2);
            //Si $number est inférieur à 3 alors pas d'exception
            echo "La valeur est inférieur à  3";
        }
        //si le nombre est supérieur oou égale à 3 alors le message d'erreur est écrit
        catch(Exception $e) {
            echo 'Error : ' . "<br>";
            echo $e->getMessage();
        }

        echo "<br>";
        echo "<br>";

        try {
            $x->valueMustBeInfThan3(4);
            //Si $number est inférieur à 3 alors pas d'exception
            echo "La valeur est inférieur à  3";
        }
        //si le nombre est supérieur oou égale à 3 alors le message d'erreur est écrit
        catch(Exception $e) {
            echo 'Error : ' . "<br>";
            echo $e->getMessage();
        }

    ?>
</body>
</html>