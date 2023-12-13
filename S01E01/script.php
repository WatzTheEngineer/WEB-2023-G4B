<?php

// QUESTION 1 ===========

use LP\S01E01\FirstClass;

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

echo "Une ligne a été ajoutée dans le fichier $nom_fichier <br>";

// QUESTION 2 ===========

// On crée un tableau $tab
$tab = array();
// On tente de remplir le tableau avec des valeurs aléatoires entre 0 et 1000
try {
    $tab = array_fill(0, 1000, random_int(0, 1000));
} catch (Exception $e) {
    // On affiche un message si une erreur apparait
    echo "Erreur lors du remplissage du tableau <br>";
}
// On trie le tableau par clés
ksort($tab);
// On trie le tableau par valeurs en gardant les associations d'index
// (Trie par ordre ascendant)
asort($tab);
// On affiche le tableau sous la forme []=>int()
echo "var_dump(\$tab) pour afficher tout le tableau <br>";
// On affiche la dernière valeur du tableau pour effectuer une vérification
echo $tab[999] + " est la 999 valeur du tableau <br>";

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

// Post-incrémente $a et affiche le résultat
echo("a++ : " . ($a++) . "<br>");

// Pré-incrémente $a et affiche le résultat
echo("++a : " . (++$a) . "<br>");

// Post-décrémente $a et affiche le résultat
echo("a-- : " . ($a--) . "<br>");

// Pré-décrémente $a et affiche le résultat
echo("--a : " . (--$a) . "<br>");

// Opération OU logique entre $a et $b, affiche le résultat
echo("a || b : " . ($a || $b) . "<br>");

// Opération ET logique entre $a et $b, affiche le résultat
echo("a && b : " . ($a && $b) . "<br>");

// Opération ET bit à bit entre $a et $b, affiche le résultat
echo("a & b : " . ($a & $b) . "<br>");

// Opération OU bit à bit entre $a et $b, affiche le résultat
echo("a | b : " . ($a | $b) . "<br>");

// Opérateur de fusion null, affiche le résultat de $a s'il n'est pas nul, sinon affiche $b
echo("a ?? b : " . ($a ?? $b) . "<br>");

// Opérateur ternaire, affiche le résultat de $a s'il est vrai, sinon affiche $b
echo("a ?: b : " . ($a ?: $b) . "<br>");

// QUESTION 4 ===========

// Déclaration d'un tableau
$arr = array(1, 2, 3, 4, 5);

// Parcours du tableau avec foreach et affichage des valeurs
echo "foreach : <br>";
foreach ($arr as $value) {
    echo "La valeur est : $value <br>";
}

echo "for : <br>";
// Boucle for pour afficher les valeurs de 0 à 4
for ($i = 0; $i < 5; $i++) {
    echo "La valeur est : $i <br>";
}

echo "if-elseif-else : <br>";
// Structure conditionnelle if-elseif-else
if ($a == $b) {
    echo "a est égal à b";
} elseif ($a < $b) {
    echo "a est inférieur à b";
} else {
    echo "a est supérieur à b";
}

echo "<br>while : <br>";
// Boucle while
while ($a < 20) {
    echo "a est : $a <br>";
    $a++;
}

echo "do-while <br>";
// Boucle do-while
do {
    echo "b est : $b <br>";
    $b--;
} while ($b > 10);

// Assignation de valeurs à $c et $d
$c = 10;
$d = 20;

// Affichage de la valeur de $c avec opérateur de coalescence null
echo "La valeur de c est : " . ($c ?? $d);

// Assignation de valeurs à $e et $f
$e = null;
$f = 20;

// Affichage de la valeur de $e avec opérateur ternaire
echo "<br>La valeur de e est : " . ($e ?: $f);