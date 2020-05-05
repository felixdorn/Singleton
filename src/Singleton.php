<?php


namespace Delight\Singleton;

trait Singleton
{
    private static $uniqueInstance = null;

    public static function getInstance(): self
    {
        if (self::$uniqueInstance === null) {
            self::$uniqueInstance = new self;
        }

        return self::$uniqueInstance;
    }
}
