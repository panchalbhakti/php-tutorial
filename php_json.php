<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//The json_encode() function is used to encode a value to JSON format.
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age);
echo"<br>";

$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
echo"<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
echo"<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true));
echo "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

echo $obj->Peter;
echo " ";
echo $obj->Ben;
echo " ";
echo $obj->Joe;
echo "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);

echo $arr["Peter"];
echo " ";
echo $arr["Ben"];
echo " ";
echo $arr["Joe"];
echo "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}

?>
</body>
</html>