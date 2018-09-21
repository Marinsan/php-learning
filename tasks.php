<?php

//new Task();

//$tasks = [
//    [
//        'name' => 'Comprar pa',
//        'completed' => false
//    ],
//    [
//        'name' => 'Comprar llet',
//        'completed' => true
//    ],
//    [
//        'name' => 'Estudiar PHP',
//        'completed' => false
//    ]
//];
//$tasks = [
//    new Task( 'comprar pa',  true),
//    new Task( 'comprar llet',  true),
//    new Task( 'Estudiar PHP',  false)
//];
//require 'framework/database/connect.php';
//$pdo = connect();

// CONSULTA SQL -> STATEMENT SQL

//$results = $statment->fetchAll(PDO::FETCH_CLASS, Task::class);
//var_dump($results);

//$statment->execute();
//$tasks = $statment->fetchAll(PDO::FETCH_CLASS);

require 'framework/bootstrap.php'
require 'models/Task.php';


$statment = $pdo->prepare('SELECT * FROM Tasks');
$tasks = Task::all();

require 'views/tasks.blade.php';