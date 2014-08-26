<?php
$text = $_GET['text'];
$blacklist = array_filter(preg_split('/[\s]+/', $_GET['blacklist']));
$allEmails = preg_match_all('/([a-zA-Z\d+_-]+)@([a-zA-Z\d-]+).([a-zA-Z\d-.]+)/', $text, $matches);

//var_export($matches[0]);

$validEmails = $matches[0];
//var_dump($blacklist);
//echo sizeof($validEmails) . "<br />";
//var_dump($validEmails) . "<br />";

for ($i = 0; $i < sizeof($validEmails); $i ++):
    $replaces = replaceEmail($validEmails[$i], $blacklist);
    $text = str_replace($validEmails[$i], $replaces, $text);
endfor;

echo '<p>' . $text . '</p>';
    
function replaceEmail($match, $blacklist) {
    preg_match("/(\..*)/", $match, $domain);
    $dom = "*" . $domain[0];
    if (in_array($dom, $blacklist) || in_array($match, $blacklist)):
        return str_pad('', strlen($match), '*');
    else:
        return "<a href=\"mailto:" . $match . "\">$match</a>";
    endif;
}
?>