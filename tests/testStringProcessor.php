<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:52 PM
 */
namespace Elminson\StringProcessor;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class testStringProcessor extends TestCase
{

    /**
     *
     */
    function testFirstTestCase()
    {
        $stringprocessor = new StringProcessor();
        $this->assertEquals("helloWorld", $stringprocessor->toCamelCase("hello_world"));
        $this->assertEquals("helloWorld", $stringprocessor->toCamelCase("hello-world"));
        $this->assertEquals("helloWorld", $stringprocessor->toCamelCase("hello-World"));
        $this->assertEquals("HelloWorld", $stringprocessor->toCamelCase("Hello_world"));
        $this->assertEquals("HelloWorld", $stringprocessor->toCamelCase("Hello_World"));
        $this->assertEquals("HelloWorld", $stringprocessor->toCamelCase("Hello-world"));
        $this->assertEquals("HelloWorld", $stringprocessor->toCamelCase("Hello-World"));
    }

}
