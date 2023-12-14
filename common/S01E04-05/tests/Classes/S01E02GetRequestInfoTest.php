<?php

require_once __DIR__ . "/../../../S01E02/SomeClass.php";
use PHPUnit\Framework\TestCase;

class S01E02GetRequestInfoTest extends TestCase
{
    public function testGetRequestInfo()
    {
        $class = new SomeClass();
        $result = $class->getRequestInfo();

        $this->assertEquals(count($result), 4);
    }
}