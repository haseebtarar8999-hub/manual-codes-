<?php
$number =[
    [11,22,33,333],
    [44,55,66,666],
    [77,88,99,999]
];

$rows = 3;
$col = 4;
$value = 99;
$found = false;

for($i = 0;$i < $rows;$i++){
    for($j = 0; $j < $col;$j++){
        if($number[$i][$j]== $value){
            echo "value is at indexx".$number[$i][$j];
            $found = true;
            break;

        }
    }
}

if($found==false){
    echo "value not found ";
}