<?php

$num = 10;

function change($value){

    $value = 50;

    echo "Inside function: " . $value . "<br>";

}

change($num);

echo "Outside function: " . $num;
