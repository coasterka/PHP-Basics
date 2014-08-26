<?php
    $string = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $string = $_POST['string'];
    endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Problem 02 - Coloring Texts</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/02_TextColorer.css" />
    </head>
    <body>
        <form method="post" action="">
            <textarea name="string"></textarea><br />
            <input type="submit" value="Color text" />
        </form>
        <br>
        <?php
        $coloredArray = array();
        if (isset($string) && strlen($string) > 0):
            $noSpacesWord = preg_replace('/\s+/', '', $string);
            $stringToArray = str_split($noSpacesWord);
            for ($i = 0; $i < sizeof($stringToArray); $i++):
                $currentChar = $stringToArray[$i];
                $asciiValue = ord($stringToArray[$i]);
                if ($asciiValue % 2 == 0):
                    $coloredArray[] = "<span class='red'>" . $currentChar . "</span>";
                else:
                    $coloredArray[] = "<span class='blue'>" . $currentChar . "</span>";
                endif;
            endfor;
            echo implode(' ', $coloredArray);
        endif;
        ?>
    </body>
</html>