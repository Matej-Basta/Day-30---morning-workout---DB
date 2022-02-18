<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Region.php');

$success = connect('localhost', 'world', 'root', '');

function getAreasByFirstDigit($number)
{
    $query = "
        SELECT `regions`.*
        FROM `regions`
        WHERE `name` LIKE ?
        ORDER BY `name` DESC
        LIMIT 3
    ";

    $results = select($query, ['area ' . $number . '%']);
    
    return $results;
}

$listOfResults = getAreasByFirstDigit(1);

echo('<pre>');
var_export($listOfResults);
echo('</pre>');
