<!DOCTYPE html>
<html>
    <head>
        <title>Problem 05 - Lazy Sundays</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
        function getSundays($y, $m)
        {
            return new DatePeriod(
                new DateTime("first sunday of $y-$m"),
                DateInterval::createFromDateString('next sunday'),
                new DateTime("last day of $y-$m+1")
            );
        }
        foreach (getSundays(date('Y'), date('n')) as $sunday) {
            echo $sunday->format("jS F, Y") . '<br />';
        }
        ?>
    </body>
</html>