<?php

$numbers = [1, 2, 3, 4, 5];

$mapped = [];

$size = 5;

for ($i = 0; $i < $size; $i++) {

    $mapped[$i] = $numbers[$i] * 2;
    
}

echo "<pre>";

for ($i = 0; $i < $size; $i++) {

    echo $mapped[$i] . "\n";

}

echo "</pre>";
