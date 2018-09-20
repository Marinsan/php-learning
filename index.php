<?php

require 'functions.php';

var_dump($_GET);

$greeting= hello($_GET['who']);
//die();

//Array/Vector
//
//$platan = 'platan';
//$presec = 'presec';
//$taronja = 'taronja';$fruites = [$platan, $presec, $taronja];
//
//echo $fruites[0];
//die();

//Array associatiu


//$person="Cristian Marin Tejeda";

//$person = [
//    'name' => 'Cristian Marin Tejeda',
//    'dni' => '1231233N'
//    'mobile' => '668897234'
//]

require 'functions.php';
$greeting= hello($_GET['who']);
require 'views/index.blade.php';

