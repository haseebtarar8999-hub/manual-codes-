
<?php

$stack = [];
$top = -1;

function push(&$stack, &$top, $value) {

    $top++;

    $stack[$top] = $value;

    echo "Inserted: " . $value . "<br>";
}


function pop(&$stack, &$top) {

    if ($top == -1) {

        echo "Stack is empty<br>";

    }
    else {

        echo "Removed: " . $stack[$top] . "<br>";

        $top--;

    }
}


function peek($stack, $top) {

    if ($top == -1) {

        echo "Stack is empty<br>";

    }
    else {

        echo "Top Element: " . $stack[$top] . "<br>";

    }
}


function display($stack, $top) {

    if ($top == -1) {

        echo "Stack is empty<br>";

    }
    else {

        echo "<h3>Stack Elements</h3>";

        for ($i = $top; $i >= 0; $i--) {

            echo $stack[$i] . "<br>";

        }

    }
}


function menu(&$stack, &$top, $choice, $value) {

    switch ($choice) {

        case 1:

            push($stack, $top, $value);

            break;


        case 2:

            pop($stack, $top);

            break;


        case 3:

            peek($stack, $top);

            break;


        case 4:

            display($stack, $top);

            break;


        case 5:

            echo "Program Ended";

            break;


        default:

            echo "Invalid Choice";

    }

}


$choice = 0;

while ($choice != 5) {

    echo "<h3>STACK MENU</h3>";

    echo "1. PUSH <br>";
    echo "2. POP <br>";
    echo "3. PEEK <br>";
    echo "4. DISPLAY <br>";
    echo "5. EXIT <br>";

    $choice = 1;
    $value = 10;

    menu($stack, $top, $choice, $value);

    break;

}

