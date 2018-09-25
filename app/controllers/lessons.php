<?php

//require 'models/People.php';
//require 'framework/bootstrap.php';
//$people = People::all();
//

$school = Lessons::all();
require view('lessons',$school);