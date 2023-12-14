<?php

require "../../SomeClass.php";

$class = new SomeClass();

$array = [1,2,3,4,5,6];
echo $class->doLoop($array);