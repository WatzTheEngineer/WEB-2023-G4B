<?php

require_once __DIR__ . "/../../../S01E02/SomeClass.php";
use PHPUnit\Framework\TestCase;

class S01E02ramMinMaxTest extends TestCase
{
    public function testGetMemoryReturnValues()
    {
        $class = new SomeClass();
        $result = $class->getMemory();

        $resultsAreNotNull=$result['memory_used'] != null && $result['memory_limit'] != null;

        $this->assertEquals($resultsAreNotNull, true);
    }
}