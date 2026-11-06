<?php
$n1 = array(1,2,3,4,5);
$n2 = array(6,7,8,9,10);

$size1 = 5;
$size2 = 5;

$merge = [];
$size = 0;
for($i = 0; $i < $size1; $i++){
    $merge[$size] = $n1[$i];
    $size++;
}

for($i = 0; $i <$size2; $i++){
    $merge[$size] = $n2[$i];
    $size++;
}

for($i = 0; $i < $size ; $i++){
    echo $merge[$i]."<br>";
}

echo "<pre>";