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

        // -> pour appeler la méthode non statique
        echo $x->capitalizeString("En smörgås tack !<br>");
        echo $x->capitalizeString("HèllÖ Wôrld<br>");
    ?>
</body>
</html>