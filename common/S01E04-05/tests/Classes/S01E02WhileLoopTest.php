<?php

require_once __DIR__ . "/../../../S01E02/SomeClass.php";
use PHPUnit\Framework\TestCase;

class S01E02WhileLoopTest extends TestCase
{
    public function testWhileLoop()
    {
        $class = new SomeClass();
        $number = 5;
        $result = $class->whileLoop($number);
        print($result);
        $this->assertEquals($result, '0<br>1<br>2<br>3<br>4<br>');
    }
}