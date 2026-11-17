<?php

$stack = [];
$top = -1;

$choice = 0;

while ($choice != 5) {

    echo "<h3>STACK MENU</h3>";

    echo "1. PUSH <br>";
    echo "2. POP <br>";
    echo "3. PEEK <br>";
    echo "4. DISPLAY <br>";
    echo "5. EXIT <br>";

    $choice = 1; // Change this value to test different operations

    switch ($choice) {

        case 1:

            $value = 10;

            $top++;

            $stack[$top] = $value;

            echo "Inserted: " . $value . "<br>";

            break;


        case 2:

            if ($top == -1) {

                echo "Stack is empty<br>";

            }
            else {

                echo "Removed: " . $stack[$top] . "<br>";

                $top--;

            }

            break;


        case 3:

            if ($top == -1) {

                echo "Stack is empty<br>";

            }
            else {

                echo "Top Element: " . $stack[$top] . "<br>";

            }

            break;


        case 4:

            if ($top == -1) {

                echo "Stack is empty<br>";

            }
            else {

                echo "<h3>Stack Elements</h3>";

                for ($i = $top; $i >= 0; $i--) {

                    echo $stack[$i] . "<br>";

                }

            }

            break;


        case 5:

            echo "Program Ended";

            break;


        default:

            echo "Invalid Choice";

    }

}
