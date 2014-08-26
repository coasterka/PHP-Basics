<!DOCTYPE html>
<html>
    <head>
        <title>Problem 01 - Square Root Sum</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/01_SquareRootSum.css" />
    </head>
    <body>
        <table>
            <tr>
                <th>Number</th>
                <th>Square root</th>
            </tr>
            <?php
            $sum = 0;
            for ($i = 0; $i <= 100; $i+=2):
            $sqrt = sqrt($i);
            $sum += $sqrt;
            ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= round($sqrt, 2) ?></td>
                </tr>
            <?php endfor; ?>
            <tr>
                <td><b>Total</b></td>
                <td><?= round($sum, 2) ?></td>
            </tr>
        </table>
    </body>
</html>