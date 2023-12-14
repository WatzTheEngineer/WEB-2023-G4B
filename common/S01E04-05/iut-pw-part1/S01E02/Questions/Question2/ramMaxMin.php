<?php

require "../../SomeClass.php";

$class = new SomeClass();
$result = $class->getMemory();

echo "Mémoire utilisé : " . $result['memory_used'] . "<br>";
echo "Limite actuelle de la mémoire : " . $result['memory_limit'] . "<br>";