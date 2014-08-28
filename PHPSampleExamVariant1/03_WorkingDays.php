<?php
date_default_timezone_set('Europe/Sofia');

// read the input
$startDate = $_GET['dateOne'];
$endDate = $_GET['dateTwo'];
$holidays = array_filter(preg_split('/[\s]+/', $_GET['holidays']));

// pushing all dates in the range in the $allDates array
$allDates = array();
$start = strtotime($startDate);
$end = strtotime($endDate);
while ($start <= $end):
    $allDates[] = date('d-m-Y', $start);
    $start = strtotime('+1 days', $start);
endwhile;

// array_intersect() finds the repeating values in two arrays
// it returns an associative array with key -> value as follows:
// key: the index of the repeating value; and
// value: the repeating value (date)
$existingHolidays = array_intersect($allDates, $holidays);

// remove/delete the official holidays from the $allDates array
// array_search() searches the array for a given value
// Returns the corresponding key if successful
foreach ($existingHolidays as $holiday => $date):
	$index = array_search($date, $allDates);
    if($index !== FALSE):
        unset($allDates[$index]);
    endif;
endforeach;

// check which of the remaining days are weekdays
foreach ($allDates as $dateIndex => $date):
	if (isWeekend($date)):
        unset($allDates[$dateIndex]);
    endif;
endforeach;

// printing the result
if (sizeof($allDates) > 0):
    echo "<ol>";
    foreach ($allDates as $workingDay):
        echo "<li>$workingDay</li>";
    endforeach;
    echo "</ol>";
else:
    echo "<h2>No workdays</h2>";
endif;

// the 'N' parameter takes values from 1 (for Monday) through 7 (for Sunday)
function isWeekend($date) {
    return (date('N', strtotime($date)) >= 6);
}
?>