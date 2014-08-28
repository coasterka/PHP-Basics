<?php
header('Content-Type: text/html; charset=utf-8');
$text = $_GET['text'];
$hashValue = $_GET['hashValue'];
$fontSize = $_GET['fontSize'];
$style = $_GET['fontStyle'];
$fontStyle = '';
if ($style == 'normal'):
    $fontStyle = "font-style:normal";
elseif ($style == 'italic'):
    $fontStyle = "font-style:italic";
else:
    $fontStyle = "font-weight:bold";
endif;
echo "<p style=\"font-size:$fontSize;$fontStyle;\">";
for ($i = 0; $i < strlen($text); $i++):
    $charCode = ord($text[$i]);
    if ($i % 2 == 1):
        $text[$i] = chr($charCode - $hashValue);
    else:
        $text[$i] = chr($charCode + $hashValue);
    endif;
endfor;
echo $text;
echo "</p>"
?>