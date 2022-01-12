<?php

namespace App\Tests;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
  public function testHelloWorldTest(): void {
    $test = new HelloWorld();
    $result = $test->hello();
    $this->assertEquals('Hello World!', $result);
  }
}
