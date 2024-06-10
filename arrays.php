<?php

//An array stores multiple values in one single variable:
$cars = array("Volvo", "BMW", "Toyota");

//Array Function
echo count($cars);

echo "<br>";
echo "<br>";

var_dump($cars);

echo "<br>";
echo "<br>";

echo $cars[0];

echo "<br>";
echo "<br>";

$cars[1] = "Ford";
var_dump($cars);

echo "<br>";
echo "<br>";

array_push($cars, "Ford");
var_dump($cars);

?>