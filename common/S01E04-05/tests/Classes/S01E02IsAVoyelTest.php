<?php

require_once __DIR__ . "/../../../S01E02/SomeClass.php";
use PHPUnit\Framework\TestCase;

class S01E02IsAVoyelTest extends TestCase
{
    public function testShouldReturnTrue()
    {
        $class = new SomeClass();
        $letter = 'a';
        $result = $class->isVowelSwitch($letter);

        $this->assertEquals($result, true);
    }

    public function testShouldReturnFalse()
    {
        $class = new SomeClass();
        $letter = 'b';
        $result = $class->isVowelSwitch($letter);

        $this->assertEquals($result, false);
    }
}