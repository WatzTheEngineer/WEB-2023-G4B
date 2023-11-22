<?php

namespace LP\S01E01;

class FirstClass
{
    // Encode ta chaine en UTF-8
    public function capitalizeString($inputString): string
    {
        return mb_strtoupper($inputString, 'UTF-8');
    }

    // Permet de transformer l'HTML en une string
    public function escapeHtml($inputString): string
    {
        return htmlspecialchars($inputString, ENT_QUOTES, 'UTF-8');
    }

    public static function arrayToString($array) {
        return implode(", ", $array);
    }

    public function email_valide($email) {
        //La méthode filter_var peut servir à vérifier si une adresse mail est valide
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    function dernierCaractere($maChaine) {
        if (!empty($maChaine)) {
            $dernierCaractere = substr($maChaine, -1);
            echo "Le dernier caractère de la chaîne est : " . $dernierCaractere;
        } else {
            echo "La chaîne est vide.";
        }
    }

    public function mergeArrays($array1, $array2) {
        return $array1 + $array2;
    }

}

$x = new FirstClass();

// -> pour appeler la méthode non statique
echo $x->capitalizeString("En smörgås tack !<br>");
echo $x->capitalizeString("HèllÖ Wôrld<br>");

// On test avec des balises html dans la chaine
echo $x->escapeHtml( ("<a>Click me</a>"));
echo "<br>";
echo "<a href='#'>Click me</a><br>";

// On test avec un tableau de chaine et nombres
echo $x->arrayToString(['Test','de',1,2,3]);
echo "<br>";

$mailinvalide = "email/pas@valide";
if($x->email_valide($mailinvalide)){
    echo "$mailinvalide est un mail valide<br>";
} else{
    echo "$mailinvalide n'est pas un mail valide<br>";
}

$mailvalide = "petitmail@sympa.fr";
if($x->email_valide($mailvalide)){
    echo "$mailvalide est un mail valide<br>";
} else{
    echo "$mailvalide n'est pas un mail valide<br>";
}

$mot = "chats";
$x->dernierCaractere($mot);

echo "<br>";

$t1 = [1,2,3];
$t2 = [4,5];
var_dump($x->mergeArrays($t1,$t2));

