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

        //On teste avec un mail invalide
        $mailinvalide = "email/pas@valide";
        if ($x->email_valide($mailinvalide)) {
            echo "$mailinvalide est un mail valide<br>";
        } else {
            echo "$mailinvalide n'est pas un mail valide<br>";
        }

        //On teste avec un mail valide
        $mailvalide = "petitmail@sympa.fr";
        if ($x->email_valide($mailvalide)) {
            echo "$mailvalide est un mail valide<br>";
        } else {
            echo "$mailvalide n'est pas un mail valide<br>";
        }
    ?>
</body>
</html>