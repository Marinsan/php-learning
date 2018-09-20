<?php
use PHPUnit\Framework\TestCase;
class HelloWorldWebTest extends TestCase
{
    public function testHelloWorld ()
    {
        require('../index.php');
        $this->expectOutputString('Hola mon');
//        $this->expectOutputRegex()
//        $this->assertTrue($this->have('Hola mon', $this->));
    }
//     returns true if $needle is a substring of $haystack
    protected function have($needle, $haystack)
    {
        return strpos($haystack, $needle) !== false;
    }
}

