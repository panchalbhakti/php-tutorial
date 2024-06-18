<?php

echo "Welcome to multi-dimensional array! ";
echo "<br>";
$multiDim = array(
                    array(1, 2, 3, 4),
                    array(5, 6, 7, 8),
                    array(9, 10, 11, 12),
                    array(13, 14, 15, 16)
);

echo var_dump($multiDim);
echo "<br>";
echo $multiDim[0][0];
echo $multiDim[0][1];
echo $multiDim[0][2];
echo $multiDim[0][3];

echo "<br>";
echo $multiDim[1][0];
echo $multiDim[1][1];
echo $multiDim[1][2];
echo $multiDim[1][3];

echo "<br>";
echo $multiDim[2][0];
echo $multiDim[2][1];
echo $multiDim[2][2];
echo $multiDim[2][3];

echo "<br>";
echo $multiDim[3][0];
echo $multiDim[3][1];
echo $multiDim[3][2];
echo $multiDim[3][3];

echo "<br>";
echo "<br>";

for($i = 0; $i < count($multiDim); $i++){
    echo var_dump($multiDim[$i]);
    echo "<br>";
}

echo "<br>";
echo "<br>";

for($i = 0; $i < count($multiDim); $i++){
    for($j = 0; $j < count($multiDim[$i]); $j++){
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>