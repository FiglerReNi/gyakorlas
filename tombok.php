<?php

$figyelt = array(17, 2, 5, 8, 23, 17, 29);
$kapottfajl = array(3, 5, 9, 17, 29, 0, 2, 49, 37);
$uj = array();

for($j = 0; $j < count($kapottfajl); $j++){
$i = 0;
while($i < count($figyelt) and $figyelt[$i] != $kapottfajl[$j]) {
    $i++;
}
if($i >= count($figyelt)) { 
    $uj[] = $kapottfajl[$j];
}
}
for ($x = 0; $x < count($uj); $x++) {
    echo $uj[$x];
    echo "<br>";
}
