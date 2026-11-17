<?php

$numbers = [10, 15, 20, 25, 30, 35, 40];

$filtered = [];
$size = 7;
$count = 0;

for ($i = 0; $i < $size; $i++) {

    if ($numbers[$i] % 2 == 0) {

        $filtered[$count] = $numbers[$i];

        $count++;

    }

}

echo "<pre>";

for ($i = 0; $i < $count; $i++) {

    echo $filtered[$i] . "\n";

}

echo "</pre>";

?>
