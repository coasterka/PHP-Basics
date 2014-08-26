<?php
    $input = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $input = $_POST['tags'];
    endif;
    $tags = array();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 01 - Print Tags</title>
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
        $tags = array_filter(preg_split('/[ ,;]+/', $input));
        
        // Another way of splitting the array
        //$tags = array_filter(explode(", ", $input));
        
        echo '<ol start="0">';
        foreach ($tags as $tag):
            echo '<li>'.$tag.'</li>';
        endforeach;
        echo '</ol>';
        
        //Another way of joining the array
        //echo "<ol><li>" . implode("</li><li>", $array) . "</li></ol>";
        
        ?>
    </body>
</html>