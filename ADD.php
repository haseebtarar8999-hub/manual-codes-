<?php

echo "this is add ";
echo "<pre>";
$add = array(1,2,3,4,5);

$size = 5;
$position = 3;
$newvalue = 44;

for($i = $size; $i > $position;$i--){
    $add[$i] = $add[$i-1];
}
$add[$position] = $newvalue;

$size++;

for($i = 0;$i < $size;$i++){
    echo $add[$i]."<br>";
}
echo "<pre>";