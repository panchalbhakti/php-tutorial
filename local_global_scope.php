<?php

echo "Welcome to the local, global and scope variables in php <br>";
$a = 98; //Global Variable
$b = 25; //Global Variable

function printVal(){
    $a = 12; //Local Variable, Scope within the function
    global $a, $b; //Gives access to the global variable
    echo $a;
    echo "<br>";
    echo $b;
}

echo $a;
echo "<br>";
printVal();
echo "<br>";
echo var_dump($GLOBALS);

?>