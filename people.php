<?php

require 'models/People.php';
require 'framework/bootstrap.php';

$people = People::all();

require 'views/people.blade.php';