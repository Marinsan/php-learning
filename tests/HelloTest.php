<?php


use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld ()
    {
        require('../hello.php');
        $this->expectOutputString('hola mon');
    }
    public function testMyFunction() {
//        include_once 'path/to/script.php';
//        $result = someFunction();
//
//        $this->assertEquals('expected result', $result);
    }
}

