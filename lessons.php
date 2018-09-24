<?php

//require 'models/People.php';
//require 'framework/bootstrap.php';
//$people = People::all();
//

$database = require 'framework/bootstrap.php';

$lessons = $database->selectAll('lessons');

require 'views/people.blade.php';

