<?php
$del = array(10,20,30,40,50,60,70,80,90,100);

$size = 10;
$position = 1;

for($i = $position; $i < $size - 1;$i++){
    $del[$i] = $del[$i + 1];
}

$size--;

for($i = 0; $i < $size;$i++){
    echo $del[$i]."<br>";
}
