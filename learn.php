<?php
declare(strict_types=1);

$a = 5;
$b = 7;

$temp = $a;
$a = $b;
$b = $temp;

unset($temp);

echo $a . '<br>' . $b . '<br>';


function _swap(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
    return true;
}

$name = 'haseeb';
$email = 'haseebeclix@gmail.com';

echo "name -> $name <br>email -> $email <br>";

if(_swap($name, $email)){
    echo "name -> $name <br>email -> $email <br>";
}


function greeting($name='john doe'){
    return "Hello $name";
}

function summition(int|float $a, int|float $b){
    return $a + $b;
}

function sum_all(int ...$all){
    return array_sum($all);
}

echo sum_all(1, 2, 3, 4, 5, 6, 7, 8);


function divisible_by_3($a)
{
    return $a % 3 === 0;
}

$array = [3, 4, 5, 6, 7, 8, 9];

$squares = array_map(fn ($x)=>$x*$x, $array);

echo '<pre>';
print_r($squares);
