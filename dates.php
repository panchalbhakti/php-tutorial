<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <?php

    echo "Hello to the world of dates<br>";
    $d = date("dS l, F y");
    echo "Today's date is $d <br>"
    ?>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "<br>";
echo "<br>";
?>

<?php
echo "The time is " . date("h:i:sa");
echo "<br>";
echo "<br>";
?>

<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
echo "<br>";
echo "<br>";
?>

<?php
//To create customize date
//mktime(hour, minute, second, month, day, year)
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br>";
echo "<br>";
?>


</body>
</html>