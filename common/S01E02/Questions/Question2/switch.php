<?php

require "../../SomeClass.php";

$class = new SomeClass();

if($class->isVowelSwitch('a')) echo "a is a Voyel";
else echo "a is not a Voyel";

echo "<br>";

if($class->isVowelSwitch('b')) echo "b is a Voyel";
else echo "b is not a Voyel";
