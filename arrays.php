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

echo "<br>";
echo "<br>";

//associative Array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo "<br>";
echo "<br>";

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
echo "<br>";
echo "<br>";


$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);
echo "<br>";
echo "<br>";

//Array declaration in multiple lines
$cars = [
    "Volvo",
    "BMW",
    "Toyota"
  ];
  var_dump($car);
  echo "<br>";
echo "<br>";
  

?>