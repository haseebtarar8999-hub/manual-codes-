<?php
$rev = array(1,2,3,4,5,6,7,8,9,10);

$size = 10;

$start = 0 ;
$end = $size - 1;

while($start < $end){
    $temp  = $rev[$start];

    $rev[$start] = $rev[$end];

    $rev[$end] = $temp;

    $start++;
    $end--;
}

for($i = 0; $i < $size;$i++){
    echo $rev[$i]."<br>";
}

echo "<pre>";