<?php

namespace Delight\Singleton\Tests;

use Delight\Singleton\Exceptions\NonCloneableException;
use Delight\Singleton\NotCloneable;
use PHPUnit\Framework\TestCase;

class NotCloneableTest extends TestCase
{
    public function test_it_can_not_clone_the_object()
    {
        $some = new NotCloneableClass();

        $this->expectException(NonCloneableException::class);
        $this->expectExceptionMessage(
            sprintf('The object [%s] can not be cloned.', NotCloneableClass::class)
        );

        clone $some;
    }
}

class NotCloneableClass
{
    use NotCloneable;
}
