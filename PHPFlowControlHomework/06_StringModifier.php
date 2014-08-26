<?php
    $word = "";
    $selectedRadio = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $word = $_POST['word'];
        $selectedRadio = $_POST['actions'];
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 06 - Modify String</title>
        <meta charset="UTF-8" />
    </head>
    <body>        
        <form method="post" action="">
            <input type="text" name="word" id="word"/>
            <input type="radio" name="actions" value="palindrome"/>
            <label for="palindrome">Check Palindrome</label>
            <input type="radio" name="actions" value="reverse"/>
            <label for="reverse">Reverse String</label>
            <input type="radio" name="actions" value="split"/>
            <label for="split">Split</label>
            <input type="radio" name="actions" value="hash"/>
            <label for="hash">Hash String</label>
            <input type="radio" name="actions" value="shuffle"/>
            <label for="shuffle">Shuffle String</label>            
            <input type="submit" value="Submit"/>
        </form>
        <br>
        <?php
        $result = '';
        if (isset($word) && strlen($word) > 0):
            switch ($selectedRadio):
                case 'palindrome':
                    if (isPalindrome($word)):
                        $result = $word . ' is a palindrome!';
                    else:
                        $result = $word . ' is not a palindrome!';
                    endif;
                break;
                case 'reverse':
                    $result = strrev($word);
                break;
                case 'split':
                    $noSpacesWord = preg_replace('/\s+/', '', $word);
                    $wordToArray = str_split($noSpacesWord);
                    $result = implode(' ', $wordToArray); 
                break;
                case 'hash':
                    $result = crypt($word);
                break;
                case 'shuffle':
                    $result = str_shuffle($word);
                break;
            endswitch;
        endif;
        echo $result;
        
        function isPalindrome($string) {
            return $string == strrev($string);
        }
        ?>
    </body>
</html>