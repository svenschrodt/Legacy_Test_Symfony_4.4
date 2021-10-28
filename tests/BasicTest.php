<?php

namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
 

class BasicTest extends  WebTestCase
{
    public function testFoo()
    {
        $foo = new \stdClass();
        $this->assertInstanceOf(\stdClass::class, $foo);
    }

     
}