<?php

namespace App\Framework\Database;

use PDO;

class QueryBuilder
{
    public static function fetchAll($connection, $table)
    {
        $statement = $connection->prepare("SELECT * FROM $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    static function insert($pdo,$table,$cols){
        $sql = sprintf('INSERT INTO %s(%s) VALUES (%s)',$table, implode(',',array_keys($cols)),implode(',',array_values($cols)));
        $statement = $pdo->prepare($sql);
        $statement->execute();
    }
}