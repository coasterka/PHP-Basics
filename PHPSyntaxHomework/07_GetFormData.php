<?php
$result = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST'):
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $result = 'My name is ' . $name . '. I am ' . $age .
    ' years old. I am ' . $gender . '.';
endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 07 - Form Data</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="name" id="name"
            placeholder="Name" />
            <br />
            <input type="number" name="age" id="age" max="99"
            placeholder="Age" />
            <br />
            <input type="radio" name="gender" value="male" />
            Male
            <br>
            <input type="radio" name="gender" value="female" />
            Female
            <br>
            <input type="submit" value="Изпращане" />
            <br>
        </form>
        <br>
        <?php
        echo $result;
        ?>
    </body>
</html>