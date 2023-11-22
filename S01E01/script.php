<?php

// QUESTION 1 ===========

$nom_fichier = "foo.txt";
// On ouvre le fichier en écriture en mode ajout (a)
$fichier = fopen($nom_fichier, 'ab+') or
die("Ouverture de $nom_fichier impossible");
// On choisit le texte à écrire dans le fichier
$text = "Bonjour monde !\n";

// On écrit dans le fichier
fwrite($fichier, $text);
// On ferme le fichier
fclose($fichier);

// QUESTION 2 ===========

// On crée un tableau $tab
$tab = array();
// On tente de remplir le tableau avec des valeurs aléatoires entre 0 et 1000
try {
    $tab = array_fill(0, 1000, random_int(0, 1000));
} catch (Exception $e) {
    // On affiche un message si une erreur apparait
    echo "Erreur lors du remplissage du tableau";
}
// On trie le tableau par clés
ksort($tab);
// On trie le tableau par valeurs en gardant les associations d'index
// (Trie par ordre ascendant)
asort($tab);
// On affiche le tableau sous la forme []=>int()
var_dump($tab);
// On affiche la dernière valeur du tableau pour effectuer une vérification
echo $tab[999];

// QUESTION 3 ===========

// On déclare une variable $a contenant le nombre 10
$a = 10;
// On déclare une variable $b contenant la chaine "10"
$b = "10";

// On affiche les résultat de la comparaison $a == $b
/** @noinspection TypeUnsafeComparisonInspection */
echo("a == b : " . ($a == $b));

// On affiche les résultats de la comparaison $a === $b
/** @noinspection PhpStrictComparisonWithOperandsOfDifferentTypesInspection */
echo("a === b : " . ($a === $b));

// On affiche les résultats de la comparaison $a <=> $b
echo("a <=> b : " . ($a <=> $b));

// On assigne la valeur 20
$b = 20;

echo("a++ : " . ($a++));
echo("++a : " . (++$a));
echo("a-- : " . ($a--));
echo("--a : " . (--$a));
echo("a || b : " . ($a || $b));
echo("a && b : " . ($a && $b));