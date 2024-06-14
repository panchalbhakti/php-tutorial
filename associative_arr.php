<?php

//array
$arr = array('this', 'that', 'what');
echo $arr;
echo "<br>";
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";
echo "<br>";

//Associative array
$favCol = array (
    'Bhakti' => 'White',
    'Prachi' => 'Black'
);
echo $favCol['Bhakti'];
echo "<br>";
echo $favCol['Prachi'];
echo "<br>";
echo "<br>";

foreach($favCol as $key => $value){
    echo "Favourite color of $key is $value.";
    echo "<br>";
}
echo "<br>";

$favCar = array (
    'Bhakti' => 'Porche',
    'Prachi' => 'Vintage'
);
echo $favCar['Bhakti'];
echo "<br>";
echo $favCar['Prachi'];
echo "<br>";
echo "<br>";

foreach($favCar as $key => $value){
    echo "Favourite Car of $key is $value.";
    echo "<br>";
}

//Multidimentional array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Audi",5,2),
    array("Porshe",17,15),
  );
  echo "<br>";
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


?>