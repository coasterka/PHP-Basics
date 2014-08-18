<!DOCTYPE html>
<html>
    <head>
        <title>Problem 06 - HTML Table</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/06_InformationTable.css" />
    </head>
    <body>
        <?php
        // $name = 'Gosho';
        // $phone = '0882-321-423';
        // $age = 24;
        // $address = 'Hadji Dimitar';
        $name = 'Pesho';
        $phone = '0884-888-888';
        $age = 67;
        $address = 'Suhata Reka';
        
        echo (
        "<table>
            <tr>
                <td>Name</td>
                <td> $name </td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td> $phone </td>
            </tr>
            <tr>
                <td>Age</td>
                <td> $age </td>
            </tr>
            <tr>
                <td>Address</td>
                <td> $address </td>
            </tr>
        </table>"
        );
        ?>
    </body>
</html>