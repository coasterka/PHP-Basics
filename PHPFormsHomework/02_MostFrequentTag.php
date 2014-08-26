<?php
    $input = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $input = $_POST['tags'];
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 02 - Most Frequent Tag</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <p>Enter Tags:</p>
        
        <form method="post" action="">
            <input type="text" name="tags" id="tags"/>
            <input type="submit" value="Submit"/>
        </form>
        <br>
        <?php
        $tags = array_filter(explode(", ", $input));
        $c = array_count_values($tags);
        if (sizeof($c) > 0):
            $val = array_search(max($c), $c);
            arsort($c);
            foreach ($c as $key => $value):
                echo "$key : $value times <br />";
            endforeach;
            echo "<p>Most Frequent Tag is: $val </p>";
        endif;
        ?>
    </body>
</html>