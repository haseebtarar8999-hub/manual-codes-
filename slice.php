<?php

$slice = array(1,2,3,4,5,6,7,8,9,10);

$size  = 10;

$start = 2;
$length = 3;

$index = 0;

$result = [];

for($i = $start;$i < $start + $length; $i++){
    $result[$index] = $slice[$i];
    $index++;
}
for($i = 0; $i< $index ; $i++){
    echo $result[$i];
}
