<?php

echo "Welcome to the local, global and scope variables in php <br>";
$a = 98; //Global Variable, 

function printVal(){
    $a = 12; //Local Variable, Scope within the function
    echo $a;
}

echo $a;
echo "<br>";
printVal();

?>