<?php

namespace Delight\Singleton;

use Delight\Singleton\Exceptions\NonCloneableException;

trait NotCloneable
{
    /**
     * @throws NonCloneableException
     */
    public function __clone()
    {
        throw new NonCloneableException(
            sprintf('The object [%s] can not be cloned.', get_class($this))
        );
    }
}
