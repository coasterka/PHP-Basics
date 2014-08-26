<?php
    $start = "";
    $end = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $start = $_POST['start'];
        $end = $_POST['end'];
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 04 - Find Primes in Range</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <form method="post" action="">
            <label for="start">Starting index</label>
            <input type="number" name="start" />
            <label for="end">End</label>
            <input type="number" name="end" />
            <input type="submit" />
        </form>
        <?php
        $result = array();
        if (isset($start)):
            for ($i = $start; $i <= $end; $i++):
                $isPrime = (($i % 2 != 0) && ($i % 3 != 0) && ($i % 5 != 0) && 
                            ($i % 7 != 0) && ($i != 1));
                $primeCases = (($i == 2) || ($i == 3) || ($i == 5) || ($i == 7));
                if ($isPrime || $primeCases):
                    $result[] = "<b>" . $i . "</b>";
                else:
                    $result[] = $i;
                endif;
            endfor;
            
            if (isset($result)):
                echo implode(", ", $result);
            endif;
        endif;
        ?>
    </body>
</html>
