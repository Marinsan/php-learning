<?php

namespace App\Controllers;

# Per no tenir un fitxer per a cada controlador, les reunim en sols un.

class PagesController {

    public function home()
    {
//        Task::all();
        return view('tasks');
    }

    public function tasks()
    {
//        Task::all();
        return view('tasks');
    }

    public function people()
    {
//        People::all();
        return view('people');
    }

    public function lessons()
    {
//        Lessons::all();
        return view('lessons');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}