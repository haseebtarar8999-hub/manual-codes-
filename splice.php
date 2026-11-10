<?php

$numbers = [10, 20, 30, 40, 50];

$size = 5;

$position = 1;
$remove = 2;

$newValues = [99, 88];
$newSize = 2;

$size = $size - $remove + $newSize;

for ($i = $position + $remove; $i < 5; $i++) {

    $numbers[$i - $remove + $newSize] = $numbers[$i];

}

for ($i = 0; $i < $newSize; $i++) {

    $numbers[$position + $i] = $newValues[$i];

}

for ($i = 0; $i < $size; $i++) {

    echo $numbers[$i] . "\n";



}
