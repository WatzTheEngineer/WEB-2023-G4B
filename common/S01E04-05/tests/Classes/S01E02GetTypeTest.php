<?php

require_once __DIR__ . "/../../../S01E02/SomeClass.php";
use PHPUnit\Framework\TestCase;

class S01E02GetTypeTest extends TestCase
{
    public function testGetType()
    {
        $class = new SomeClass();
        $param1 = 42;
        $type1 = $class->getType($param1);

        $this->assertEquals($type1, 'integer'); // Use 'int' as a string
    }
}