<?php

$text = $_GET['text'];
$key = $_GET['key'];

// key = a7#"F5

$patternKey = preg_quote($key[0]); // a


for ($i = 1; $i < strlen($key) - 1; $i++): 
	if (ctype_digit($key[$i])):
        $patternKey .= '\d*';
    elseif (ctype_lower($key[$i])):
        $patternKey .= '[a-z]*';
    elseif (ctype_upper($key[$i])):
        $patternKey .= '[A-Z]*';
    else:
        $patternKey .= preg_quote($key[$i]);
    endif;
endfor;

$patternKey .= preg_quote($key[strlen($key) - 1]); // 5

$pattern = '/' . $patternKey . '(.{2,6})' . $patternKey . '/';

$matches = array();
preg_match_all($pattern, $text, $matches);
echo implode('', $matches[1]);

// echo $patternKey;

?>