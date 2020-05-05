<?php


namespace Delight\Singleton;

use Delight\Singleton\Exceptions\NonConstructableException;

trait NotConstructable
{
    protected function __construct()
    {
    }
}
