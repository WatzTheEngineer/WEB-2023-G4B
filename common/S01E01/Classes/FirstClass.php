<?php

namespace S01E01;

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

    function elementOfFirstArrayWhereNotInThe2nd (array $array1, array $array2): array
    {
        $array3 = array();
        foreach ($array1 as $key => $value) {
            if (!(in_array($value, $array2))) {
                $array3[] = $value;
            }
        }
        return $array3;
    }

    function TitleCaseElements($tableauOriginal) {
        return array_map(function ($valeur) {
            // Vérifier si la valeur est une chaîne
            // Convertir la chaîne en title case
            if (is_string($valeur)) return ucwords(strtolower($valeur));
            // Si ce n'est pas une chaîne, retourner la valeur d'origine
            else return $valeur;
        }, $tableauOriginal);
    }

    function reverseString($string) {
        $reverseString = fn($input) => implode('', array_reverse(preg_split('//u', $input)));
        return $reverseString($string);
    }

    function isParameterEmpty($param) {
        return empty($param) ? 'Parametre vide' : "Parametre n'est pas vide";
    }

    /**
    * @throws Exception
    */
    function valueMustBeInfThan3($number): void
    {
        if ($number >=3){
            throw new Exception("La valeur doit être inférieure ou égale à 3");
        }
    }
}

