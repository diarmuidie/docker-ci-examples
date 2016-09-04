<?php

namespace Diarmuidie\Test;

use PHPUnit\Framework\TestCase;
use Diarmuidie\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testGreeting()
    {
        $helloWorld = new HelloWorld();
        $this->assertEquals('Hello World!', $helloWorld->greet());
    }
}
