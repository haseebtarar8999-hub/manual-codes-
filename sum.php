<?php
$sum = array(1,2,3,4,5);

$size = 5;
$final = 0;

for($i = 0; $i < $size; $i++){
    $final = $final + $sum[$i];
}
echo $final;

echo "<pre>";