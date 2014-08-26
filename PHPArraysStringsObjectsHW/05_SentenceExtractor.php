<?php
    $text = '';
    $word = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $text = $_POST['text'];
        $word = $_POST['word'];
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 05 - Sentence Extractor</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/05_SentenceExtractor.css" />
    </head>
    <body>
        <form method="post" action="">
            <label for="text">Text:</label><br />
            <textarea name="text"></textarea><br />
            <label for="banlist">Word:</label><br />
            <input type="text" name="word"/><br />
            <input type="submit" value="Extract sentence/s" />
        </form>
        <br>
        <?php
        if (isset($text) && strlen($text) > 0):
            $sentences = preg_split("/(?<=[.?!])\s*/", $text);
            $sentences = array_map('trim', $sentences);
            foreach ($sentences as $sentence):
                // \b sets the boundaries of the string
                // $ matches the end of the string
                if (preg_match("/\b$word\b.*[.?!]+$/", $sentence)):
                    echo "$sentence <br />";
                endif;
            endforeach;
        endif;
        ?>
    </body>
</html>