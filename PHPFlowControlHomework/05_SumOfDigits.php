<?php
    $input = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $input = $_POST['numbers'];
    endif;
    $numbers = array();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 05 - Sum of Digits</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/05_SumOfDigits.css" />
    </head>
    <body>
        
        <form method="post" action="">
            <label for="numbers">Input string: </label>
            <input type="text" name="numbers" id="numbers"/>
            <input type="submit" value="Submit"/>
        </form>
        <br>
        <table>
        <?php
        $numbers = array_filter(preg_split('/[ ,;]+/', $input));
        if (isset($numbers) && sizeof($numbers) > 0):
        ?>
            <tr>
                <th>
                   Input Number 
                </th>
                <th>
                    Sum of Digits
                </th>
            </tr>
        <?php for ($i= 0; $i < sizeof($numbers); $i++): ?>
        <tr>
            <td>
                <?=$numbers[$i]?>
            </td>
            <td>
                <?php
                if (!is_numeric($numbers[$i])):
                    echo 'I cannot sum that';
                else:
                    $sum = 0;
                    $sum = array_sum(str_split($numbers[$i]));
                    echo $sum;
                endif;
                ?>
            </td>
        </tr>
        <?php
        endfor;
        endif;
        ?>
        </table>
    </body>
</html>