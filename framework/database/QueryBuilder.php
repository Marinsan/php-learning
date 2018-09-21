<?php
class QueryBuidler {
    public static function fetchAll($connection) {
        $statment = $connection->prepare('SELECT * FROM people');
        $statment->execute();
        return = $statment->fetchAll(PDO::FETCH_CLASS);
}
}
