<!DOCTYPE html>
<html>
    <head>
        <title>Problem 02 - Sum Two Numbers</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
        // $firstNumber = 2;
        // $secondNumber = 5;
        // $firstNumber = 1.567808;
        // $secondNumber = 0.356;
        $firstNumber = 1234.5678;
        $secondNumber = 333;
        $sum = $firstNumber + $secondNumber;
        $rounded = number_format((float)$sum, 2, '.', '');
        echo "\$firstNumber + \$secondNumber = $firstNumber + $secondNumber = $rounded";
        ?>
    </body>
</html>