<?php

namespace App\Controllers;

use App\Framework\App;

class TaskController {
    /**
     * Show all tasks.
     */
    public function index()
{
    $database = App::resolve('database');
    $tasks = $database->fetchAll('tasks');
    return view('tasks');
}
    /**
     * Store a new task in the database.
     */
    public function store()
{
    $database = App::resolve('database');
    $database->insert('tasks', [
        "name" => $_POST['name']
    ]);
    return view('tasks');
}
}