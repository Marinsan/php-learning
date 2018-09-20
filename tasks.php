<?php
//require 'models/Task.php';
//new Task();

$tasks = [
    [
        'name' => 'Comprar pa',
        'completed' => false
    ],
    [
        'name' => 'Comprar llet',
        'completed' => true
    ],
    [
        'name' => 'Estudiar PHP',
        'completed' => false
    ]
];

require 'views/tasks.blade.php';