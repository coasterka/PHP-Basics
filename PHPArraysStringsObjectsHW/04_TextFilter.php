<?php
    $text = '';
    $banlist = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $text = $_POST['text'];
        $banlist = $_POST['banlist'];
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 04 - Text Filter</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/04_TextFilter.css" />
    </head>
    <body>
        <form method="post" action="">
            <label for="text">Text:</label><br />
            <textarea name="text"></textarea><br />
            <label for="banlist">Banned words:</label><br />
            <input type="text" name="banlist"/><br />
            <input type="submit" value="Filter text" />
        </form>
        <br>
        <?php
        if (isset($text) && strlen($text) > 0):
            $bannedWordsArr = explode(', ', $banlist);
            foreach ($bannedWordsArr as $word):
                $text = str_replace($word, str_repeat('*', strlen($word)), $text); 
            endforeach;
            echo $text;
        endif;
        ?>
    </body>
</html>