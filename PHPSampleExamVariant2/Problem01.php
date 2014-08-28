<?php

// exam problem solution from Angel Georgiev

$dateOne = $_GET['dateOne'];
$dateTwo = $_GET['dateTwo'];

$dateOneObj = date_create($dateOne, timezone_open('Europe/Sofia'));
$dateTwoObj = date_create($dateTwo, timezone_open('Europe/Sofia'));

$dateStart = ($dateOneObj < $dateTwoObj) ? $dateOneObj : $dateTwoObj;
$dateEnd = ($dateOneObj == $dateStart) ? $dateTwoObj : $dateOneObj;

$thursdays = array();

$currentDate = $dateStart;

while ($currentDate <= $dateEnd):
    $weekday = date_format($currentDate, 'w');
    
    if ($weekday == 4):
        $thursdays[] = date_format($currentDate, 'd-m-Y');
        date_add($currentDate, date_interval_create_from_date_string('7 days'));
        // continue;
    endif;
    
	// date_add($currentDate, date_interval_create_from_date_string('1 day'));
endwhile;

if (empty($thursdays)):
    echo "<h2>No Thursdays</h2>";
else:
    echo "<ol>";
    foreach ($thursdays as $thursday):
        echo "<li>$thursday</li>";
    endforeach;
    echo "</ol>";
endif;

?>