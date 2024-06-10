<?php

//while loop
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}
echo"<br>";
echo"<br>";

?>

<?php

//Do-while loop
$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 6);
echo"<br>";
echo"<br>";

?>

<?php

//For loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  echo"<br>";
  echo"<br>";

?>

<?php

//ForeEach Loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}
echo"<br>";
echo"<br>";

?>