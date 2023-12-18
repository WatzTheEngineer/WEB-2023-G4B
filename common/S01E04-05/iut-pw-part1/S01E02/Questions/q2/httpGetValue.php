<?php

require "../../SomeClass.php";

$class = new SomeClass();
$testValue = $class->getTest();

echo "Value of 'test': " . ($testValue !== null ? $testValue : 'null');