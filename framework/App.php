<?php

namespace Framework;

class App {
    private static $registry = [];
    public static function bind($key,$value)
    {
        static::$registry[$key] = $value;
    }
    public function get($key){
        if (!array_key_exists($key,static::$registry)) throw new Exception("No $key found in registry");
        return static::$registry[$key];
    }
}
