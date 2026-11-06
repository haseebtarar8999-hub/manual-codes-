<?php
$numbers = array(1,2,3,4,5);

$size = 5;

$product = 1;
for($i = 0; $i < $size; $i++){
    $product = $product * $numbers[$i];
}
echo $product;

echo "<pre>";