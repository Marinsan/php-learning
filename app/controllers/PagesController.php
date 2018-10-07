<?php

namespace App\Controllers;

use App\Models\Lessons;
use App\Models\People;

class PagesController
{
    public function store()
    {
    }
    public function people()
    {
        $people = People::all();
        require view('people');
    }
    public function lessons()
    {
        $lessons = Lessons::all();
        require view('lessons');
    }
    public function about()
    {
        require view('about');
    }
    public function contact()
    {
        require view('contact');
    }


}

