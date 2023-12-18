<?php

use PW\Class\B;
use PW\Class\A;

spl_autoload_register(function ($namespace) {

    /**
     * explication autoloader:
     * moyen de charger de manière automatique un fichier chaque fois qu'un namespace est manquant.
     * le preg_match va essayer de rechercher des namespaces passé via un USE. 
     * Si il n'est pas trouvé alors l'autoloader va chercher à l'inclure en utilisant INCLUDE.
     * 
     */
    preg_match('/PW\\\\(?:Class|Trait|Interface)\\\\([^\\\\]+)/', $namespace, $resultats);
    
    if(!empty($resultats[1])) {
        include($resultats[1] . '.php');
    }

    // var_dump($namespace, $resultats); exit;

});

$la_classe_b = new B('B');
echo ("<br>".$la_classe_b);
echo("<br>");
echo(B::helloMethod());
echo("<br>");

echo ((new A('A'))->hello());

$la_classe_a = new A('A');
$la_classe_a->displayCountTo10();
