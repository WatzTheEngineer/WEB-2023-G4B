<?php

// Afficher la limite actuelle de mémoire pour voir si le changement est reflété
echo "Limite actuelle de la mémoire : " . ini_get('memory_limit') . "<br>";

// Afficher le temps d'exécution maximal pour voir si le changement est reflété
echo "Temps d'exécution maximal : " . ini_get('max_execution_time') . "<br>";

// Afficher la taille maximale des fichiers téléchargés pour voir si le changement est reflété
echo "Taille maximale des fichiers téléchargés : " . ini_get('upload_max_filesize') . "<br>";

// Afficher le fuseau horaire actuel pour voir si le changement est reflété
echo "Fuseau horaire actuel : " . ini_get('date.timezone') . "<br>";