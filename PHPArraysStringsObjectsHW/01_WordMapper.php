<?php
    $string = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $string = $_POST['string'];
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 01 - Word Mapping</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/01_WordMapper.css" />
    </head>
    <body>
        <form method="post" action="">
            <textarea name="string"></textarea><br />
            <input type="submit" value="Count words" />
        </form>
        <br>
        <table>
        <?php
        $wordsArray = '';
        $wordsArray = array_filter(preg_split('/\W+/', strtolower($string)));
        $counts = array_count_values($wordsArray);
        if (isset($wordsArray) && sizeof($counts) > 0):
            foreach ($counts as $word => $times):
        ?>
                <tr>
                    <td>
                        <?=$word?>
                    </td>
                    <td>
                        <?=$times?>
                    </td>
                </tr>
        <?php
            endforeach;
        endif;
        ?>
        </table>
    </body>
</html>