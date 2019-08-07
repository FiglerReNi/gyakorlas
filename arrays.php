<?php

//Arrays
$cars1 = array("Volvo", "BMW", "Toyota");
echo $cars1[0];
echo "<br>";
echo $cars1[1];
echo "<br>";
echo $cars1[2];
echo "<br>";

echo count($cars1); //tömb hossza
echo "<br>";

for ($x = 0; $x < count($cars1); $x++) {
    echo $cars1[$x];
    echo "<br>";
}

//row - csak index
//array - index, név
//assoc - név

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo $value . ", ";
}
echo "<br>";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($age as $y => $y_value) {
    echo "Key=" . $y . ", Value=" . $y_value;
    echo "<br>";
}

$cars2 = array
    (
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

//kiirás1
echo $cars2[0][0] . ", " . $cars2[0][1] . ", " . $cars2[0][2] . ".<br>";
echo $cars2[1][0] . ", " . $cars2[1][1] . ", " . $cars2[1][2] . ".<br>";
echo $cars2[2][0] . ", " . $cars2[2][1] . ", " . $cars2[2][2] . ".<br>";
echo $cars2[3][0] . ", " . $cars2[3][1] . ", " . $cars2[3][2] . ".<br>";

//kiirás2
for ($i = 0; $i < count($cars2); $i++) {
    for ($j = 0; $j < count($cars2[$i]); $j++) {
        echo $cars2[$i][$j] . ", ";
    }
    echo "<br>";
}

//https://www.w3schools.com/php/func_array_column.asp
