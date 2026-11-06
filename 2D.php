<?php
$number  = [
    [11,22,33],
    [44,55,66],
    [77,88,99]
];
$rows = 3;
$column = 3;

for($i = 0;$i < 3;$i++){
    for($j = 0; $j <3;$j++){
        echo $number[$i][$j]."  ";
    }
    echo "<pre>";
}

echo "<pre>";