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

        // Tableau d'exemple
        $tableauOriginal = array('pomme', 'banane', 'cerise', 'poire', 'datte', 'KIWI');

        // Appliquer la fonction personnalisée au tableau
        $tableauModifie = $x->TitleCaseElements($tableauOriginal);

        // Afficher le tableau original et modifié
        echo "Tableau d'origine : ";
        print_r($tableauOriginal);

        echo("<br>");

        echo "Tableau modifié (Title Case) : ";
        print_r($tableauModifie);

    ?>
</body>
</html>