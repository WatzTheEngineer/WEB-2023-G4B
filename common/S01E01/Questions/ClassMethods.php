<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Page</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
    <?php

        require "../Classes/FirstClass.php";

        $x = new FirstClass(); //Créer un objet basé sur la classe FirstClass

        // -> pour appeler la méthode non statique
        echo $x->capitalizeString("En smörgås tack !<br>");
        echo $x->capitalizeString("HèllÖ Wôrld<br>");

        // On teste avec des balises html dans la chaine
        echo $x->escapeHtml(("<a>Click me</a>"));
        echo "<br>";
        echo "<a href='#'>Click me</a><br>";

        // On teste avec un tableau de chaine et nombres
        echo $x->arrayToString(['Test', 'de', 1, 2, 3]);
        echo "<br>";

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

        //On teste le dernier charactère du mot chats
        $mot = "chats";
        $x->dernierCaractere($mot);
        echo "<br>";

        //On crée 2 tableaux
        $array1 = array('a' => 1, 'b' => 2, 'c' => 3);
        $array2 = array('d' => 4, 'e' => 5, 'f' => 6);

        //On combine les deux tableaux en préservant les clés
        $mergedArray = $x->mergeArraysPreserveKeys($array1, $array2);
        var_dump($mergedArray);

        echo "<br>";

        //On récupère le nom du fichier, de la classe, et de la méthode
        $result = $x->getMethodInfo();
        var_dump($result);
        echo "<br>";
        echo "curent file name : ".$result['file']." current class name : " . $result['class'] . " current method : " .$result['method'];
        echo "<br>";

        //On crée une fonction anonyme qui inverse une chaine
        $reverseString = fn($input) => implode('', array_reverse(preg_split('//u', $input)));
        $inputString = "èçì...";

        $chaine = $reverseString($inputString);
        echo "chaine : $inputString <br>";
        echo "inversée : $chaine <br>";

        //On affiche la classe FirstClass (ceci utilise la méthode __toString)
        echo $x . "<br>";

        //On teste avec 4 chaines la méthode mergeString
        $result = $x->mergeStrings("Hello", ", ", "world", "!");
        echo "chaine mergée avec 4 chaines : $result <br>";

        //Retourne si une variable est vide avec une condition ternaire

        $var = "coucou";
        $var2 = "";
        echo "=======<br>CONDITION TERNAIRE : <br>";
        $result1 = empty($var) ? 'elle est vide'  :'elle n est pas vide';
        $result2 = empty($var2) ? 'elle est vide'  :'elle n est pas vide';
        echo $result1 . "<br>" . $result2 . "<br>" . "=======<br>";

        FirstClass::afficherNomsClasses();
        echo "<br>=======<br>";

        /**
         * @throws Exception
         */
        function throw_Exception($number): void
        {
            if ($number >=3){
                throw new Exception("Valeur inférieure ou égale à 3");
            }
        }

        try {
            throw_Exception(4);
            //Si $number est inférieur à 3 alors pas d'exception
            echo "La valeur est inférieur à  3";
        }

        //si le nombre est supérieur oou égale à 3 alors le message d'erreur est écrit
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

        echo "<br>=======<br>";

        $monTableau = array(
            'a' => 10,
            'b' => 20,
            'c' => 30
        );
        $resultat = $x->reverseSortedKeys($monTableau);
        echo "tableau rangé dans l'odre c-b-a : <br>";
        var_dump($resultat);
        echo "<br>=======<br>";
        $cc = $x->elementOfFirstArrayWhereNotInThe2nd(["a","b","c"], ["a","c"] );
        echo("éléments du premier tableau qui ne sont pas dans le second : " . print_r($cc, true));
        echo "<br>=======<br>";

        // Fonction personnalisée pour convertir une chaîne en title case
        function convertirEnTitleCase($valeur) {
            // Vérifier si la valeur est une chaîne
            if (is_string($valeur)) {
                // Convertir la chaîne en title case
                return ucwords(strtolower($valeur));
            } else {
                // Si ce n'est pas une chaîne, retourner la valeur d'origine
                return $valeur;
            }
        }

        // Tableau d'exemple
        $tableauOriginal = array('pomme', 'banane', 'cerise', 'poire', 'datte', 'KIWI');

        // Appliquer la fonction personnalisée au tableau
        $tableauModifie = array_map('convertirEnTitleCase', $tableauOriginal);

        // Afficher le tableau original et modifié
        echo "Tableau d'origine : ";
        print_r($tableauOriginal);

        echo "Tableau modifié (Title Case) : ";
        print_r($tableauModifie);

        echo "<br>=======<br>";
    ?>
</body>
</html>