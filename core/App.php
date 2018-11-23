<?php

namespace App\Core;

class App
{
    
    /* All registered keys.*/

    protected static $registry = [];

    /* Bind a new key/value into the container.*/

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /* Retrieve a value from the registry.*/

    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container.");
        }

        return static::$registry[$key];
    }
}
