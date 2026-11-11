
<?php

function display(){

    for($i = 1; $i <= 10; $i++){

        echo $i . "<br>";
    }

}

function evenodd($num){

    if($num % 2 == 0){

        echo $num . " is an even number<br>";

    }
    else{

        echo $num . " is an odd number<br>";

    }

}

function multi($a, $b){

    $mul = $a * $b;

    return $mul;

}

display();

evenodd(10);
evenodd(15);
evenodd(20);

$result = multi(3, 5);

echo "Result: " . $result;
