<?php

//Function with no parameters
function myFunction() {
    echo "I'm Bhakti Panchal";
}

myFunction();

//Function with 1 parameter
function Car($carname) {
    echo "I have a $carname.";
   }
   
   Car("Mercedes");
   echo "<br>";
   Car("Audi");
   echo"<br>";
   Car("Porsche");
 

//Function with 2 parameters
function mycar($carname, $numplate) {
 echo "I have a $carname and its number is $numplate";
}

mycar("Mercedes", 3128);
echo "<br>";
mycar("Audi", 1328);
echo"<br>";
mycar("Porsche", 3113);

?>
