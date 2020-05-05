<?php

namespace Delight\Singleton\Tests;

use Delight\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function test_get_instance_returns_the_same_instance()
    {
        $someClass = SomeClass::getInstance();

        $this->assertInstanceOf(SomeClass::class, $someClass);
    }

    public function test_instance_is_the_same()
    {
        $id = SomeClass::getInstance()->getId();
        $id2 = SomeClass::getInstance()->getId();

        $this->assertEquals($id, $id2);
    }
}

class SomeClass
{
    use Singleton;

    private string $id;

    public function __construct()
    {
        $this->id = uniqid();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
