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


?>