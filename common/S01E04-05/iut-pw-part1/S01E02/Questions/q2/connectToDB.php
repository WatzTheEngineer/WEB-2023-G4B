<?php

require "../../SomeClass.php";

$class = new SomeClass();
$class->connectDBWithPDOAndCreateTable('localhost\\SQLDev', 'testSAE', 'sa', 'SaE123');