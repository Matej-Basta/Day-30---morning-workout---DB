<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Region.php');

$success = connect('localhost', 'world', 'root', '');

$newRegion = new Region();

$number = rand(1,999);

$newRegion->name = 'Area ' . $number;
$newRegion->slug = 'area_' . $number;
$newRegion->insert();


echo('<pre>');
var_export($newRegion);
echo('</pre>');
