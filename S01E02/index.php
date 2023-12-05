<?php

require "SomeClass.php";


#Question 1 : Change the PHP configuration so that it can take 8Mb of RAM per use, timeout at 60s, allow 50Mb of uploads and be in the "Europe/Paris" timezone. Check the configuration in CLI and in a webserver using phpinfo().

// Afficher la limite actuelle de mémoire pour voir si le changement est reflété
echo "Limite actuelle de la mémoire : " . ini_get('memory_limit') . "<br>";

// Afficher le temps d'exécution maximal pour voir si le changement est reflété
echo "Temps d'exécution maximal : " . ini_get('max_execution_time') . "<br>";

// Afficher la taille maximale des fichiers téléchargés pour voir si le changement est reflété
echo "Taille maximale des fichiers téléchargés : " . ini_get('upload_max_filesize') . "<br>";

// Afficher le fuseau horaire actuel pour voir si le changement est reflété
echo "Fuseau horaire actuel : " . ini_get('date.timezone') . "<br>";



#Question 2 : PHP basics again, using PHP integrated server, create a PHP script (with comments😏), called via HTTP


$class = new SomeClass();

/*
$class->isVowel('z');

$class->copie_google();

$class->generateImage();

$class->afficherHeader('https://example.com');
*/

$class->connectDBWithPDOAndCreateTable('localhost\\SQLDev', 'testSAE', 'sa', 'SaE123');

