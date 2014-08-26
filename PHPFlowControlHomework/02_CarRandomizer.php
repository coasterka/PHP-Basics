<!DOCTYPE html>
<html>
    <head>
        <title>Problem 02 - Rich People's Problems</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/02_CarRandomizer.css" />
    </head>
    <body>
        <form method="post" action="">
            Enter cars
            <input type="text" name="cars" id="cars" />
            <input type="submit" value="Show result" />
        </form>
        <?php
        if (isset($_POST['cars']) && $_POST['cars'] != ''):
        $carsList = $_POST['cars'];
        //$cars = explode(', ', $carsList);
        $cars = array_filter(preg_split('/[ ,;]+/', $carsList));
        ?>
        
        <table>
            <tr>
                <th>Car</th>
                <th>Color</th>
                <th>Count</th>
            </tr>
            
        <?php
        $colors = ['red', 'yellow', 'blue', 'pink', 'black', 'white', 'silver'];
        foreach ($cars as $carName):
            $count = rand(1, 5);
            $randColor = array_rand($colors);
        ?>
        <tr>
            <td><?=$carName?></td>
            <td><?= $colors[$randColor] ?></td>
            <td><?= $count ?></td>
        </tr>
        <?php
        endforeach;
        ?>
        </table>
        <?php
        endif;
        ?>
        
    </body>
</html>