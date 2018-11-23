<?php

namespace App\Core;

class Router
{
    
    /* All registered routes.  */

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    /* Load a user's routes file.*/

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    /* Register a GET route.*/

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /* Register a POST route.*/

    public function post($uri, $controller)
    {
        // ovo je zbog rute /war/$i jer ima 5 pitanja
        //hardcodirano je al za potrebe ovog task-a
        if ( $controller == 'GameController@index') {
            $i=1;
            while ($i < 6) {
                $this->routes['POST'][$uri."{$i}"]= $controller;
                $i++;
            }
        }
        $this->routes['POST'][$uri] = $controller;
    }

    /* Load the requested URI's associated controller method.  */

    public function direct($uri, $requestType)
    {

        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No route defined for this URI.');
    }

    /*  Load and call the relevant controller action */

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }
}
