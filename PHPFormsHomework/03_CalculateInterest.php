<?php
    $amount = "";
    $currency = "";
    $interest = "";
    $period = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $interest = $_POST['interest'];
        $period = $_POST['period'];
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 03 - Calculate Interest</title>
        <meta charset="UTF-8" />
    </head>
    <body>        
        <form method="post" action="">
            Enter Amount:
            <input type="text" name="amount" id="amount" /><br />
            <input type="radio" name="currency" id="usd" value="usd"/> USD
            <input type="radio" name="currency" id="eur" value="eur" /> EUR
            <input type="radio" name="currency" id="bgn" value="bgn" /> BGN <br />
            Compound Interest Amount
            <input type="text" name="interest" id="interest" /><br />
            <select name="period" id="period">
                <option>6 Months</option>
                <option>1 Year</option>
                <option>2 Years</option>
                <option>5 Years</option>
            </select>
            <input type="submit" value="Calculate" />
                        
        
        <?php
        if (isset($_POST['amount'])):
            $amountNum = (int)$amount;
            $currSymbol = "";
            switch ($currency):
                case 'usd': $currSymbol = '$'; break;
                case 'eur': $currSymbol = '€'; break;
                case 'bgn': $currSymbol = 'лв'; break;
            endswitch;
            $interestNum = (int)$interest;
            $years = 0;
            switch ($period):
                case '6 Months': $years = 6; break;
                case '1 Year': $years = 12; break;
                case '2 Years': $years = 24; break;
                case '5 Years': $years = 60; break;
            endswitch;            
            $temp = $amount * pow(1 + (($interestNum / 100) / 12), $years);
            if ($currSymbol == 'лв'):
                $result = number_format($temp, 2) . " $currSymbol";
            else:
                $result = "$currSymbol " . number_format($temp, 2);
            endif;
            echo $result;
        endif;
        ?>
        </form>
    </body>
</html>