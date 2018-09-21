<?php


function fetchAll($connection) {
    $statment = $connection->prepare('SELECT * FROM people');
    $statment->execute();
    return = $statment->fetchAll(PDO::FETCH_CLASS);
}