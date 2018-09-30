<?php

namespace Framework;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];
    public function get($uri,$action)
    {
        $this->routes['GET'][$uri] = $action;
    }
    public function post($uri,$action)
    {
        $this->routes['POST'][$uri] = $action;
    }
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
//    private static $routes = [
//        'GET' => [],
//        'POST' => []
//    ];
//    public static function routes()
//    {
//        return self::$routes;
//    }
//    public static function define($routes)
//    {
//        self::$routes= $routes;
//    }
    public static function direct($uri = null)
    {
        if (!$uri) return 'app/controllers/tasks.php';
        if (array_key_exists($uri,self::$routes)) return self::$routes[$uri];
    }

}

