<?php

namespace App\Core;

class Request
{
    /*Fetch the request URI. */
    
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    /* Fetch the request method.*/

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
