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

    public static function email_valide($email) {
        //La méthode filter_var peut servir à vérifier si une adresse mail est valide
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function mergeArrays($array1, $array2) {
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
echo "<a href='#'>Click me</a>";