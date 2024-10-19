<?php
// convert array to json
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo json_encode($age);

echo "<br>";
echo "<br>";

$cars = array("volvo", "bmw", "toyota");
echo json_encode($cars);

// convert json to array
$data = '{"Peter":35,"Ben":37,"Joe":43}';
$objects = json_decode($data);

echo "<br>";
echo "<br>";

foreach ($objects as $key => $obj) {
    echo $key;
    echo $obj;
    echo ",";
}

echo "<br>";
echo "<br>";

$data = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($data, true);
echo $arr['Peter'];
