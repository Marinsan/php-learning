<?php

namespace Framework\Database;

class Connection {
    public static function connect()
    {
        $database = config('database');
        try {
            //return new PDO('mysql:host=127.0.0.1;dbname=php_learning', 'debian-sys-maint', 'h3vBPc4hwZa3734t');
            return new PDO($database['type'] . ':host=' . $database['host'] . ';dbname=' . $database['name'], $database['username'], $database['password']);
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}
