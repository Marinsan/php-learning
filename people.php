<?php

require 'models/people.php';
require 'framework/database/connect.php';
require 'framework/database/querybuilder.php';
$pdo = connect();
$people = fetchAll($pdo,'people');
require 'views/people.blade.php';

