<?php
$nameString = $_GET['name'];
$genderString = $_GET['gender'];
$pinString = $_GET['pin'];

$isValidData = true;

$namePattern = '/[A-Z][a-z]*\s+[A-Z][a-z]*/';
preg_match($namePattern, $nameString, $name);

$pinPattern = '/[\d]{10}/';
preg_match($pinPattern, $pinString, $pin);

if (empty($name) || empty($pin)) :
    $isValidData = false;
else :
    $name = $name[0];
    $pin = $pin[0];
    $isValidData = pinValidate($pin, $genderString);
endif;

if ($isValidData):
    $output = [
        'name' => $name,
        'gender' => $genderString,
        'pin' => $pin
    ];
    echo json_encode($output);
else:
    echo "<h2>Incorrect data</h2>";
endif;



function pinValidate($pin, $genderString) {
    if ($genderString == 'male'):
        $genderCheck = 0;
    else: // $genderString == 'female'
        $genderCheck = 1;
    endif;
    
    $year = substr($pin, 0, 2);
    $month = substr($pin, 2, 2);
    $day = substr($pin, 4, 2);
    
    if ($month > 40):
        $month -= 40;
        $year = '20' . $year;
    elseif ($month > 20 ):
        $month -= 20;
        $year = '18' . $year;
    else:
        $year = '19' . $year;
    endif;
    
    $dateString = $day . '-' . $month . '-' . $year;
    $date = date_create($dateString, timezone_open('Europe/Sofia'));
    $dateCheck = date_format($date, 'd-m-Y');
    
    if ($dateCheck != $dateString):
        return FALSE;
    endif;
    
    $gender = substr($pin, 8, 1);
    
    if ($gender % 2 != $genderCheck):
        return FALSE;
    endif;
    
    $pinWeights = [2, 4, 8, 5, 10, 9, 7, 3, 6];
    $sum = 0;
    
    for ($i = 0; $i < sizeof($pinWeights); $i++):
        $sum += $pinWeights[$i] * $pin[$i];
    endfor;
    
    $checksum = $pin[9];
    $sumCheck = $sum % 11 % 10; // if the remainder = 10, take only the 0
    
    if ($checksum != $sumCheck):
        return FALSE;
    endif;
    
}
?>