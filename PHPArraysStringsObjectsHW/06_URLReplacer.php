<?php
    $text = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $text = $_POST['text'];
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 06 - URL Replacer</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/06_URLReplacer.css" />
    </head>
    <body>
        <form method="post" action="">
            <label for="text">Text:</label><br />
            <textarea name="text"></textarea><br />
            <input type="submit" value="Replace URLs" />
        </form>
        <br>
        <?php
        if (isset($text) && strlen($text) > 0):
            $text = preg_replace("/<a[\s]+href[\s]+=[\s]+\"/", "[URL=", $text);
            $text = preg_replace("/\">/", "]", $text);
            $text = preg_replace("/<\/a>/", "[\URL]", $text);
            echo htmlentities($text);
        endif;
        ?>
    </body>
</html>