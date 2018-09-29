<?php

namespace App\Controllers;

use Framework\App;

class AddController{

    public function storeTasks()
    {
        App::get('database')->insert('tasks', [
            'name' => $_POST['name']
        ]);
        return view('tasks');
    }

    public function storePeople()
    {
        App::get('database')->insert('people', [
            'name' => $_POST['name']
        ]);
        return view('people');
    }

    public function storeLessons()
    {
        App::get('database')->insert('lessons', [
            'name' => $_POST['name']
        ]);
        return view('lessons');
    }

    public function createTasks()
    {
        //show create form
        return view('task.add');
    }

    public function createLessons()
    {
        //show create form
        return view('lessons.add');
    }

    public function createPeople()
    {
        //show create form
        return view('people.add');
    }

}
