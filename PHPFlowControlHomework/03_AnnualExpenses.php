<?php
    $yearCount = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $yearCount = $_POST['yearCount'];
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 03 - Annual Expenses</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/03_AnnualExpenses.css" />
    </head>
    <body>
        <form action="" method="post">
            <label for="yearCount">Enter number of years:</label>
            <input type="number" name="yearCount" min="1" max="10"/>
            <input type="submit" value="Show costs" /><br />
        </form>
        <table>
            <tr>
            <?php
            // declaring an empty array which will hold the strings to be printed
            $result = array();
            $currentYear = date('Y');
            
            array_push($result, "<th>Year</th>");
            
            // getting all the months in a year and pushing them to the result array
            for ($m = 1; $m <= 12; $m++):
                $month = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                array_push($result, "<th>$month</th>");
            endfor;
            
            array_push($result, "<th>Total</th>");
            
            // getting random expenses for every month as well as their sum
            for($year = 0; $year < $yearCount; $year++):
                $jan = rand(0, 999);
                $feb = rand(0, 999);
                $mar = rand(0, 999);
                $apr = rand(0, 999);
                $may = rand(0, 999);
                $jun = rand(0, 999);
                $jul = rand(0, 999);
                $aug = rand(0, 999);
                $sep = rand(0, 999);
                $oct = rand(0, 999);
                $nov = rand(0, 999);
                $dec = rand(0, 999);
                $sum = $jan + $feb + $mar + $apr + $may + $jun + 
                       $jul + $aug + $sep + $oct + $nov + $dec;
                       
                // pushing the monthly random expenses and the sum to the result array
                array_push($result, 
                    "<tr><td>$currentYear</td>
                    <td>$jan</td>
                    <td>$feb</td>
                    <td>$mar</td>
                    <td>$apr</td>
                    <td>$may</td>
                    <td>$jun</td>
                    <td>$jul</td>
                    <td>$aug</td>
                    <td>$sep</td>
                    <td>$oct</td>
                    <td>$nov</td>
                    <td>$dec</td>
                    <td style='text-align: right'>$sum</td></tr>"
                );
                $currentYear--;
            endfor;
            
            // printing the final result
            if (isset($yearCount) && $yearCount != null):
                echo join('', $result);
            endif;
            ?>
            </tr>
        </table>
    </body>
</html>