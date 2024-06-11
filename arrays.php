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

$myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
  ];
  var_dump($myCar);
  echo "<br>";
echo "<br>";

//Accessing array element
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];
echo "<br>";
echo "<br>";

//updating array values
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);
echo "<br>";
echo "<br>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
var_dump($cars);
echo "<br>";
echo "<br>";

// adding something in arrays
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
var_dump($fruits);
echo "<br>";
echo "<br>";

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
var_dump($cars);
echo "<br>";
echo "<br>";

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);
echo "<br>";
echo "<br>";

//Removing array items
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);
echo "<br>";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);
echo "<br>";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
var_dump($cars);
echo "<br>";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);
var_dump($cars);
echo "<br>";
echo "<br>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);
echo "<br>";
echo "<br>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);
echo "<br>";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($newarray);
echo "<br>";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);
echo "<br>";
echo "<br>";

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
var_dump($cars);
echo "<br>";
echo "<br>";

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
var_dump($numbers);
echo "<br>";
echo "<br>";

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
var_dump($numbers);
echo "<br>";
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
var_dump($age);
echo "<br>";
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
var_dump($age);
echo "<br>";
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
var_dump($age);
echo "<br>";
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
var_dump($age);
echo "<br>";
echo "<br>";

?>