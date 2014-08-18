<!DOCTYPE html>
<html>
    <head>
        <title>Problem 04 - Non-Repeating Digits</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
        // $number = 1234;
        // $number = 145;
        // $number = 15;
        $number = 247;
        
        $ditigsCount = strlen($number);
        $resultArr = array();        
        if ($ditigsCount < 3): echo "no"; die;
        else:
            for ($i = 102; $i <= $number; $i++):
                $firstDigit = (int)($i % 10);
                $secondDigit = (int)(($i / 10) % 10);
                $thirdDigit = (int)($i / 100);
                if (strlen($i) >= 4): break; endif;
                
                if ($firstDigit != $secondDigit && $firstDigit != $thirdDigit &&
                    $secondDigit != $thirdDigit):
                    array_push($resultArr, $i);
                endif;
            endfor;
            if (sizeof($resultArr) < 1): echo "no";
            else: echo implode(", ", $resultArr);
            endif;
        endif;
        ?>
    </body>
</html>