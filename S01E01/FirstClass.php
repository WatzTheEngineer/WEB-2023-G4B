<?php

namespace LP\S01E01;

use Exception;

class FirstClass
{
    // Encode ta chaine en UTF-8
    public static function arrayToString($array): string
    {
        return implode(", ", $array);
    }

    // Permet de transformer l'HTML en une string

    public function capitalizeString($inputString): string
    {
        return mb_strtoupper($inputString, 'UTF-8');
    }

    public function escapeHtml($inputString): string
    {
        return htmlspecialchars($inputString, ENT_QUOTES, 'UTF-8');
    }

    public function email_valide($email): bool
    {
        //La méthode filter_var peut servir à vérifier si une adresse mail est valide
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    //Affiche le dernier charactère de la chaine
    function dernierCaractere($maChaine): void
    {
        if (!empty($maChaine)) {
            $dernierCaractere = substr($maChaine, -1);
            echo "Le dernier caractère de la chaîne est : " . $dernierCaractere;
        } else {
            echo "La chaîne est vide.";
        }
    }

    function mergeArraysPreserveKeys($array1, $array2) {
        return $array1 + $array2;
    }

    function getMethodInfo(): array
    {
        return [
            'file'   => __FILE__,
            'class'  => __CLASS__,
            'method' => __METHOD__
        ];
    }

    public function __toString() {
        return "Je suis une instance de la classe FirstClass";
    }

    //Combine un nombre non défini à l'avance de chaines
    function mergeStrings(): string
    {
        $args = func_get_args();    //récupérer les X arguments
        return implode('', $args);
    }

    public static function afficherNomsClasses(): void
    {
        // Imprime le nom complet de la classe avec son espace de noms
        echo __CLASS__ . PHP_EOL;

        // Utilise ::class pour imprimer le nom de la classe uniquement
        echo self::class . PHP_EOL;
    }

    function reverseSortedKeys($array): array
    {
        // Obtient un tableau contenant toutes les clés du tableau donné
        $keys = array_keys($array);

        // Trie les clés en ordre inverse (du plus grand au plus petit)
        rsort($keys);

        return $keys;
    }

}

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