<?php


namespace Delight\Singleton\Tests;

use Delight\Singleton\Exceptions\NonConstructableException;
use Delight\Singleton\NotConstructable;
use Delight\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class NotConstructableTest extends TestCase
{
    public function test_it_can_construct_the_singleton_even_if_not_constructable()
    {
        $this->assertInstanceOf(NotConstructableSingleton::class, NotConstructableSingleton::getInstance());
    }

    public function test_it_can_not_construct_the_object()
    {
        $this->expectException(\Error::class);

        new NotConstructableClass();
    }
}

class NotConstructableClass
{
    use NotConstructable;
}

class NotConstructableSingleton
{
    use NotConstructable, Singleton;
}
